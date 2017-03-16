<?php

require_once APP . 'model/admin.php';

class AdminController
{

  function __construct()
  {
    if (isset($_SESSION['current_user'])) {
      $this->current_user = $_SESSION['current_user'];
      $this->current_userID = $_SESSION['current_user']->userID;
      $model = new Admin();
      if ($model->is_admin($this->current_userID) == NULL) {
        $_SESSION['message'] = 'You do not have the administrative privilege';
        Redirect(URL);
      }
    }

  }

  public function index()
  {
    $model = new Admin();
    $search_query = '';

    if (isset($_GET['q'])) {
      if (strlen($_GET['q']) == 0) {
        Redirect(URL . 'admin');
      } else {
        $search_query = $_GET['q'];
      }
    }

    $result = $model->get_user_table($search_query);

    $tables_data['user'] =  $result;

    require APP . 'view/_templates/header.php';
    require APP . 'view/admin/index.php';
    require APP . 'view/_templates/footer.php';
  }

  public function user()
  {
    if (isset($_GET['userID']) && strlen($_GET['userID']) > 0) {
      $userID = $_GET['userID'];

      $model = new Admin();
      $tables = array('user', 'profile', 'circle', 'circleFriends', 'message',
                    'photoCollection', 'photo', 'comment', 'annotation', 'blog');
      $tables_data = array();
      foreach($tables as $table) {
        $table_data = $model->get_user_rows($userID, $table);
        $tables_data[$table] =  $table_data;
      }
      $tables_data['post'] = $model->get_user_posts($userID);
      $tables_data['relationship'] = $model->get_user_relationship($userID);

      require APP . 'view/_templates/header.php';
      require APP . 'view/admin/user.php';
      require APP . 'view/_templates/footer.php';
    } else {
      Redirect(URL . 'admin');
    }
  }

  public function delete()
  {
    $userID = $_GET['userID'];
    $table = $_GET['table'];
    $tableID = $_GET['tableID'];
    $id = $_GET['ID'];
    $model = new Admin();
    $result = $model->delete($table, $tableID, $id);

    if ($result) {
      $_SESSION['message'] =  $table . ' ' . $id . ' deleted';
    } else {
      $_SESSION['message'] = 'Fail to delete ' . $table . ' ' . $id;
    }
    Redirect(URL . 'admin/user?userID=' . $userID);
  }

}
?>

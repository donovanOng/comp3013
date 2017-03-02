<?php

require_once APP . 'model/admin.php';

class AdminController
{

  function __construct()
  {
    if (isset($_SESSION['current_user'])) {
      $this->current_user = $_SESSION['current_user'];
      $this->current_userID = $_SESSION['current_user']->userID;
    }
  }

  public function index()
  {
    $model = new Admin();
    $users = $model->users();

    require APP . 'view/_templates/header.php';
    require APP . 'view/admin/index.php';
    require APP . 'view/_templates/footer.php';
  }

  public function delete_user()
  {
    if (isset($_GET['userID']) && strlen($_GET['userID'] > 0)) {
      $userID = $_GET['userID'];
      $model = new Admin();
      $result = $model->delete_user($userID);

      if ($result) {
        $_SESSION['message'] = 'User ' . $userID . ' deleted';
      } else {
        $_SESSION['message'] = 'Fail to delete User ' . $userID;
      }
      Redirect(URL . 'admin');

    } else {
      Redirect(URL . 'admin');
    }
  }

  public function update_user()
  {
    if (isset($_POST['update'])) {
      $userID = $_POST['userID'];
      $first_name = $_POST['first_name'];
      $last_name = $_POST['last_name'];
      $email = $_POST['email'];

      $model = new Admin();
      $result = $model->update_user($userID,
                                    $first_name,
                                    $last_name,
                                    $email);
      if ($result) {
        $_SESSION['message'] = 'User ' . $userID . ' updated';
      } else {
        $_SESSION['message'] = 'Fail to update User ' . $userID;
      }
      Redirect(URL . 'admin');

    } else {
      Redirect(URL . 'admin');
    }
  }

}

?>

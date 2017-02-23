<?php

require_once APP . 'model/user.php';

class UserController
{

  public function index()
  {
    $model = new User();
    $users = $model->get_all();

    // TODO: ONLY admin can view
    
    require APP . 'view/_templates/header.php';
    require APP . 'view/users/index.php';
    require APP . 'view/_templates/footer.php';
  }

  public function profile($userID)
  {

    $model = new User();
    $user = $model->find_by_id($userID);

    require APP . 'view/_templates/header.php';
    require APP . 'view/users/profile.php';
    require APP . 'view/_templates/footer.php';
  }

  public function search()
  {
    if (isset($_GET['query']) && strlen($_GET['query']) > 0) {
      $query = $_GET['query'];
      $model = new User();
      $users = $model->find_by_name($query);

      require APP . 'view/_templates/header.php';
      require APP . 'view/users/result.php';
      require APP . 'view/_templates/footer.php';
    }
  }
}

?>

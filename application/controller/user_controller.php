<?php

require_once APP . 'model/user.php';

class UserController
{
  // TODO: ONLY admin can view
  public function index()
  {
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

}

?>

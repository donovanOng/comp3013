<?php

require APP . 'model/user.php';

class UserController
{
  // TODO: ONLY admin can view
  public function index()
  {
    require APP . 'view/_templates/header.php';
    require APP . 'view/users/index.php';
    require APP . 'view/_templates/footer.php';
  }
}

?>

<?php

require APP . 'model/user.php';

class HomeController
{
  public function index() {

    $current_user = NULL;
    if (isset($_SESSION['current_user'])) {
      $current_user = $_SESSION['current_user'];
    }

    require APP . 'view/_templates/header.php';
    require APP . 'view/home/index.php';
    require APP . 'view/_templates/footer.php';
  }
}
?>

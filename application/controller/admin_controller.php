<?php


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
    require APP . 'view/_templates/header.php';
    require APP . 'view/admin/index.php';
    require APP . 'view/_templates/footer.php';
  }

}

?>

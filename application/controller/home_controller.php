<?php

require_once APP . 'model/user.php';
require_once APP . 'model/post.php';

class HomeController
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
    $model = new Post();
    $posts = $model->posts_feed($this->current_userID);

    require APP . 'view/_templates/header.php';
    require APP . 'view/home/index.php';
    require APP . 'view/_templates/footer.php';
  }
}
?>

<?php

require_once APP . 'model/circle.php';

class CircleController
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
    // list of user's photos if logged in
    $this->user_index($this->current_userID);
  }

  public function user_index($circle_userID)
  {
    $model = new Circle();
    $circlesAdmin = $model->find_user_circle_admin($circle_userID);
    $circlesMember = $model->find_user_circle_member($circle_userID);

    require APP . 'view/_templates/header.php';
    require APP . 'view/circles/index.php';
    require APP . 'view/_templates/footer.php';
  }

}

?>

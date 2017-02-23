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
    $circles = $model->find_user_circle($circle_userID);

    require APP . 'view/_templates/header.php';
    require APP . 'view/circles/index.php';
    require APP . 'view/_templates/footer.php';
  }

    public function view($circleID)
  {
    // display photos from single collection
    $model = new Circle();
    $message = $model->find_message_by_circleID($circleID);

    require APP . 'view/_templates/header.php';
    require APP . 'view/circles/view.php';
    require APP . 'view/_templates/footer.php';

  }
}

?>

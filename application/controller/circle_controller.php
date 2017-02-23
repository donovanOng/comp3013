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

  public function view($circleID)
  {
    // display photos from single collection
    $model = new Circle();
    $circle = $model->find_circle_by_ID($circleID);
    $messages = $model->find_messages_by_circleID($circleID);
    $members = $model->find_members_by_circleID($circleID);

    require APP . 'view/_templates/header.php';
    require APP . 'view/circles/view.php';
    require APP . 'view/_templates/footer.php';
  }

  public function new()
  {

    if (isset($_GET['name'])) {

      $circle_name = $_GET['name'];
      $model = new Circle();
      $result = $model->create($circle_name,
                               $this->current_userID);

      if ($result) {
        $_SESSION['message'] = 'Circle created!';
      } else {
        $_SESSION['message'] = 'Fail to create circle!';
      }

    }

    Redirect(URL . 'circle');
  }

  public function delete()
  {
    if (isset($_GET['circleID'])) {
        $circleID = $_GET['circleID'];

        $model = new Circle();
        $result = $model->delete($circleID, $this->current_userID);

        if ($result) {
          $_SESSION['message'] = 'Circle deleted!';
        } else {
          $_SESSION['message'] = 'Fail to delete circle!';
        }

        Redirect(URL . 'circle');

    } else {
      $_SESSION['message'] = 'No Circle ID';
      Redirect(URL . 'circle');
    }
  }

}

?>

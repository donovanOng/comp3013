<?php

require_once APP . 'model/admin.php';

class AdminController
{

  function __construct()
  {
    if (isset($_SESSION['current_user'])) {
      $this->current_user = $_SESSION['current_user'];
      $this->current_userID = $_SESSION['current_user']->userID;
      $model = new Admin();
      if ($model->is_admin($this->current_userID) == NULL) {
        $_SESSION['message'] = 'You do not have the administrative privilege';
        Redirect(URL);
      }
    }

  }

  public function index()
  {
    $model = new Admin();
    $users = $model->users();
    $profiles = $model->profiles();
    $circles = $model->circles();
    $messages = $model->messages();
    $collections = $model->collections();
    $photos = $model->photos();
    $comments = $model->comments();

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

  public function delete_circle()
  {
    if (isset($_GET['circleID']) && strlen($_GET['circleID'] > 0)) {
      $circleID = $_GET['circleID'];
      $model = new Admin();
      $result = $model->delete_circle($circleID);

      if ($result) {
        $_SESSION['message'] = 'Circle ' . $circleID . ' deleted';
      } else {
        $_SESSION['message'] = 'Fail to delete Circle ' . $circleID;
      }
      Redirect(URL . 'admin');

    } else {
      Redirect(URL . 'admin');
    }
  }

  public function update_circle()
  {
    if (isset($_POST['update'])) {
      $circleID = $_POST['circleID'];
      $name = $_POST['name'];

      $model = new Admin();
      $result = $model->update_circle($circleID,
                                      $name);
      if ($result) {
        $_SESSION['message'] = 'Circle ' . $circleID . ' updated';
      } else {
        $_SESSION['message'] = 'Fail to update Circle ' . $circleID;
      }
      Redirect(URL . 'admin');

    } else {
      Redirect(URL . 'admin');
    }
  }

  public function delete_message()
  {
    if (isset($_GET['messageID']) && strlen($_GET['messageID'] > 0)) {
      $messageID = $_GET['messageID'];
      $model = new Admin();
      $result = $model->delete_message($messageID);

      if ($result) {
        $_SESSION['message'] = 'Message ' . $messageID . ' deleted';
      } else {
        $_SESSION['message'] = 'Fail to delete Message ' . $circleID;
      }
      Redirect(URL . 'admin');

    } else {
      Redirect(URL . 'admin');
    }
  }

  public function update_message()
  {
    if (isset($_POST['update'])) {
      $messageID = $_POST['messageID'];
      $content = $_POST['content'];

      $model = new Admin();
      $result = $model->update_message($messageID,
                                      $content);
      if ($result) {
        $_SESSION['message'] = 'Message ' . $messageID . ' updated';
      } else {
        $_SESSION['message'] = 'Fail to update Message ' . $messageID;
      }
      Redirect(URL . 'admin');

    } else {
      Redirect(URL . 'admin');
    }
  }


}

?>

<?php

require_once APP . 'model/user.php';
require_once APP . 'model/friend.php';

class UserController
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

    $friendModel = new Friend();
    $isFriend = $model->is_friend($this->current_userID,$userID);
    $initiator = $friendModel->friendship_initiator($this->current_userID,$userID);
    if($this->current_userID == $userID){
      $isUser = true;
    } else {
      $isUser = false;
    };

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

  public function add_friend()
  {
    if (isset($_GET['userID'])) {
        $userID = $_GET['userID'];

        $model = new Friend();
        $result = $model->add_friends($this->current_userID,$userID,1);
        if ($result) {
          $_SESSION['message'] = 'Add Successfully!';
        } else {
          $_SESSION['message'] = 'Fail to add friend!';
        }

        // TODO: Remove image files in public directory

        Redirect(URL . $userID);
      }
    }

    public function accept_friendships()
    {
      if (isset($_GET['userID'])) {
          $userID = $_GET['userID'];

          $model = new Friend();
          $result = $model->accept_friendship($this->current_userID,$userID);
          if ($result) {
            $_SESSION['message'] = 'You are now friends!!';
          } else {
            $_SESSION['message'] = 'I`m sorry I can`t be your friend :(';
          }

          // TODO: Remove image files in public directory

          Redirect(URL . $userID);
        }
    }

    public function reject_friendships()
    {
      if (isset($_GET['userID'])) {
          $userID = $_GET['userID'];

          $model = new Friend();
          $result = $model->reject_friendship($this->current_userID,$userID);
          if ($result) {
            $_SESSION['message'] = 'I`m sorry I can`t be your friend :(';
          } else {
            $_SESSION['message'] = 'One more chance to reconsider...';
          }

          // TODO: Remove image files in public directory

          Redirect(URL . $userID);
        }
    }
}

?>

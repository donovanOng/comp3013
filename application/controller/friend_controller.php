<?php

require_once APP . 'model/friend.php';

class FriendController
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

  public function user_index($friend_userID)
  {
    $model = new Friend();
    $friends = $model->find_user_friend($friend_userID, 0);

    require APP . 'view/_templates/header.php';
    require APP . 'view/friends/index.php';
    require APP . 'view/_templates/footer.php';
  }

}

?>

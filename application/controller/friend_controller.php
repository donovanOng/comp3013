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

  public function user_index($friend_userID)
  {
    $model = new Friend();
    $friends = $model->find_user_friend($friend_userID, 0);
    $friend_req_sent = $model->find_friend_req_sent($friend_userID);
    $friend_req_received = $model->find_friend_req_received($friend_userID);

    require APP . 'view/_templates/header.php';
    require APP . 'view/friends/index.php';
    require APP . 'view/_templates/footer.php';
  }

}

?>

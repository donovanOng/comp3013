<?php

require_once APP . 'model/user.php';
require_once APP . 'model/friend.php';
require_once APP . 'model/collection.php';

class CollectionController
{

  function __construct()
  {
    if (isset($_SESSION['current_user'])) {
      $this->current_user = $_SESSION['current_user'];
      $this->current_userID = $_SESSION['current_user']->userID;
    }
  }

  public function user_index($collection_userID)
  {
    $model = new User();
    $user = $model->find_by_id($collection_userID);

    if (can_access_user($this->current_userID, $collection_userID) == false) {
      $_SESSION['message'] = 'You dont have rights to view collections of ' . user_name($user->userID);
      Redirect(URL);
    }

    $friendModel = new Friend();
    $is_friend = $model->is_friend($this->current_userID, $collection_userID);
    $initiator = $friendModel->friendship_initiator($this->current_userID, $collection_userID);

    $model = new Collection();
    $collections_owned = $model->find_user_collection($collection_userID);

    require APP . 'view/_templates/header.php';
    require APP . 'view/collections/index.php';
    require APP . 'view/_templates/footer.php';
  }

  public function view($collectionID)
  {
    // display photos from single collection
    $model = new Collection();
    $collection = $model->find_by_id($collectionID);

    if (!$collection) {
      $_SESSION['message'] = 'Collection ' . $collectionID . ' does not exist';
      Redirect(URL);
    }

    $all_user_circles = $model->find_all_user_circles($collection->userID);
    $current_access_circles = $model->find_access_circles($collectionID);

    $collection_photos = NULL;

    if ($collection->accessRights < 2 && $this->current_userID != $collection->userID) {

      $modelFriends = new Friend();
      if ($collection->accessRights == 0) {
        // Friends
        $access_by_relationship = $modelFriends->find_user_friend($collection->userID);
      } else {
        // Friends of friends
        $access_by_relationship = $modelFriends->find_friends_of_friends($collection->userID);
      }
      $access_by_circle = $model->find_circle_members_access($collectionID);

      if (!in_array_field($this->current_userID, 'userID', $access_by_relationship) &&
          !in_array_field($this->current_userID, 'userID', $access_by_circle)) {
        $_SESSION['message'] = 'You dont have rights to access Collection ' . $collection->collectionID;
        Redirect(URL . $collection->userID);
      }

    }

    $collection_photos = $model->find_colllection_photos($collectionID);

    require APP . 'view/_templates/header.php';
    require APP . 'view/collections/view.php';
    require APP . 'view/_templates/footer.php';

  }

  public function create()
  {
    if (isset($_POST['submit'])) {
      $name = $_POST['name'];

      $model = new Collection();
      $result = $model->create($this->current_userID,
                               $name);
      if ($result) {
        $_SESSION['message'] = 'Collection created successfully';
      } else {
        $_SESSION['message'] = 'Fail to create Collection';
      }
      Redirect(URL . 'collection');

    } else {
      Redirect(URL . 'collection');
    }
  }

  public function update()
  {
    if (isset($_POST["update"])) {
      $accessRights = $_POST["accessRights"];
      $collectionID = $_POST["collectionID"];

      if(!empty($_POST['accessCircles'])) {
        $newAccessCircles = $_POST['accessCircles'];
      } else{
        $newAccessCircles = [];
      }

      $model = new Collection();
      $oldAccessCircles = array_column($model->find_access_circles($collectionID), 'circleID');

      $circleInsert = array_diff($newAccessCircles, $oldAccessCircles);
      $circleDelete = array_diff($oldAccessCircles, $newAccessCircles);

      $error = [];

      foreach($circleInsert as $insert) {
        $result = $model->insert_access_circles($collectionID, $insert);
        $error[] = $result;
      }
      foreach($circleDelete as $delete) {
        $result = $model->delete_access_circles($collectionID, $delete);
        $error[] = $result;
      }

      $result = $model->update_collection_rights($collectionID,
                                                 $this->current_userID,
                                                 $accessRights);
      $error[] = $result;


      if (!in_array(0, $error)) {
        $_SESSION['message'] = 'Collection updated successfully';
      } else {
        $_SESSION['message'] = 'Fail to update collection';
      }

      Redirect(URL . "collection/" . $collectionID);

    } else {
      Redirect(URL . 'collection');
    }
  }

  public function update_collection_name()
  {
    if (isset($_POST['update'])) {

      $collectionID = $_POST['collectionID'];
      $name = $_POST['name'];

      $model = new Collection();
      $result = $model->update_collection_name($collectionID,
                                               $name);

      if ($result) {
        $_SESSION['message'] = 'Collection name updated successfully';
      } else {
        $_SESSION['message'] = 'Fail to update collection name';
      }

      Redirect(URL . "collection/" . $collectionID);

    } else {
      Redirect(URL . 'collection');
    }
  }

  public function delete()
  {
    if (isset($_GET['collectionID'])) {
        $collectionID = $_GET['collectionID'];

        $model = new Collection();
        $result = $model->delete($collectionID,
                                 $this->current_userID);

        if ($result) {
          $_SESSION['message'] = 'Collection deleted successfully';
        } else {
          $_SESSION['message'] = 'Fail to delete collection';
        }

        // TODO: Remove image files in public directory

        Redirect(URL . 'collection');

    } else {
      $_SESSION['message'] = 'No Collection ID';
      Redirect(URL . 'collection');
    }
  }

}

?>

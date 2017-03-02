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

    $friendModel = new Friend();
    $is_friend = $model->is_friend($this->current_userID, $collection_userID);
    $initiator = $friendModel->friendship_initiator($this->current_userID, $collection_userID);

    $model = new Collection();
    $collections = $model->find_user_collection($collection_userID);

    require APP . 'view/_templates/header.php';
    require APP . 'view/collections/index.php';
    require APP . 'view/_templates/footer.php';
  }

  public function view($collectionID)
  {
    // display photos from single collection
    $model = new Collection();
    $collection = $model->find_by_id($collectionID);

    $collection_photos = NULL;
    if ($collection != NULL) {

      if ($collection->viewRights < 2 && $this->current_userID != $collection->userID) {
        $users_with_view_accesss = $model->find_users_with_collection_access($collection->userID,  $collection->viewRights);
        if (!in_array_field($this->current_userID, 'userID', $users_with_view_accesss)) {
          $_SESSION['message'] = 'You dont have rights to view Collection ' . $collection->collectionID;
          Redirect(URL . $collection->userID);
        }
      }

      if ($collection->uploadRights < 2 && $this->current_userID != $collection->userID){
        $users_with_upload_accesss = $model->find_users_with_collection_access($collection->userID,  $collection->uploadRights);
        $user_upload_rights = in_array_field($this->current_userID, 'userID', $users_with_upload_accesss);
      } else {
        $user_upload_rights = True;
      }

      $collection_photos = $model->find_colllection_photos($collectionID);

      require APP . 'view/_templates/header.php';
      require APP . 'view/collections/view.php';
      require APP . 'view/_templates/footer.php';

    } else {
      $_SESSION['message'] = 'Collection ' . $collectionID . ' does not exist.';
      Redirect(URL);
    }
  }

  public function create()
  {
    // TODO: Add name to collection
    $model = new Collection();
    $result = $model->create($this->current_userID);

    if ($result) {
      $_SESSION['message'] = 'Collection created!';
    } else {
      $_SESSION['message'] = 'Fail to create collection!';
    }

    Redirect(URL . 'collection');
  }

  public function update()
  {
    if (isset($_POST["update"])) {

      $uploadRights = $_POST["uploadRights"];
      $viewRights = $_POST["viewRights"];
      $collectionID = $_POST["collectionID"];
      $model = new Collection();
      $result = $model->update_collection_rights($collectionID,
                                                 $this->current_userID,
                                                 $uploadRights,
                                                 $viewRights);

      if ($result) {
        $_SESSION['message'] = 'Collection updated!';
      } else {
        $_SESSION['message'] = 'Fail to update collection!';
      }

      Redirect(URL . "collection\\" . $collectionID);

    } else {
      $_SESSION['message'] = 'Missing required POST header';
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
          $_SESSION['message'] = 'Collection deleted!';
        } else {
          $_SESSION['message'] = 'Fail to delete collection!';
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

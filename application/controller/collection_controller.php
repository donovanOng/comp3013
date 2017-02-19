<?php

require_once APP . 'model/collection.php';

class CollectionController
{

  private function in_array_field($needle, $needle_field, $haystack, $strict = false) {
      if ($strict) {
          foreach ($haystack as $item)
              if (isset($item->$needle_field) && $item->$needle_field === $needle)
                  return true;
      }
      else {
          foreach ($haystack as $item)
              if (isset($item->$needle_field) && $item->$needle_field == $needle)
                  return true;
      }
      return false;
  }

  public function index()
  {
    // diplay list of user's collection if logged in
    $current_user = NULL;
    $current_user = $_SESSION['current_user'];
    $userID = $current_user->userID;

    $this->user_index($userID);

  }

  public function user_index($userID)
  {
    $model = new Collection();
    $collections = $model->find_user_collection($userID);

    require APP . 'view/_templates/header.php';
    require APP . 'view/collections/index.php';
    require APP . 'view/_templates/footer.php';
  }

  public function view($collectionID)
  {

    $current_user = $_SESSION['current_user'];
    $userID = $current_user->userID;

    // display photos from single collection
    $model = new Collection();
    $collection = $model->find_by_id($collectionID);

    $collection_photos = NULL;
    if ($collection != NULL) {

      if ($collection->viewRights < 2 && $userID != $collection->userID) {
        $users_with_view_accesss = $model->find_users_with_collection_access($collection->userID,  $collection->viewRights);
        if (!$this->in_array_field($userID, 'userID', $users_with_view_accesss)) {
          $_SESSION['message'] = 'You dont have rights to view Collection ' . $collection->collectionID;
          header('location: ' . URL . $collection->userID);
          die();
        }
      }

      if ($collection->uploadRights < 2 && $userID != $collection->userID){
        $users_with_upload_accesss = $model->find_users_with_collection_access($collection->userID,  $collection->uploadRights);
        $user_upload_rights = $this->in_array_field($userID, 'userID', $users_with_upload_accesss);
      } else {
        $user_upload_rights = True;
      }

      $collection_photos = $model->find_colllection_photos($collectionID);
    }

    require APP . 'view/_templates/header.php';
    require APP . 'view/collections/view.php';
    require APP . 'view/_templates/footer.php';


  }

  public function create()
  {
    // TODO: Add name to collection

    $current_user = NULL;
    $current_user = $_SESSION['current_user'];
    $userID = $current_user->userID;

    $model = new Collection();
    $result = $model->create($userID);

    if ($result) {
      $_SESSION['message'] = 'Collection created!';
    } else {
      $_SESSION['message'] = 'Fail to create collection!';
    }

    header('location: ' . URL . 'collection');
  }

  public function update()
  {
    if (isset($_POST["update"])) {

      $current_user = $_SESSION['current_user'];
      $userID = $current_user->userID;

      $uploadRights = $_POST["uploadRights"];
      $viewRights = $_POST["viewRights"];
      $collectionID = $_POST["collectionID"];
      $model = new Collection();
      $result = $model->update_collection_rights($collectionID,
                                                 $userID,
                                                 $uploadRights,
                                                 $viewRights);

      if ($result) {
        $_SESSION['message'] = 'Collection updated!';
      } else {
        $_SESSION['message'] = 'Fail to update collection!';
      }

      header('location: ' . URL . "collection\\" . $collectionID);

    } else {
      $_SESSION['message'] = 'Missing required POST header';
      header('location: ' . URL . 'collection');
    }
  }

  public function delete()
  {
    if (isset($_GET['collectionID'])) {
        $collectionID = $_GET['collectionID'];

        $model = new Collection();
        $result = $model->delete($collectionID);

        if ($result) {
          $_SESSION['message'] = 'Collection deleted!';
        } else {
          $_SESSION['message'] = 'Fail to delete collection!';
        }

        // TODO: Remove image files in public directory

        header('location: ' . URL . 'collection');

    } else {
      $_SESSION['message'] = 'No Collection ID';
      header('location: ' . URL . 'collection');
    }
  }



}

?>

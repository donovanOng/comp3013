<?php

require_once APP . 'model/photo.php';
require_once APP . 'model/collection.php';

class PhotoController
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
    // list of user's photos if logged in
    $current_user = NULL;
    $current_user = $_SESSION['current_user'];
    $userID =$current_user->userID;

    $this->user_index($userID);
  }

  public function user_index($userID)
  {
    $model = new Photo();
    $photos = $model->find_user_photos($userID);

    require APP . 'view/_templates/header.php';
    require APP . 'view/photos/index.php';
    require APP . 'view/_templates/footer.php';
  }

  public function view($photoID)
  {

    $current_user = $_SESSION['current_user'];
    $userID =$current_user->userID;

    // display photo and comments
    $model = new Photo();
    $photo = $model->find_by_id($photoID);

    $photo_comments = NULL;
    if ($photo != NULL) {

      $collectionID = $photo->collectionID;
      $collection_model = new Collection();
      $collection = $collection_model->find_by_id($collectionID);

      if ($collection->viewRights < 2 && $userID != $collection->userID && $photo->userID != $userID) {
        $users_with_view_accesss = $collection_model->find_users_with_collection_access($collection->userID,  $collection->viewRights);
        if (!$this->in_array_field($userID, 'userID', $users_with_view_accesss)) {
          $_SESSION['message'] = 'You dont have rights to view photo ' . $photo->photoID;
          header('location: ' . URL);
          die();
        }
      }

      $photo_comments = $model->find_photo_comments($photoID);
    }

    require APP . 'view/_templates/header.php';
    require APP . 'view/photos/view.php';
    require APP . 'view/_templates/footer.php';
  }

  public function upload()
  {

    $current_user = NULL;
    $current_user = $_SESSION['current_user'];
    $userID = $current_user->userID;

    if (isset($_GET['collectionID'])) {
        $collectionID = $_GET['collectionID'];

        // TODO: Check if user has upload access to photo collection

        require APP . 'view/_templates/header.php';
        require APP . 'view/photos/upload.php';
        require APP . 'view/_templates/footer.php';

    } else if (isset($_POST['submit'])) {

      $collectionID = $_POST['collectionID'];
      $uploadFile = $_FILES['uploadFile'];

      // TODO: Check if user has upload access to photo collection
      // TODO validate file format, size
      // TODO rename file if already exist

      $targetDirectory = "uploads/users/" . $userID . '/';
      // create user's directory if it does not exist
      if (!file_exists($targetDirectory)) {
          mkdir($targetDirectory, 0777, true);
      }

      $targetFile = $targetDirectory . basename($uploadFile["name"]);
      $uploadResult = move_uploaded_file($uploadFile["tmp_name"], $targetFile);

      if ($uploadResult) {
        // insert into database
        $model = new Photo();
        $result = $model->create($userID,
                                $collectionID,
                                $targetFile);
        if ($result) {
          $_SESSION['message'] = 'Photo uploaded successfully';
          header('location: ' . URL . 'collection/' . $collectionID);
        } else {
          $_SESSION['message'] = 'Photo upload failed';
          unlink($targetFile); // remove uploaded file
          header('location: ' . URL . 'photo/upload?collectionID=' . $collectionID);
        }


      } else {
        $_SESSION['message'] = 'Photo upload failed';
        header('location: ' . URL . 'photo/upload?collectionID=' . $collectionID);
      }

    } else {
      $_SESSION['message'] = 'No Collection ID';
      header('location: ' . URL);
    }

  }

}

?>

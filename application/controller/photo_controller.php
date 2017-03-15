<?php

require_once APP . 'model/user.php';
require_once APP . 'model/friend.php';
require_once APP . 'model/photo.php';
require_once APP . 'model/collection.php';

if (ENVIRONMENT == 'prod') {
  require_once APP . 'libs/azure_upload.php';
}

class PhotoController
{

  function __construct()
  {
    if (isset($_SESSION['current_user'])) {
      $this->current_user = $_SESSION['current_user'];
      $this->current_userID = $_SESSION['current_user']->userID;
    }
  }

  public function user_index($photo_userID)
  {
    $model = new User();
    $user = $model->find_by_id($photo_userID);

    if (can_access_user($this->current_userID, $photo_userID) == false) {
      $_SESSION['message'] = 'You dont have rights to view photos of ' . user_name($user->userID);
      Redirect(URL);
    }

    $friendModel = new Friend();
    $is_friend = $model->is_friend($this->current_userID, $photo_userID);
    $initiator = $friendModel->friendship_initiator($this->current_userID, $photo_userID);

    $model = new Photo();
    $photos = $model->find_user_photos($photo_userID);

    require APP . 'view/_templates/header.php';
    require APP . 'view/photos/index.php';
    require APP . 'view/_templates/footer.php';
  }

  public function view($photoID)
  {
    // display photo and comments
    $model = new Photo();
    $photo = $model->find_by_id($photoID);

    if (!$photo) {
      $_SESSION['message'] = 'Photo ' . $photoID . ' does not exist';
      Redirect(URL);
    }

    $photo_comments = NULL;
    if ($photo != NULL) {
      $photo_comments = $model->find_photo_comments($photoID);
      $photo_annotations = $model->get_annotations($photoID);
      $photo_annotations_userID = array_column($photo_annotations, 'userID');
      $photo_user_Liked_photo = in_array($this->current_userID, $photo_annotations_userID);
    }

    require APP . 'view/_templates/header.php';
    require APP . 'view/photos/view.php';
    require APP . 'view/_templates/footer.php';
  }

  public function upload()
  {

    if (isset($_POST['collectionID'])) {

      $collectionID = $_POST['collectionID'];
      $uploadFile = $_FILES['uploadFile'];

      $result = $this->upload_photo($collectionID, $uploadFile);

      if ($result) {
        $_SESSION['message'] = 'Photo uploaded successfully';
      } else {
        $_SESSION['message'] = 'Photo upload failed';
      }

      Redirect(URL . 'collection/' . $collectionID);

    } else {
      $_SESSION['message'] = 'No Collection ID';
      Redirect(URL);
    }

  }

  private function upload_photo($collectionID, $uploadFile)
  {
    $model = new Photo();
    $last_photoID = $model->get_last_photoID()->photoID;
    $save_filename = $this->current_userID . '_' . ($last_photoID + 1) . '.jpg';

    if (ENVIRONMENT != 'prod') {
      $targetDirectory = "uploads/users/" . $this->current_userID . '/';
      // create user's directory if it does not exist
      if (!file_exists($targetDirectory)) {
          mkdir($targetDirectory, 0777, true);
      }

      // TODO validate file format, size

      $targetFile = $targetDirectory . $save_filename;
      $uploadResult = move_uploaded_file($uploadFile["tmp_name"], $targetFile);
      if ($uploadResult) {
        $result = $model->create($this->current_userID, $collectionID, URL . $targetFile);
        if (!$result) { unlink($targetFile); }
        return $result;
      } else {
        return FALSE;
      }

    } else {
      // Upload to Azure Blob Storage
      $uploadResult = upload_to_azure($uploadFile, $save_filename);
      if (!$uploadResult) {
        return FALSE;
      } else {
        $result = $model->create($this->current_userID, $collectionID, $uploadResult);
        return $result;
      }
    }
  }

  public function delete_photo()
  {
    if (isset($_POST['delete'])) {
      $photoID = $_POST['photoID'];

      // insert into database
      $model = new Photo();
      $result = $model->delete_photo($photoID);
      if ($result) {
        $_SESSION['message'] = 'Photo deleted successfully';
      } else {
        $_SESSION['message'] = 'Fail to delete photo';
      }
      Redirect(URL . $this->current_userID . '/photo');

    } else {
      Redirect(URL);
    }
  }

  public function set_photo_annotation()
  {
    if (isset($_GET['photoID'])) {

      $photoID = $_GET['photoID'];
      $userID = $_GET['userID'];

      // insert into database
      $model = new Photo();
      $result = $model->set_annotation($photoID,
                                       $userID);
      if ($result) {
        $_SESSION['message'] = 'Annotation added successfully';
      } else {
        $_SESSION['message'] = 'Fail to add Annotation';
      }
      Redirect(URL . 'photo/' . $photoID);

    } else {
      Redirect(URL);
    }
  }

  public function delete_photo_annotation()
  {
    if (isset($_GET['photoID'])) {

      $photoID = $_GET['photoID'];
      $userID = $_GET['userID'];

      // insert into database
      $model = new Photo();
      $result = $model->delete_annotation($photoID,
                                          $userID);
      if ($result) {
        $_SESSION['message'] = 'Annotation deleted successfully';
      } else {
        $_SESSION['message'] = 'Fail to delete Annotation';
      }
      Redirect(URL . 'photo/' . $photoID);

    } else {
      Redirect(URL);
    }
  }

}

?>

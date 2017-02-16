<?php

require APP . 'model/photo.php';

class PhotoController
{

  public function index()
  {

    // list of user's photos if logged in
    $current_user = NULL;
    $photos = NULL;

    if (isset($_SESSION['current_user'])) {
      $current_user = $_SESSION['current_user'];
      $model = new Photo();
      $photos = $model->find_user_photos($current_user->userID);

      require APP . 'view/_templates/header.php';
      require APP . 'view/photos/index.php';
      require APP . 'view/_templates/footer.php';

    } else {
      $_SESSION['message'] = 'Not logged in!';
      require APP . 'view/_templates/header.php';
      require APP . 'view/_templates/footer.php';
    }

  }

  public function browse($photoID)
  {

    // display photo and comments
    $photoID = $photoID[0];
    $model = new Photo();
    $photo = $model->find_by_id($photoID);

    // TODO: Check if user has view access to photo

    $photo_comments = NULL;
    if (count($photo) > 0) {
      $photo_comments = $model->find_photo_comments($photoID);
    }

    require APP . 'view/_templates/header.php';
    require APP . 'view/photos/browse.php';
    require APP . 'view/_templates/footer.php';
  }

  public function upload()
  {
    $current_user = NULL;

    if (isset($_SESSION['current_user'])) {
      $current_user = $_SESSION['current_user'];

      if (isset($_GET['collectionID'])) {
          $collectionID = $_GET['collectionID'];

          // TODO: Check if user has upload access to photo collection

          require APP . 'view/_templates/header.php';
          require APP . 'view/photos/upload.php';
          require APP . 'view/_templates/footer.php';

      } else {
        $_SESSION['message'] = 'No collection id';
        header('location: ' . URL);
      }

    } else {
      $_SESSION['message'] = 'Not logged in!';
      header('location: ' . URL);
    }
  }

  public function create()
  {
    if (isset($_SESSION['current_user'])) {
      $current_user = $_SESSION['current_user'];

      if (isset($_POST['submit'])) {
        $collectionID = $_POST['collectionID'];
        $uploadFile = $_FILES['uploadFile'];

        // TODO validate file format, size
        // TODO rename file if already exist

        $targetDirectory = "uploads/users/" . $current_user->userID . '/';
        // create user's directory if it does not exist
        if (!file_exists($targetDirectory)) {
            mkdir($targetDirectory, 0777, true);
        }

        $targetFile = $targetDirectory . basename($uploadFile["name"]);
        $uploadResult = move_uploaded_file($uploadFile["tmp_name"], $targetFile);

        if ($uploadResult) {
          // insert into database
          $model = new Photo();
          $result = $model->create($current_user->userID,
                                  $collectionID,
                                  $targetFile);
          if ($result) {
            $_SESSION['message'] = 'Photo uploaded successfully';
            header('location: ' . URL . 'collection/browse/' . $collectionID);
          } else {
            $_SESSION['message'] = 'Photo upload failed';
            unlink($targetFile); // remove uploaded file
            header('location: ' . URL . 'photo/upload?collectionID=' . $collectionID);
          }


        } else {
          $_SESSION['message'] = 'Photo upload failed';
          header('location: ' . URL . 'photo/upload?collectionID=' . $collectionID);
        }
      }

    } else {
      $_SESSION['message'] = 'Not logged in!';
      header('location: ' . URL);
    }
  }

}

?>

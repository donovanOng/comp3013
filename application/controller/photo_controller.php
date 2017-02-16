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

    $photo_comments = NULL;
    if (count($photo) > 0) {
      $photo_comments = $model->find_photo_comments($photoID);
    }

    require APP . 'view/_templates/header.php';
    require APP . 'view/photos/browse.php';
    require APP . 'view/_templates/footer.php';
  }


}

?>

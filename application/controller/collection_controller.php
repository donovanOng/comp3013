<?php

require APP . 'model/collection.php';

class CollectionController
{

  public function index()
  {
    // diplay list of user's collection if logged in
    $current_user = NULL;
    $collections = NULL;

    if (isset($_SESSION['current_user'])) {
      $current_user = $_SESSION['current_user'];
      $model = new Collection();
      $collections = $model->find_user_collection($current_user->userID);

      require APP . 'view/_templates/header.php';
      require APP . 'view/collections/index.php';
      require APP . 'view/_templates/footer.php';

    } else {
      $_SESSION['message'] = 'Not logged in!';
      require APP . 'view/_templates/header.php';
      require APP . 'view/_templates/footer.php';
    }

  }

  public function browse($collectionID)
  {
    // display photos from single collection
    $collectionID = $collectionID[0];
    $model = new Collection();
    $collection = $model->find_by_id($collectionID);

    $collection_photos = NULL;
    if (count($collection) > 0) {
      $collection_photos = $model->find_colllection_photos($collectionID);
    }

    require APP . 'view/_templates/header.php';
    require APP . 'view/collections/browse.php';
    require APP . 'view/_templates/footer.php';
  }


}

?>

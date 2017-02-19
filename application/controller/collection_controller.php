<?php

require_once APP . 'model/collection.php';

class CollectionController
{

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
    // display photos from single collection
    $model = new Collection();
    $collection = $model->find_by_id($collectionID);

    // TODO: Check if user has view access to collection

    $collection_photos = NULL;
    if (count($collection) > 0) {
      $collection_photos = $model->find_colllection_photos($collectionID);
    }

    require APP . 'view/_templates/header.php';
    require APP . 'view/collections/view.php';
    require APP . 'view/_templates/footer.php';
  }

  public function create()
  {
    // TODO: add name to collection
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

  public function delete()
  {
    // TODO: Delete collection and all images in collection
  }


}

?>

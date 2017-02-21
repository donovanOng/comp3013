<?php

require_once APP . 'model/post.php';

class PostController
{

  function __construct()
  {
    if (isset($_SESSION['current_user'])) {
      $this->current_user = $_SESSION['current_user'];
      $this->current_userID = $_SESSION['current_user']->userID;
    }
  }

  public function index()
  {
    // TODO: show list of all posts for admon
    // otherwise 404 page
  }

  public function user_index($post_userID)
  {
    // TODO: show 404 page
  }

  public function view($postID)
  {
    // display photos from single collection
    $model = new Post();
    $post = $model->find_by_id($postID);

    require APP . 'view/_templates/header.php';
    require APP . 'view/posts/view.php';
    require APP . 'view/_templates/footer.php';

  }

}
?>

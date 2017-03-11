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

  public function user_index($post_userID)
  {
    $_SESSION['message'] = URL . 'post does not exist.';
    Redirect(URL);
  }

  public function view($postID)
  {
    // display photos from single collection
    $model = new Post();
    $post = $model->find_by_id($postID);

    if (!$post) {
      $_SESSION['message'] = 'Post ' . $postID . ' does not exist.';
      Redirect(URL);
    }

    require APP . 'view/_templates/header.php';
    require APP . 'view/posts/view.php';
    require APP . 'view/_templates/footer.php';
  }

  public function new_post()
  {
    if (isset($_POST['submit'])) {

      // TODO: check if current_userID is the owner of blogID

      $blogID = $_POST['blogID'];
      $title = $_POST['title'];
      $body = $_POST['body'];

      $model = new Post();
      $result = $model->create($blogID,
                               $title,
                               $body);

      if ($result) {
        $_SESSION['message'] = 'Post created successfully';
      } else {
        $_SESSION['message'] = 'Fail to create post';
      }

      Redirect(URL . 'blog/' . $blogID);

    } else {
      Redirect(URL);
    }

  }

  public function delete()
  {
    if (isset($_GET['postID']) && strlen($_GET['postID']) > 0 ) {

      $postID = $_GET['postID'];

      // TODO: check if current_userID is the owner of postID

      $model = new Post();
      $result = $model->delete($postID);

      if ($result) {
        $_SESSION['message'] = 'Post deleted!';
      } else {
        $_SESSION['message'] = 'Fail to delete post!';
      }

      Redirect(URL);


    } else {
      $_SESSION['message'] = 'No post ID';
      Redirect(URL);
    }
  }

}
?>

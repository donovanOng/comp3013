<?php

require_once APP . 'model/blog.php';

class BlogController
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
    // list of user's photos if logged in
    $this->user_index($this->current_userID);
  }

  public function user_index($blog_userID)
  {
    $model = new Blog();
    $blogs = $model->find_user_blog($blog_userID);

    require APP . 'view/_templates/header.php';
    require APP . 'view/blogs/index.php';
    require APP . 'view/_templates/footer.php';
  }

  public function view($blogID)
  {
    // display photos from single collection
    $model = new Blog();
    $blog = $model->find_by_id($blogID);
    $blog_posts = $model->find_blog_posts($blogID);

    require APP . 'view/_templates/header.php';
    require APP . 'view/blogs/view.php';
    require APP . 'view/_templates/footer.php';

  }

}
?>

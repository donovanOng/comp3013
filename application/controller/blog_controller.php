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

  public function search()
  {
    $query = NULL;

    if (isset($_GET["query"]) && strlen($_GET["query"]) > 0) {
      $query = $_GET["query"];
      $model = new Blog();
      // TODO: Search only friend's blog?
      $blogs = $model->find_by_name($query);
    }

    require APP . 'view/_templates/header.php';
    require APP . 'view/blogs/search.php';
    require APP . 'view/_templates/footer.php';
  }

}
?>

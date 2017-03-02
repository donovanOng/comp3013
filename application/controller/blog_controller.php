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
    $_SESSION['message'] = URL . 'blog does not exist.';
    Redirect(URL);
  }

  public function view($blogID)
  {
    $_SESSION['message'] = URL . 'blog does not exist.';
    Redirect(URL);
  }

  public function create()
  {
    if (isset($_POST['submit'])) {
      $name = $_POST['name'];

      $model = new Blog();
      $result = $model->create($this->current_userID,
                               $name);
      if ($result) {
        $_SESSION['message'] = 'Blog created successfully';
      } else {
        $_SESSION['message'] = 'Fail to create blog';
      }
      Redirect(URL . $this->current_userID);

    } else {
      Redirect(URL);
    }
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

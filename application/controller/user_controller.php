<?php

require_once APP . 'model/user.php';
require_once APP . 'model/blog.php';
require_once APP . 'model/friend.php';

class UserController
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
    $_SESSION['message'] = URL . 'user does not exist.';
    Redirect(URL);
  }

  public function profile($userID)
  {
    $model = new User();
    $user = $model->find_by_id($userID);
    $profile = $model->fetch_profile($userID);

    $blog_model = new Blog();
    $blogs = $blog_model->find_user_blog($userID);
    if ($blogs != NULL) {
      $blog_posts = $blog_model->find_blog_posts($blogs[0]->blogID);

      // Sort dates in descending order
      function date_sort($a, $b) {
          return strtotime($a->CREATED_AT) < strtotime($b->CREATED_AT);
      }
      usort($blog_posts, "date_sort");
    }

    $friendModel = new Friend();
    $is_friend = $model->is_friend($this->current_userID, $userID);
    $initiator = $friendModel->friendship_initiator($this->current_userID, $userID);

    require APP . 'view/_templates/header.php';
    require APP . 'view/users/profile.php';
    require APP . 'view/_templates/footer.php';
  }

  public function new_profile()
  {
    if (isset($_POST['submit'])) {

      $userID = $_POST['userID'];
      $about = $_POST['about'];
      $gender = $_POST['gender'];
      $birthdate = $_POST['birthdate'];
      $current_city = $_POST['current_city'];
      $home_city = $_POST['home_city'];
      $address = $_POST['address'];
      $languages = $_POST['languages'];
      $workplace = $_POST['workplace'];

      $model = new User();
      $result = $model->new_profile($userID,
                                    $about,
                                    $gender,
                                    $birthdate,
                                    $current_city,
                                    $home_city,
                                    $address,
                                    $languages,
                                    $workplace);

      if ($result) {
        $_SESSION['message'] = 'Profile is created!';
      } else {
        $_SESSION['message'] = 'Fail to create profile!';
      }

      Redirect(URL . $userID );

    } else {
      Redirect(URL);
    }
  }

  public function update_profile()
  {
    if (isset($_POST['submit'])) {

      $userID = $_POST['userID'];
      $about = $_POST['about'];
      $gender = $_POST['gender'];
      $birthdate = $_POST['birthdate'];
      $current_city = $_POST['current_city'];
      $home_city = $_POST['home_city'];
      $address = $_POST['address'];
      $languages = $_POST['languages'];
      $workplace = $_POST['workplace'];

      $model = new User();
      $result = $model->update_profile($userID,
                                       $about,
                                       $gender,
                                       $birthdate,
                                       $current_city,
                                       $home_city,
                                       $address,
                                       $languages,
                                       $workplace);

      if ($result) {
        $_SESSION['message'] = 'Profile is updated!';
      } else {
        $_SESSION['message'] = 'Fail to update profile';
      }

      Redirect(URL . $userID);

    } else {
      Redirect(URL);
    }
  }

  public function add_friend()
  {
    if (isset($_GET['userID'])) {
      $userID = $_GET['userID'];

      $model = new Friend();
      $result = $model->add_friends($this->current_userID,
                                    $userID,
                                    1);
      if ($result) {
        $_SESSION['message'] = 'Friendship request for User ' . $userID . ' sent.';
      } else {
        $_SESSION['message'] = 'Fail to send friendship request for User ' . $userID;
      }

      Redirect(URL . $userID);
    }
  }

  public function accept_friendships()
  {
    if (isset($_GET['userID'])) {
      $userID = $_GET['userID'];

      $model = new Friend();
      $result = $model->accept_friendship($this->current_userID,
                                          $userID);
      if ($result) {
        $_SESSION['message'] = 'Friendship request from User ' . $userID . ' accepted.';
      } else {
        $_SESSION['message'] = 'Accept friendship request from User ' . $userID . ' failed.';
      }

      Redirect(URL . $userID);
    }
  }

  public function reject_friendships()
  {
    if (isset($_GET['userID'])) {
      $userID = $_GET['userID'];

      $model = new Friend();
      $result = $model->reject_friendship($this->current_userID,
                                          $userID);
      if ($result) {
        $_SESSION['message'] = 'Friendship request from User ' . $userID . ' rejected.';
      } else {
        $_SESSION['message'] = 'Reject friendship request from User ' . $userID . ' failed.';
      }

      Redirect(URL . $userID);
    }
  }

  public function search()
  {
    if (isset($_GET['query']) && strlen($_GET['query']) > 0) {
      $query = $_GET['query'];
      $model = new User();
      $users = $model->find_by_name($query);

      require APP . 'view/_templates/header.php';
      require APP . 'view/users/result.php';
      require APP . 'view/_templates/footer.php';
    } else {
      Redirect(URL);
    }
  }

}

?>

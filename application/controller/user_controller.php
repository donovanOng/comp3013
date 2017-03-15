<?php

require_once APP . 'model/user.php';
require_once APP . 'model/blog.php';
require_once APP . 'model/friend.php';

if (ENVIRONMENT == 'prod') {
  require_once APP . 'libs/azure_upload.php';
}

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
    $_SESSION['message'] = URL . 'user does not exist';
    Redirect(URL);
  }

  public function profile($userID)
  {
    $model = new User();
    $user = $model->find_by_id($userID);
    $profile = $model->fetch_profile($userID);

    if (can_access_user($this->current_userID, $userID) == false) {
      $_SESSION['message'] = 'You dont have rights to view profile of ' . user_name($user->userID);
      Redirect(URL);
    }

    $blog_model = new Blog();
    $blog = $blog_model->find_user_blog($userID);
    if ($blog != NULL) {
      $blog_posts = $blog_model->find_blog_posts($blog->blogID);
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
        $_SESSION['message'] = 'Profile created successfully';
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
        $_SESSION['message'] = 'Profile is updated successfully';
      } else {
        $_SESSION['message'] = 'Fail to update profile';
      }

      Redirect(URL . $userID);

    } else {
      Redirect(URL);
    }
  }

  public function update_user()
  {
    if (isset($_POST['update'])) {

      $first_name = $_POST["first_name"];
      $last_name = $_POST["last_name"];
      $email = $_POST["email"];
      $privacy = $_POST["privacy"];
      $userID = $_POST["userID"];

      $model = new User();

      if (strlen($_POST["password"]) > 0) {
        $password = $_POST["password"];
        $result = $model->update_user_with_pw($first_name,
                                              $last_name,
                                              $email,
                                              $password,
                                              $privacy,
                                              $userID);

      } else {
        $result = $model->update_user($first_name,
                                      $last_name,
                                      $email,
                                      $privacy,
                                      $userID);
      }

      if ($result) {
        $_SESSION['message'] = 'User account updated successfully';
      } else {
        $_SESSION['message'] = 'Fail to update account';
      }

      Redirect(URL . $userID);

    } else {
      Redirect(URL);
    }
  }

  public function upload()
  {

    if (isset($_POST['userID'])) {

      $userID = $_POST['userID'];
      $uploadFile = $_FILES['uploadFile'];

      $result = $this->upload_photo($uploadFile);

      if ($result) {
        $_SESSION['message'] = 'Photo uploaded successfully';
      } else {
        $_SESSION['message'] = 'Photo upload failed';
      }

      Redirect(URL . $userID);

    } else {
      $_SESSION['message'] = 'Unable to find photo path';
      Redirect(URL);
    }

  }

  private function upload_photo($uploadFile)
  {
    $model = new User();
    $save_filename = $this->current_userID . '_abc' . '.jpg';

    if (ENVIRONMENT != 'prod') {
      $targetDirectory = "uploads/users/" . $this->current_userID . '/';
      // create user's directory if it does not exist
      if (!file_exists($targetDirectory)) {
          mkdir($targetDirectory, 0777, true);
      }

      // TODO validate file format, size

      $targetFile = $targetDirectory . $save_filename;
      $uploadResult = move_uploaded_file($uploadFile["tmp_name"], $targetFile);
      if ($uploadResult) {
        $result = $model->upload_profile_photo($this->current_userID, URL . $targetFile);
        if (!$result) { unlink($targetFile); }
        return $result;
      } else {
        return FALSE;
      }

    } else {
      // Upload to Azure Blob Storage
      $uploadResult = upload_to_azure($uploadFile, $save_filename);
      if (!$uploadResult) {
        return FALSE;
      } else {
        $result = $model->upload_profile_photo($this->current_userID, $uploadResult);
        return $result;
      }
    }
  }

  public function add_friend()
  {
    if (isset($_GET['userID'])) {
      $userID = $_GET['userID'];

      $model = new Friend();
      $result = $model->add_friend($this->current_userID,
                                    $userID,
                                    1);
      if ($result) {
        $_SESSION['message'] = 'Friendship request for ' . user_name($userID) . ' sent';
      } else {
        $_SESSION['message'] = 'Fail to send friendship request for ' . user_name($userID);
      }

      Redirect(URL . $userID);
    }
  }

  public function accept_friendship()
  {
    if (isset($_GET['userID'])) {
      $userID = $_GET['userID'];

      $model = new Friend();
      $result = $model->accept_friendship($this->current_userID,
                                          $userID);
      if ($result) {
        $_SESSION['message'] = 'Friendship request from ' . user_name($userID) . ' accepted';
      } else {
        $_SESSION['message'] = 'Accept friendship request from ' . user_name($userID) . ' failed';
      }

      Redirect(URL . $userID);
    }
  }

  public function reject_friendship()
  {
    if (isset($_GET['userID'])) {
      $userID = $_GET['userID'];

      $model = new Friend();
      $result = $model->reject_friendship($this->current_userID,
                                          $userID);
      if ($result) {
        $_SESSION['message'] = 'Friendship request from ' . user_name($userID) . ' rejected';
      } else {
        $_SESSION['message'] = 'Reject friendship request from ' . user_name($userID) . ' failed';
      }

      Redirect(URL . $userID);
    }
  }

}

?>

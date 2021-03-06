<?php

require_once APP . 'model/user.php';
require_once APP . 'model/blog.php';
require_once APP . 'model/friend.php';
require_once APP . 'model/admin.php';

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
        $hash_pw = password_hash($_POST["password"], PASSWORD_DEFAULT);
        $result = $model->update_user_with_pw($first_name,
                                              $last_name,
                                              $email,
                                              $hash_pw,
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
    $save_filename = $this->current_userID . '_profile' . '.jpg';

    if (ENVIRONMENT != 'prod') {

      $targetDirectory = "uploads/users/" . $this->current_userID . '/';
      // create user's directory if it does not exist
      if (!file_exists($targetDirectory)) {
          mkdir($targetDirectory, 0777, true);
      }
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

  public function export()
  {
    if (isset($_GET['userID']) && strlen($_GET['userID']) > 0) {
      $userID = $_GET['userID'];

      if ($this->current_userID == $userID) {

        $model = new Admin();
        $tables = array('user', 'profile', 'circle', 'circleFriends', 'message',
                      'photoCollection', 'photo', 'comment', 'annotation', 'blog');
        $tables_data = array();
        foreach($tables as $table) {
          $table_data = $model->get_user_rows($userID, $table);
          $tables_data[$table] =  $table_data;
        }
        $tables_data['post'] = $model->get_user_posts($userID);
        $tables_data['relationship'] = $model->get_user_relationship($userID);

        require APP . 'view/users/export.php';

      } else {
        $_SESSION['message'] = 'Not authorized.';
        Redirect(URL);
      }

    } else {
      $_SESSION['message'] = 'No user ID found.';
      Redirect(URL);
    }
  }

  public function import()
  {
    if (isset($_FILES['importXML'])) {

      $userID = $_POST['userID'];
      $xml_filename = $_FILES['importXML']['name'];
      $tmp_filename = $_FILES['importXML']["tmp_name"];

      $action_result = $this->import_xml($tmp_filename);

      require APP . 'view/_templates/header.php';
      require APP . 'view/users/import.php';
      require APP . 'view/_templates/footer.php';

    } else {
      $_SESSION['message'] = 'No file uploaded.';
      Redirect(URL);
    }

  }

  private function import_xml($file)
  {
    $record = simplexml_load_file($file);

    $action_result = array();

    $model = new Admin();

    foreach ($record->children() as $data_row)
    {
      $table_name = $data_row->getName();

      if ($table_name == 'relationship') {
        if (!isset($data_row->userID) || !isset($data_row->userID_2)){
          // missing one id for relationship
          continue;
        } elseif ($data_row->userID != $this->current_userID && $data_row->userID_2 != $this->current_userID) {
          // both ids not equal to current user
          continue;
        }
      } else {
        if (!isset($data_row->userID) || $data_row->userID != $this->current_userID){
          // no userID or userID not equal to current user
          continue;
        }
      }

      $columns = array();
      $values = array();
      $update = array();

      foreach ($data_row->children() as $value)
      {
        if ($table_name == 'post' && $value->getName() == 'userID') {
          continue;
        }
        if ($table_name == 'post' && $value->getName() == 'name') {
          continue;
        }
        array_push($columns, $value->getName());
        array_push($values, '\'' . addslashes($value) . '\'');
        array_push($update, $value->getName() . '=' . '\'' . addslashes($value) . '\'');
      }

      array_shift($update); // drop primary key for update
      $result = $model->update_or_insert($table_name, $columns, $values, $update);
      array_push($action_result, $table_name . ': ' . $columns[0] . ' ' . $values[0] . ' => ' . $result);
    }

    return ($action_result);
  }

}

?>

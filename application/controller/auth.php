<?php

require_once APP . 'model/user.php';

class AuthController
{

  public function login()
  {
    if (isset($_SESSION['current_user'])) {

      $_SESSION['message'] = 'Already logged in!';
      header('location: ' . URL);

    } elseif (isset($_POST["login"])) {

      $model = new User();
      $user = $model->authenticate_user($_POST["email"],
                                        $_POST["password"]);

      // TODO: HASH Password
      if ($user != NULL) {

        $_SESSION['current_user'] = $user;
        $_SESSION['message'] = 'Login successfully';
        header('location: ' . URL );

      } else {
        $_SESSION['message'] = 'Login failed';
        header('location: ' . URL . 'login');
      }

    } else {

      require APP . 'view/_templates/header.php';
      require APP . 'view/auth/form.php';
      require APP . 'view/_templates/footer.php';

    }

  }

  public function logout()
  {
    session_unset();
    $_SESSION['message'] = 'Logout successfully';
    header('location: ' . URL);
  }

  public function signup()
  {
    if (isset($_SESSION['current_user'])) {

      $_SESSION['message'] = 'Already logged in!';
      header('location: ' . URL);

    } elseif (isset($_POST["signup"])) {

      $model = new User();

      // TODO: form validation

      if ($model->find_by_email($_POST["email"])) {

        $_SESSION['message'] = 'Email used';
        header('location: ' . URL . 'signup');

      } else {
        $result = $model->create($_POST["first_name"],
                                 $_POST["last_name"],
                                 $_POST["email"],
                                 $_POST["password"]);
        if ($result == True) {
          $_SESSION['message'] = 'Sign Up successfully';
          header('location: ' . URL . 'login');
        } else {
          $_SESSION['message'] = 'Sign Up failed';
          header('location: ' . URL . 'signup');
        }

      }

    } else {
      require APP . 'view/_templates/header.php';
      require APP . 'view/auth/signup.php';
      require APP . 'view/_templates/footer.php';
    }
  }

}

?>

<?php

class Application
{
  private $url_controller = null;
  private $url_action = null;
  private $url_params = array();

  public function __construct()
  {

    session_start();

    $this->splitURL();

    if (!$this->url_controller) {

      // load start page
      require_once APP . 'controller/home_controller.php';
      $page = new HomeController();
      $page->index();

    } elseif (file_exists(APP . 'controller/'. $this->url_controller . '_controller.php')) {

      $this->call_controller_action($this->url_controller, $this->url_action);

    } elseif ($this->user_exist($this->url_controller)) {

      // load user profile page
      require APP . 'controller/user_controller.php';
      $page = new UserController();
      $page->profile($this->url_controller);

    } else {

      echo $this->url_controller . ' user not found, and ';
      echo $this->url_controller . ' controller not found';

    }

  }

  private function call_controller_action($controller, $action_or_id)
  {
    require_once APP . 'controller/' . $this->url_controller . '_controller.php';
    $controller = ucfirst($this->url_controller) . 'Controller';
    $url_controller_obj = new $controller();


    if (strlen($action_or_id) == 0)
    {
      // no action, show index
      $url_controller_obj->index();

    } elseif (method_exists($url_controller_obj, $action_or_id)) {

      // action after controller
      $url_controller_obj->{$action_or_id}();

    } else {

      // id after controller
      $url_controller_obj->view($action_or_id);

    }
  }

  private function user_exist($userID)
  {
    require APP . 'model/user.php';
    $model = new User();
    $user = $model->find_by_id($userID);
    return ($user != NULL);
  }

  private function splitURL()
  {
    if (isset($_GET['url'])) {

      // split URL
      $url = trim($_GET['url'], '/');
      $url = filter_var($url, FILTER_SANITIZE_URL);
      $url = explode('/', $url);

      $this->url_controller = isset($url[0]) ? $url[0] : null;
      $this->url_action = isset($url[1]) ? $url[1] : null;

      // remove controller and action
      unset($url[0], $url[1]);

      $this->url_params = array_values($url);
    }
  }
}
?>

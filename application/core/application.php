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
      require APP . 'controller/home_controller.php';
      $page = new HomeController();
      $page->index();

    } elseif (file_exists(APP . 'controller/'. $this->url_controller . '_controller.php')) {

      require APP . 'controller/' . $this->url_controller . '_controller.php';
      $controller = ucfirst($this->url_controller) . 'Controller';
      $this->url_controller_obj = new $controller();

      if (method_exists($this->url_controller_obj, $this->url_action)) {

        if (!empty($this->url_params)) {
          call_user_func(array($this->url_controller_obj, $this->url_action), $this->url_parama);
        } else {
          $this->url_controller_obj->{$this->url_action}();
        }

      } else {

        if (strlen($this->url_action) == 0) {
          $this->url_controller_obj->index();
        } else {
          echo $this->url_controller . ' controller and ' . $this->url_action . ' action not found';
        }

      }

    } else {

      echo $this->url_controller . ' controller not found';

    }

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

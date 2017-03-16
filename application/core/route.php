<?php
  class Route {
    static function start() {

      $routes = explode('/', $_SERVER['REQUEST_URI']);

      $controller_name = "main";

      if (!empty($routes[2])) {
        $controller_name = $routes[2];
      }
      if (!empty($routes[3])) {
        $page_id = $routes[3];
      }
      else {
        $page_id = '';
      }

      $controller_class = "Controller_" . $controller_name;
      $model_class      = "Model_" . $controller_name;

      $model_file      = "application/model/" . $controller_name . ".php";
      $controller_file = "application/controller/" . $controller_name . ".php";

      if (file_exists($model_file)) {
        include_once $model_file;
      }
      if (file_exists($controller_file)) {
        include_once $controller_file;
      }

      $controller = new $controller_class;
      $controller->init($controller_name, $page_id);

    }
  }
?>

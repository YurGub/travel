<?php
  class Controller_cities extends Base {

    function __construct() {
      $this->model = new Model_cities();
    }

    public function init($page, $id) {
      $cities = $this->model::getAllCities();
      self::render($page, $cities);
    }
  }
?>

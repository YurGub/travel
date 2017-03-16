<?php
  class Controller_countries extends Base {

    function __construct() {
      $this->model = new Model_countries();
    }
    public function init($page, $id) {
      if (!empty($id)) {
        $country = $this->model::getCountry($id);
        self::render("country", $country);
      }
      else {
        $countries = $this->model::getAllCountries();
        self::render($page, $countries);
      }
    }
  }
?>

<?php
  class Model_cities extends Model {
    public function getAllCities() {
      self::connect();
      $query = "SELECT * FROM `cities` WHERE 1";
      $response = mysqli_query(self::$connect, $query);
      $array = array();
      while (mysqli_fetch_object($response)) {
        $array[] = mysqli_fetch_object($response);
      }
      return $array;
    }
  }
?>

<?php
  class Model_countries extends Model {
    public function getAllCountries() {
      self::connect();
      $query = "SELECT * FROM `countries` WHERE 1";
      $response = mysqli_query(self::$connect, $query);
      $array = array();
      while (mysqli_fetch_object($response)) {
        $array[] = mysqli_fetch_object($response);
      }
      return $array;
      mysqli_close();
    }
    public function getCountry($id) {
      self::connect();
      $query    = "SELECT * FROM `countries` WHERE `country_id` = " . self::escape($id);
      $response = mysqli_query(self::$connect, $query);
      $country  = mysqli_fetch_assoc($response);
      return $country;
      mysqli_close();
    }
  }
?>

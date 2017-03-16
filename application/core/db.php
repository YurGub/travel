<?php

  define("HOST", "localhost");
  define("USER", "root");
  define("PASS", "");
  define("DB", "travel");
  define("BASE", "http://localhost/travel");

  class DB {
    public static $connect;
    public static function connect() {
      if (!self::$connect) {
        self::$connect = mysqli_connect(HOST, USER, PASS, DB);
        mysqli_set_charset(self::$connect, 'UTF8');
      }
    }

    public static function escape ($val) {
      return mysqli_real_escape_string(self::$connect, $val);
    }
  }
?>

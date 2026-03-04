<?php

namespace Controllers;

use mysqli;

class Database
{

  public $sql;

  public function __construct()
  {

    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "simple_blog";


    $this->sql = new mysqli($serverName, $userName, $password, $dbName);

    if ($this->sql->connect_error) {
      die("Connected failed: " . $this->sql->connect_error);
    }
  }

  public function __destruct()
  {
    $this->sql->close();
  }
}

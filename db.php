<?php

  $mysqli = new mysqli("localhost","2461112","Karuna$12","db2461112");

  if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
  }
?>

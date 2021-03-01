<?php
session_start();
if (isset($_SESSION["username"])) {
  include('productmodify.html');
} else {
  header('Location: ./login.php');
}
<?php
session_start();

if(empty($_SESSION)){
  header("Location: ../index.php");
}
if ($_SESSION['id_level']!='2') {
  header("Location: ../index.php");
}
?>
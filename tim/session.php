<?php
session_start();

if(empty($_SESSION)){
  header("Location: ../index.php");
}
if ($_SESSION['id_level']!='3') {
  header("Location: ../index.php");
}
?>
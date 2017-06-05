<?php
 session_start(); // memulai session
 session_destroy(); // menghapus session
 header("location:../login-admin.php"); // mengambalikan ke form_login.php
 ?>
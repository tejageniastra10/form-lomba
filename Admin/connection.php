<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "form-lomba";

$koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(mysqli_connect_errno()){
	echo 'Failed to connect to database : '.mysqli_connect_error();
}

?>
<?php
include 'koneksi.php';
//function antiinjection($data){
	//$filter_sql = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
	//return $filter_sql;
//}


//tangkap data dari form login
$username = $_POST['username'];
$password = $_POST['password'];

//untuk mencegah sql injection
//$username = antiinjection($username);
//$password = antiinjection($password);

 $loginadmin = mysqli_query($koneksi, "SELECT * FROM user WHERE username_user='$username' and password_user='$password' and id_level='1'") or die (mysqli_error($koneksi));
 $q=mysqli_fetch_array($loginadmin);


if(mysqli_num_rows($loginadmin) == 0){
						 echo "<script>
							alert('Username atau password salah !!!');
							window.location.href='javascript:history.go(-1)';
							</script>";
	}else{
		session_start(); // memulai fungsi session
 		$_SESSION['username'] = $username;
 		$_SESSION['nama_user']= $username;

	//redirect ke halaman index
	header('location:Admin/index.php');
} 
?>
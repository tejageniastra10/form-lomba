<link rel="stylesheet" type="text/css" href="../../user/sweetalert-master/dist/sweetalert.css">
<script type="text/javascript" src="../../user/sweetalert-master/dist/sweetalert.min.js"></script>
<?php
session_start();
include("../../koneksi.php");
if ($_SESSION['status_penyelenggara']=='4') {
  header("Location: ../../user/index.php");
}



$id_penyelenggara = $_SESSION['id_penyelenggara'];
$nonaktif = mysqli_query($koneksi," UPDATE penyelenggara set status_penyelenggara='4' WHERE id_penyelenggara='$id_penyelenggara' ") or die (mysqli_error());
mysqli_query($koneksi," UPDATE tim set id_status='3' WHERE id_penyelenggara='$id_penyelenggara' ") or die (mysqli_error());
$_SESSION['status_penyelenggara']='4';
if ($nonaktif) {
	echo '<script>
              setTimeout(function() {
                  swal({
                      title: "Akun Telah Dinonaktifkan! ",
                      
                      type: "success"
                  }, function() {
                      window.location = "../../user";
                  });
              });
          </script>';
}
  ?>
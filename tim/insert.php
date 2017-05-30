<?php
	include("session.php");
?>

<?php

include "../koneksi.php";
				if(isset($_POST['add']))
				{
					$nama_pemain = $_POST["nama_pemain"];
					$usia_pemain = $_POST["usia_pemain"];
					$alamat_pemain = $_POST["alamat_pemain"];
					$id_tim = $_SESSION['id_tim'];
					$id_penyelenggara = $_SESSION['id_penyelenggara'];
					$id_user = $_SESSION['id_user'];
					$foto_pemain = $_FILES['foto_pemain']['name'];
					$tmp = $_FILES['foto_pemain']['tmp_name'];
					$fotobaru = date('dmYHis').$foto_pemain;
					$path = "foto_pemain/".$fotobaru;
			


					if(move_uploaded_file($tmp, $path)){
					$cek = mysqli_query($koneksi, "SELECT * FROM pemain WHERE id_pemain='$id_pemain'")or die (mysqli_error($koneksi));
					if(mysqli_num_rows($cek) == 0)
					{
						$insert = mysqli_query($koneksi, "INSERT INTO pemain(id_pemain, nama_pemain, usia_pemain, alamat_pemain, id_tim, id_penyelenggara, id_user, foto_pemain) VALUES('$id_pemain','$nama_pemain', '$usia_pemain', '$alamat_pemain','$id_tim','$id_penyelenggara','$id_user','$fotobaru')") or die(mysqli_error($koneksi));
							if($insert)
							{
								header("location: ../tim/myteam.php");
							}
					}
					else
					{
						echo "<script>
							alert('terjadi kesalahan');
							window.location.href='javascript:history.go(-1)';
							</script>";

					}
				
				}
				}
				else
				{
					echo "gagal";
				}
			?>


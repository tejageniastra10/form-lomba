<?php

include "../koneksi.php";
				if(isset($_POST['add']))
				{
					$id_penyelenggara				= $_POST['id_penyelenggara'];
					$nama_penyelenggara  			= $_POST['nama_penyelenggara'];
					$nama_lomba			 			= $_POST['nama_lomba'];
					$lokasi_lomba	 				= $_POST['lokasi_lomba'];
					$akhir_pendaftaran				= $_POST['akhir_pendaftaran'];
					$waktu_awal_lomba	   			= $_POST['waktu_awal_lomba'];
					$waktu_akhir_lomba	   			= $_POST['waktu_akhir_lomba'];
					$id_kategori	 				= $_POST['id_kategori'];
					$email_penyelenggara		    = $_POST['email_penyelenggara'];
					$tlp_penyelenggara			 	= $_POST['tlp_penyelenggara'];
					$jml_tim						= $_POST['jml_tim'];
					$status_penyelenggara			= $_POST['status_penyelenggara'];
					$id_user						= $_POST['id_user'];

					
					


					
					$cek = mysqli_query($koneksi, "SELECT * FROM penyelenggara WHERE id_penyelenggara='$id_penyelenggara'")or die (mysqli_error($koneksi));
					if(mysqli_num_rows($cek) == 0)
					{
						$insert = mysqli_query($koneksi, "INSERT INTO penyelenggara(id_penyelenggara, nama_penyelenggara, nama_lomba, lokasi_lomba,akhir_pendaftaran, waktu_awal_lomba,waktu_akhir_lomba,id_kategori, email_penyelenggara, tlp_penyelenggara,jml_tim, status_penyelenggara,id_user) VALUES('$id_penyelenggara','$nama_penyelenggara', '$nama_lomba', '$lokasi_lomba','$akhir_pendaftaran', '$waktu_awal_lomba', '$waktu_akhir_lomba', '$id_kategori', '$email_penyelenggara', '$tlp_penyelenggara','$jml_tim', '$status_penyelenggara','$id_user')") or die(mysqli_error($koneksi));
							if($insert)
							{
								header("location: ../user/index.php");
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
			?>


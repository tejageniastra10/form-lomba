<link rel="stylesheet" type="text/css" href="../../user/sweetalert-master/dist/sweetalert.css">
<script type="text/javascript" src="../../user/sweetalert-master/dist/sweetalert.min.js"></script>
<?php

include "../../koneksi.php";
				if(isset($_POST['add']))
				{
					
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
					$logo							= 'logo.png';
					$detail_penyelenggara			= $_POST['detail_penyelenggara'];

					$fc_ktp = $_FILES['fc_ktp']['name'];
					$tmp = $_FILES['fc_ktp']['tmp_name'];
					$fotobaru = date('dmYHis').$fc_ktp;
					$path = "../fc_ktp/".$fotobaru;
					


					if(move_uploaded_file($tmp, $path)){
					
						$insert = mysqli_query($koneksi, "INSERT INTO penyelenggara( nama_penyelenggara, nama_lomba, lokasi_lomba,akhir_pendaftaran, waktu_awal_lomba,waktu_akhir_lomba,id_kategori, email_penyelenggara, tlp_penyelenggara,jml_tim, status_penyelenggara,id_user,logo,fc_ktp,detail_penyelenggara) VALUES('$nama_penyelenggara', '$nama_lomba', '$lokasi_lomba','$akhir_pendaftaran', '$waktu_awal_lomba', '$waktu_akhir_lomba', '$id_kategori', '$email_penyelenggara', '$tlp_penyelenggara','$jml_tim', '$status_penyelenggara','$id_user','$logo','$fotobaru','$detail_penyelenggara')") or die(mysqli_error($koneksi));
							if($insert)
							{
								
								echo '<script>
						              setTimeout(function() {
						                  swal({
						                      title: "Berhasil Mendaftar!",
						                      
						                      type: "success"
						                  }, function() {
						                      window.location = " ../../user/status-penyelenggaraan.php";
						                  });
						              });
						          </script>';

							}
					
				
				}
				}
			?>


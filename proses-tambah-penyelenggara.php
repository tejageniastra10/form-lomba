<?php

include "koneksi.php";
				if(isset($_POST['add']))
				{
					
					$nama_penyelenggara  			= $_POST['nama_penyelenggara'];
					$nama_lomba			 			= $_POST['nama_lomba'];
					$lokasi_lomba	 				= $_POST['lokasi_lomba'];
					$waktu_awal_lomba	   			= $_POST['waktu_awal_lomba'];
					$waktu_akhir_lomba	   			= $_POST['waktu_akhir_lomba'];
					$id_kategori	 				= $_POST['id_kategori'];
					$email_penyelenggara		    = $_POST['email_penyelenggara'];
					$tlp_penyelenggara			 	= $_POST['tlp_penyelenggara'];
					$username_penyelenggara	  	    = $_POST['username_penyelenggara'];
					$password_penyelenggara 		= $_POST['password_penyelenggara'];

					
					$pembayaran_penyelenggara = $_FILES['pembayaran_penyelenggara']['name'];
					$tmp = $_FILES['pembayaran_penyelenggara']['tmp_name'];
					$fotobaru = date('dmYHis').$pembayaran_penyelenggara;
					$path = "pembayaran_penyelenggara/".$fotobaru;


					if(move_uploaded_file($tmp, $path)){
					$cek = mysqli_query($koneksi, "SELECT * FROM penyelenggara WHERE username_penyelenggara='$username_penyelenggara'")or die (mysqli_error($koneksi));
					if(mysqli_num_rows($cek) == 0)
					{
						$insert = mysqli_query($koneksi, "INSERT INTO penyelenggara(nama_penyelenggara, nama_lomba, lokasi_lomba, waktu_awal_lomba,waktu_akhir_lomba,id_kategori, email_penyelenggara, tlp_penyelenggara, username_penyelenggara, password_penyelenggara, pembayaran_penyelenggara) VALUES('$nama_penyelenggara', '$nama_lomba', '$lokasi_lomba', '$waktu_awal_lomba', '$waktu_akhir_lomba', '$id_kategori', '$email_penyelenggara', '$tlp_penyelenggara', '$username_penyelenggara', '$password_penyelenggara', '$fotobaru')") or die(mysqli_error($koneksi));
							if($insert)
							{
								header("location: index.php");
							}
					}
					else
					{
						echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>NIM Sudah Ada..!</div>';
					}
				}
				
				}
			?>


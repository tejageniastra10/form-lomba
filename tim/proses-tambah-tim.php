<?php

include "../koneksi.php";
				if(isset($_POST['add']))
				{
					
					$nama_tim  						= $_POST['nama_tim'];
					$alamat_tim			 			= $_POST['nama_tim'];
					$penanggung_jawab				= $_POST['penanggung_jawab'];
					$id_kategori	 				= $_POST['id_kategori'];
					$id_penyelenggara	 			= $_POST['id_penyelenggara'];
					$email_tim					    = $_POST['email_tim'];
					$tlp_tim		 				= $_POST['tlp_tim'];
					$username_tim	  	   			= $_POST['username_tim'];
					$pass_tim 						= md5($_POST['password_tim']);
					$password_tim					= $pass_tim;

					
					$pembayaran_tim = $_FILES['pembayaran_tim']['name'];
					$tmp = $_FILES['pembayaran_tim']['tmp_name'];
					$fotobaru = date('dmYHis').$pembayaran_tim;
					$path = "pembayaran_tim/".$fotobaru;
					$id_level						=$_POST['id_level'];
					

					if(move_uploaded_file($tmp, $path)){
					$cek = mysqli_query($koneksi, "SELECT * FROM tim WHERE username_tim='$username_tim'")or die (mysqli_error($koneksi));
					if(mysqli_num_rows($cek) == 0)
					{
						$insert = mysqli_query($koneksi, "INSERT INTO tim(nama_tim, alamat_tim, penanggung_jawab, id_kategori, id_penyelenggara, email_tim, tlp_tim, username_tim, password_tim, pembayaran_tim, id_level) VALUES('$nama_tim', '$alamat_tim', '$penanggung_jawab', '$id_kategori','$id_penyelenggara', '$email_tim', '$tlp_tim', '$username_tim', '$password_tim', '$fotobaru', '$id_level')") or die(mysqli_error($koneksi));
							if($insert)
							{
								header("location: ../index.php");
							}
					}
					else
					{
						echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Sudah Ada..!</div>';
					}
				}
				
				}
			?>


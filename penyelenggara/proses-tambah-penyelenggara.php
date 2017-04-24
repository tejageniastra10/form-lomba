<?php

include "koneksi.php";
				if(isset($_POST['add']))
				{
					
					$nama_penyelenggara  			= $_POST['nama_penyelenggara'];
					$nama_lomba			 			= $_POST['nama_lomba'];
					$lokasi			 				= $_POST['lokasi'];
					$waktu_lomba	   				= $_POST['waktu_lomba'];
					$kategori_lomba	 				= $_POST['kategori_lomba'];
					$email_penyelenggara		    = $_POST['email_penyelenggara'];
					$nohp			 				= $_POST['nohp'];
					$usrname_penyelenggara	  	    = $_POST['usrname_penyelenggara'];
					$psw_penyelenggara 			    = $_POST['psw_penyelenggara'];

					
					$bukti_pembayaran_penyelenggara = $_FILES['bukti_pembayaran_penyelenggara']['name'];
					$tmp = $_FILES['bukti_pembayaran_penyelenggara']['tmp_name'];
					$fotobaru = date('dmYHis').$bukti_pembayaran_penyelenggara;
					$path = "bukti_pembayaran_penyelenggara/".$fotobaru;


					if(move_uploaded_file($tmp, $path)){
					$cek = mysqli_query($koneksi, "SELECT * FROM penyelenggara WHERE usrname_penyelenggara='$usrname_penyelenggara'")or die (mysqli_error($koneksi));
					if(mysqli_num_rows($cek) == 0)
					{
						$insert = mysqli_query($koneksi, "INSERT INTO penyelenggara(nama_penyelenggara, nama_lomba, lokasi, waktu_lomba, kategori_lomba, email_penyelenggara, nohp, usrname_penyelenggara, psw_penyelenggara, bukti_pembayaran_penyelenggara) VALUES('$nama_penyelenggara', '$nama_lomba', '$lokasi', '$waktu_lomba', '$kategori_lomba', '$email_penyelenggara', '$nohp', '$usrname_penyelenggara', '$psw_penyelenggara', '$fotobaru')") or die(mysqli_error($koneksi));
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


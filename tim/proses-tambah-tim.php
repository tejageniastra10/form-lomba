<?php

include "../koneksi.php";
				if(isset($_POST['add']))
				{
					$id_penyelenggara	 			= $_POST['id_penyelenggara'];
					$id_kategori					= $_POST['kategori'];
					$nama_tim  						= $_POST['nama_tim'];
					$alamat_tim			 			= $_POST['alamat_tim'];
					$penanggung_jawab				= $_POST['penanggung_jawab'];
					$email_tim					    = $_POST['email_tim'];
					$tlp_tim		 				= $_POST['tlp_tim'];
					$jml_pemain						= $_POST['jml_pemain'];
					$id_status						=$_POST['id_status'];
					$id_user						= $_POST['id_user'];

					

					
					$cek = mysqli_query($koneksi, "SELECT * FROM tim WHERE nama_tim='$nama_tim'")or die (mysqli_error($koneksi));
					if(mysqli_num_rows($cek) == 0)
					{
						$insert = mysqli_query($koneksi, "INSERT INTO tim(id_penyelenggara,id_kategori,nama_tim, alamat_tim, penanggung_jawab,email_tim, tlp_tim, jml_pemain, id_status,id_user) VALUES('$id_penyelenggara','$id_kategori','$nama_tim', '$alamat_tim', '$penanggung_jawab', '$email_tim', '$tlp_tim', '$jml_pemain', '$id_status', '$id_user')") or die(mysqli_error($koneksi));
							if($insert)
							{	
								echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Pendaftaran berhasil</div>';
								header("location: ../user/index.php");
							}
					}
					else
					{
						echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Sudah Ada..!</div>';
					}
			
				
				}
			?>


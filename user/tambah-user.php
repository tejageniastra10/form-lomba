<?php

include "../koneksi.php";
				if(isset($_POST['add']))
				{
					
					$nama_user			  			= $_POST['nama_user'];
					$email_user			 			= $_POST['email_user'];
					$tlp_user						= $_POST['tlp_user'];
					$alamat_user 		  			= $_POST['alamat_user'];
					$username_user		   			= $_POST['username_user'];
					$password_user 					= md5($_POST['password_user']);	
					$id_level						= $_POST['id_level'];		
					
					


					
					$cek = mysqli_query($koneksi, "SELECT * FROM user WHERE username_user='$username_user'")or die (mysqli_error($koneksi));
					if(mysqli_num_rows($cek) == 0)
					{
						$insert = mysqli_query($koneksi, "INSERT INTO user(nama_user, email_user, tlp_user, alamat_user,username_user,password_user,id_level) VALUES('$nama_user', '$email_user', '$tlp_user', '$alamat_user', '$username_user', '$password_user','$id_level')") or die(mysqli_error($koneksi));
							if($insert)
							{
								header("location: ../index.php");
							}
					}
					else
					{
						echo "<script>
							alert('Username Sudah ada');
							window.location.href='javascript:history.go(-1)';
							</script>";

					}
				
				
				}
				
			?>


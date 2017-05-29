<?php

include "../koneksi.php";
				if(isset($_POST['add']))
				{
					session_start();
					$nama_user			  			= $_POST['nama_user'];
					$email_user			 			= $_POST['email_user'];
					$tlp_user						= $_POST['tlp_user'];
					$alamat_user 		  			= $_POST['alamat_user'];
					$username_user		   			= $_POST['username_user'];
					$password_user 					= md5($_POST['password_user']);	
					$id_level						= $_POST['id_level'];		
					
		          $fotobaru               = $_POST['foto'];
		          $path                   = "foto/".$fotobaru;
					


				 	
					$cek = mysqli_query($koneksi, "SELECT * FROM user WHERE username_user='$username_user'")or die (mysqli_error($koneksi));
					if(mysqli_num_rows($cek) == 0)
					{
						$insert = mysqli_query($koneksi, "INSERT INTO user(nama_user, email_user, tlp_user, alamat_user,username_user,password_user,id_level,foto) VALUES('$nama_user', '$email_user', '$tlp_user', '$alamat_user', '$username_user', '$password_user','$id_level','$fotobaru')") or die(mysqli_error($koneksi));
							if($insert)
							{
								$query = mysqli_query($koneksi, "SELECT * FROM user WHERE username_user='$username_user' AND password_user='$password_user' ");
								$row = mysqli_fetch_assoc($query);

								$_SESSION['nama_user']=$row['nama_user'];
								$_SESSION['username_user']=$row['username_user'];
								$_SESSION['id_user']=$row['id_user'];
								$_SESSION['foto']=$row['foto'];
								$_SESSION['id_level']='2';
								$id_user=$row['id_user'];
								$jml_penyelenggara= mysqli_query($koneksi, "SELECT id_user FROM penyelenggara WHERE id_user='$id_user' " );
								$jml_tim= mysqli_query($koneksi, "SELECT id_user FROM tim WHERE id_user='$id_user' " );
							$i=1;
							$_SESSION['jml_penyelenggara']= 0;
							while($jml = mysqli_fetch_assoc($jml_penyelenggara)){
								$_SESSION['jml_penyelenggara']= $i;
								$i++;								
							}
							$j=1;
							$_SESSION['jml_tim']= 0;
							while($jml = mysqli_fetch_assoc($jml_tim)){
								$_SESSION['jml_tim']= $j;
								$j++;								
							}
								header("location: succeslogin.html");
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


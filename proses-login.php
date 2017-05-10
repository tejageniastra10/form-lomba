<?php
				session_start();
				if(isset($_POST['login'])){
					include("koneksi.php");
					
					$username	= $_POST['username'];
					$password	= md5($_POST['password']);
					


					
					$query = mysqli_query($koneksi, "SELECT * FROM user WHERE username_user='$username' AND password_user='$password' AND id_level='2' ");
					if(mysqli_num_rows($query) == 0){
						 echo "<script>
							alert('Username atau password salah !!!');
							window.location.href='javascript:history.go(-1)';
							</script>";
					}else{
						$row = mysqli_fetch_assoc($query);
						
						$_SESSION['nama_user']=$row['nama_user'];
						$_SESSION['username_user']=$row['username_user'];
						$_SESSION['id_user']=$row['id_user'];
						$_SESSION['id_level']='2';

						header("Location: user/index.php");
					}
					
					
					
				
			}
				?>
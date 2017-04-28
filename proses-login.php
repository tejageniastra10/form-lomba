<?php
				session_start();
				if(isset($_POST['login'])){
					include("koneksi.php");
					
					$username	= $_POST['username'];
					$password	= md5($_POST['password']);
					$level		= $_POST['id_level'];

					if ($level=='1') {
						$query = mysqli_query($koneksi, "SELECT * FROM admin WHERE username_admin='$username' AND password_admin='$password'");
					if(mysqli_num_rows($query) == 0){
						 echo "<script>
							alert('Username atau password salah !!!');
							window.location.href='javascript:history.go(-1)';
							</script>";
					}else{
						$row = mysqli_fetch_assoc($query);
						
						$_SESSION['nama_admin']=$row['nama_admin'];
						$_SESSION['username_admin']=$row['username_admin'];
						$_SESSION['id_level']='1';

						header("Location: admin/index.php");
					}
					}
					else if ($level=='2') {
						$query = mysqli_query($koneksi, "SELECT * FROM penyelenggara WHERE username_penyelenggara='$username' AND password_penyelenggara='$password'");
					if(mysqli_num_rows($query) == 0){
						echo "<script>
							alert('Username atau password salah !!!');
							window.location.href='javascript:history.go(-1)';
							</script>";
					}else{
						$row = mysqli_fetch_assoc($query);
						
						$_SESSION['id_penyelenggara']=$row['id_penyelenggara'];
						$_SESSION['nama_lomba']=$row['nama_lomba'];
						$_SESSION['id_level']='2';
						header("Location: penyelenggara/index.php");
					}
					}
					else{
						$query = mysqli_query($koneksi, "SELECT * FROM tim WHERE username_tim='$username' AND password_tim='$password'");
					if(mysqli_num_rows($query) == 0){
						echo "<script>
							alert('Username atau password salah !!!');
							window.location.href='javascript:history.go(-1)';
							</script>";
					}else{
						$row = mysqli_fetch_assoc($query);
						
						$_SESSION['nama_tim']=$row['nama_tim'];
						$_SESSION['username_tim']=$row['username_tim'];
						$_SESSION['id_level']='3';
						$_SESSION['id_penyelenggara']=$row['id_penyelenggara'];
						header("Location: tim/index.php");
					}
					}
					
					
				}
				?>
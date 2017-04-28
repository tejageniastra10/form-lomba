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
						
						
						$_SESSION['username_penyelenggara']=$row['username_penyelenggara'];
						header("Location: penyelenggara/index-penyelenggara.php");
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
						header("Location: tim/index.php");
					}
					}
					
					
				}
				?>
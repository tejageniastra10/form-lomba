<?php

include "../koneksi.php";
				if(isset($_POST['bayar']))
				{
					$id_penyelenggara				= $_POST['id_penyelenggara'];
					

					
					$pembayaran_penyelenggara = $_FILES['pembayaran']['name'];
					$tmp = $_FILES['pembayaran']['tmp_name'];
					$fotobaru = date('dmYHis').$pembayaran_penyelenggara;
					$path = "pembayaran/".$fotobaru;
					
					
					


					if(move_uploaded_file($tmp, $path)){
					$cek = mysqli_query($koneksi, "SELECT * FROM penyelenggara WHERE id_penyelenggara='$id_penyelenggara'")or die (mysqli_error($koneksi));
					if(mysqli_num_rows($cek) == 0)
					{
						echo "<script>
							alert('Gagal Upload');
							window.location.href='javascript:history.go(-1)';
							</script>";
					}
					else
					{
						$insert = mysqli_query($koneksi, "INSERT INTO penyelenggara(pembayaran_penyelenggara) VALUES('$fotobaru')") or die(mysqli_error($koneksi));
							if($insert)
							{
								alert('berhasil Upload');
							}
						

					}
				}
				
				}
			?>


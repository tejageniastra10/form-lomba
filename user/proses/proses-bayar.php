<link rel="stylesheet" type="text/css" href="../../user/sweetalert-master/dist/sweetalert.css">
<script type="text/javascript" src="../../user/sweetalert-master/dist/sweetalert.min.js"></script>

<?php


include "../../koneksi.php";
				if(isset($_POST['bayar']))
				{
					$id_penyelenggara				= $_POST['id_penyelenggara'];
									
					$pembayaran_penyelenggara = $_FILES['pembayaran_penyelenggara']['name'];
					$tmp = $_FILES['pembayaran_penyelenggara']['tmp_name'];
					$fotobaru = date('dmYHis').$pembayaran_penyelenggara;
					$path = "pembayaran/".$fotobaru;
					
					
					


					if(move_uploaded_file($tmp, $path)){
										
						$insert = mysqli_query($koneksi, "UPDATE penyelenggara set pembayaran_penyelenggara='$fotobaru' WHERE id_penyelenggara='$id_penyelenggara' ") or die(mysqli_error($koneksi));
							if($insert)
							{
								echo '<script>
						              setTimeout(function() {
						                  swal({
						                      title: "Berhasil Upload Bukti Pembayaran!",
						                      
						                      type: "success"
						                  }, function() {
						                      window.location = " ../../user/status-penyelenggaraan.php";
						                  });
						              });
						          </script>';
							}
						

				}
				else{
					echo "Gagal";
				}


				}
			?>


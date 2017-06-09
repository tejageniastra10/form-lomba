
<link rel="stylesheet" type="text/css" href="../../user/sweetalert-master/dist/sweetalert.css">
<script type="text/javascript" src="../../user/sweetalert-master/dist/sweetalert.min.js"></script>

<?php

include "../../koneksi.php";
                if(isset($_POST['add-pengumuman']))
                {
                    $id_penyelenggara               = $_POST['id_penyelenggara'];
                    $judul_pengumuman               = $_POST['judul_pengumuman'];
                    $isi_pengumuman                 = $_POST['isi_pengumuman'];
                    $tgl_pengumuman                 = $_POST['tgl_pengumuman'];

                    $file_pengumuman = $_FILES['file_pengumuman']['name'];
                    $tmp = $_FILES['file_pengumuman']['tmp_name'];
                    $filebaru = date('dmY').$file_pengumuman;
                    $path = "../file_pengumuman/".$filebaru;
                    

                    if ($file_pengumuman=='') {
                      $insert = mysqli_query($koneksi, "INSERT INTO pengumuman(id_penyelenggara,judul_pengumuman,isi_pengumuman,tgl_pengumuman) VALUES('$id_penyelenggara','$judul_pengumuman','$isi_pengumuman','$tgl_pengumuman')") or die(mysqli_error($koneksi));
                            if($insert)
                            {
                                 echo '<script>
                                      setTimeout(function() {
                                          swal({
                                              title: "Pengumuman Berhasi Ditambah!",
                                              
                                              type: "success"
                                          }, function() {
                                              window.location = "../pengumuman.php";
                                          });
                                      });
                                  </script>';
                            }
                   
                    }
                    else{
                    move_uploaded_file($tmp, $path);
                    $insert = mysqli_query($koneksi, "INSERT INTO pengumuman(id_penyelenggara,judul_pengumuman,isi_pengumuman,tgl_pengumuman,file_pengumuman) VALUES('$id_penyelenggara','$judul_pengumuman','$isi_pengumuman','$tgl_pengumuman','$filebaru')") or die(mysqli_error($koneksi));
                            if($insert)
                            {
                                 echo '<script>
                                      setTimeout(function() {
                                          swal({
                                              title: "Pengumuman Berhasi Ditambah!",
                                              
                                              type: "success"
                                          }, function() {
                                              window.location = "../pengumuman.php";
                                          });
                                      });
                                  </script>';
                            }
                        }
                   
                    
            
                }
            ?>



<?php

include "../koneksi.php"; ?>

<?php
        session_start();
        $id_user = $_SESSION['id_user'];
        $sql = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user='$id_user'");
        if(mysqli_num_rows($sql) == 0)
        {
          echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data tidak ditemukan!!</div>';
        }
        else
        {
          $row = mysqli_fetch_assoc($sql);
        }
        if(isset($_POST['edit-user']))
        {
          
          $nama_user              = $_POST['nama_user'];
          $email_user             = $_POST['email_user'];
          $tlp_user               = $_POST['tlp_user'];
          $alamat_user            = $_POST['alamat_user'];
          $password_user          = md5($_POST['password_user']);
          $foto                   = $_FILES['foto']['name'];
          $tmp                    = $_FILES['foto']['tmp_name'];
          $fotobaru               = date('dmYHis').$foto;
          $path                   = "foto/".$fotobaru;
            

          

          if(move_uploaded_file($tmp, $path)){
            $update = mysqli_query($koneksi, "UPDATE user SET nama_user='$nama_user', email_user='$email_user', tlp_user='$tlp_user', alamat_user='$alamat_user', password_user='$password_user', foto='$fotobaru' WHERE id_user='$id_user'") or die (mysqli_error());

          if($update)
          {
             $sql1 = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user='$id_user'");
            $row1 = mysqli_fetch_assoc($sql1);
            $_SESSION['nama_user']=$row1['nama_user'];
            $_SESSION['foto']=$row1['foto'];

            echo "<script>
              alert('data berhasil di edit ');
              window.location.href='index.php';
              </script>";

                }
          else
          {
            echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data gagal disimpan, silahkan coba lagi.</div>';
          }
        }
        else{

          echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data gagal disimpan, silahkan coba lagi.</div>';
        }
        }
        
        
      ?>

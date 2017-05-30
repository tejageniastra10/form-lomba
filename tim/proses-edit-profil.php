<?php

include "../koneksi.php"; ?>

<?php
        session_start();
        $id_user = $_SESSION['id_tim'];
        $sql = mysqli_query($koneksi, "SELECT * FROM tim WHERE id_tim='$id_tim'");
        if(mysqli_num_rows($sql) == 0)
        {
          echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data tidak ditemukan!!</div>';
        }
        else
        {
          $row = mysqli_fetch_assoc($sql);
        }
        if(isset($_POST['edit-tim']))
        {
          
          $nama_tim              = $_POST['nama_tim'];
          $alamat_tim            = $_POST['alamat_tim'];
          $penanggung_jawab      = $_POST['penanggung_jawab'];
          $email_tim             = $_POST['email_tim'];
          $tlp_tim               = $_POST['tlp_tim'];
          $jml_pemain            = $_POST['jml_pemain'];
          $foto                   = $_FILES['foto']['name'];
          $tmp                    = $_FILES['foto']['tmp_name'];
          $fotobaru               = date('dmYHis').$foto;
          $path                   = "foto/".$fotobaru;
            

          

          if(move_uploaded_file($tmp, $path)){
            $update = mysqli_query($koneksi, "UPDATE tim SET nama_tim='$nama_tim', alamat_tim='$alamat_tim', penanggung_jawab='$penanggung_jawab', email_tim='$email_tim', tlp_tim'='$tlp_tim', jml_pemain'='$jml_pemain', foto='$fotobaru' WHERE id_tim='$id_tim'") or die (mysqli_error());

          if($update)
          {
             $sql1 = mysqli_query($koneksi, "SELECT * FROM user WHERE id_tim='$id_tim'");
            $row1 = mysqli_fetch_assoc($sql1);
            $_SESSION['nama_tim']=$row1['nama_tim'];
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

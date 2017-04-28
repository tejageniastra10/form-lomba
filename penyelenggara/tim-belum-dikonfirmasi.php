
<?php
  
  include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    
    
    
  </head>

  <body>

  <section id="container" >
      
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-11 main-chart">
                  
                    
          <div id="page-wrapper"><br />
      <h2 style="color: black"><center> Konfirmasi Data Tim</center></h2><br />

      <table style="color: black" class="table table-bordered table-striped">
        <thead style="text-align: center; background-color:  #333333; color: white">
            <td>No</td>
            <td>Nama Tim</td>
            <td>Alamat Tim</td>
            <td>Penanggung jawab</td>
            <td>Email</td>
            <td>No HP</td>
            <td>Pilihan</td>
        </thead>
        <tbody>
      <?php
      $id_penyelenggara = $_SESSION['id_penyelenggara'];
          $sql = mysqli_query($koneksi, "SELECT * FROM tim where id_penyelenggara='$id_penyelenggara' ");

          if(mysqli_num_rows($sql) == 0){
            echo '<tr style="text-align:center;"><td colspan="7">Empty</td></tr>';
          }
          else{
            $i=1;
          while($row = mysqli_fetch_assoc($sql)){
            echo '
            <tr>
              
              <td style="text-align: center">'.$i.'</td>
              <td style="text-align: center">'.$row['nama_tim'].'</td>
              <td style="text-align: center">'.$row['alamat_tim'].'</td>
              <td style="text-align: center">'.$row['penanggung_jawab'].'</td>
              <td style="text-align: center">'.$row['email_tim'].'</td>
              <td style="text-align: center">'.$row['tlp_tim'].'</td>
              <td style="text-align: center">
                <a href="#" id=' .$row["id_penyelenggara"].' class="btn btn-sm btn-info"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                <a href="index.php?aksi=delete&id_tim='.$row['id_tim'].'" title="Hapus Data" onclick="return confirm(\'Anda yakin akan menghapus data '.$row['nama_tim'].'?\')" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
              </td>
            </tr>
            ';
            $i++;
          }
        }
        ?>
      </tbody>
  </table>

      </div><!-- /#page-wrapper -->
          
          
          </div><!-- /col-lg-9 END SECTION MIDDLE -->
                  
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
                  
            

                       
                      
                  </div><!-- /col-lg-3 -->
              </div><! --/row -->
          </section>
      </section>

      <!--main content end-->
                  
                  
      
      
  </section>

    
	
	
  </body>
</html>

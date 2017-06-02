
<?php
  
  include("header.php");
?>
<!DOCTYPE html>
<html lang="en">


  <body>
    <div id="loading"></div>
  <section id="container" >
      
      <aside>
          <div  id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <p class="centered"><a href="#">
                            <?php 
                            $id_penyelenggara=$_SESSION['id_penyelenggara'];
                            $sql = mysqli_query($koneksi, "SELECT * FROM penyelenggara WHERE id_penyelenggara=$id_penyelenggara");
                            $row = mysqli_fetch_assoc($sql);

            echo '<img src=logo/'.$row['logo'].' class="img-circle" height="60px" width="60px">';
            ?></a></p>
                  <h5 class="centered"><?php echo $_SESSION['nama_lomba']; ?></h5> 
                    
                  <li class="mt">
                      <a   href="index.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a class="active" href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Data Tim</span>
                      </a>
                      <ul class="sub">
                          <li class="active"><a href="tim-belum-dikonfirmasi.php">Data Tim Terdaftar</a></li>
                          <li><a  href="tim-terkonfirmasi.php">Data Tim Terkonfirmasi</a></li>
                          
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="pengumuman.php" >
                          <i class="fa fa-bullhorn"></i>
                          <span>Pengumuman</span>
                      </a>
                     
                  </li>
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
    
      <section id="main-content">
          <section class="wrapper">

            <div class="row">
              <div class="col-lg-12">
                   
                  <div id="page-wrapper"><br />
                      <h3 ><center> Konfirmasi Tim</center></h3><br />

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
                        $sql = mysqli_query($koneksi, "SELECT * FROM tim where id_penyelenggara='$id_penyelenggara' and id_status='1' ");

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

                              <a href="tim-belum-dikonfirmasi.php?aksi=delete&id_tim='.$row['id_tim'].'" title="Hapus Data" onclick="return confirm(\'Anda yakin akan menghapus data '.$row['nama_tim'].'?\')" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>

                              <a href="javascript:void(0)" class="btn btn-sm btn-success" id="konfirmasi_tim" timId="'.$row['id_tim'].'" onclick="alert(\'konfirmasi '.$row['nama_tim'].' sukses\',konfirmasi_tim(this))" ><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></a>
                            </td>
                          </tr>
                          ';
                          $i++;
                        }
                      }
                      ?>
                    </tbody>
                </table>

                    </div>
          
              </div>
          </div>
      </div>
    </section>
  </section>     

<!-- proses hapus  -->
    <?php
      if(isset($_GET['aksi']) == 'delete'){
        $id_tim = $_GET['id_tim'];
        $cek = mysqli_query($koneksi, "SELECT * FROM tim WHERE id_tim='$id_tim'") or die (mysqli_error($koneksi));
        if(mysqli_num_rows($cek) == 0){
          echo "<script>
              alert('Data Tidak Ditemukan');
              window.location.href='tim-belum-dikonfirmasi.php';
              </script>";
        }else{
          $delete = mysqli_query($koneksi, "DELETE FROM tim WHERE id_tim='$id_tim'");
          if($delete){
            echo "<script>
              alert('Data Berhasil Dihapus');
              window.location.href='tim-belum-dikonfirmasi.php';
              </script>";
          }else{
            echo "<script>
              alert('terjadi kesalahan');
              window.location.href='tim-belum-dikonfirmasi.php';
              </script>";
          }
        }
      }
      ?>


    
	
 <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
     
	
  </body>
</html>

  <!-- Modal untuk Konfirmasi -->
<script type="text/javascript">
function konfirmasi_tim(e) {
  var id_tim = $(e).attr("timId");
  $.ajax({
    url: "konfirmasi_tim.php",
    type:'post',
    data:'id='+id_tim,
    success:function (data) {
      var dataKonf = jQuery.parseJSON(data);
      if (dataKonf.isSuccess) {
        $("#page-wrapper").load(document.URL + ' #page-wrapper');
      }
      else{
        alert('gagal update db');
      }
    }
  });
}
</script>
<script src="js/jquery.min.js"></script>
   <script type="text/javascript">
  $(window).load(function() { $("#loading").fadeOut(700); })
</script>
<?php include("komponen/header.php")  ?>
      <ul class="sidebar-menu">
       
        <li class=" treeview">
          <a href="index.php">
            <i class="fa fa-dashboard"></i> <span>Home</span>
            
          </a>
          
        </li>
       
        <li class=" treeview">
          <a href="#">
            <i class="fa fa-file-text-o"></i>
            <span>Data TIM</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li ><a href="Konfirmasi-tim.php"><i class="fa fa-hourglass-2"></i> Konfirmasi Tim</a></li>
            <li><a href="tim-peserta.php"><i class="fa fa-list"></i>Tim Peserta</a></li>
          </ul>
        </li>
         <li >
          <a href="pengumuman.php">
            <i class="fa fa-bullhorn"></i>
            <span>Pengumuman</span>
            
          </a>
        </li>
       <li class="active treeview">
          <a href="statistik.php">
            <i class="fa  fa-line-chart"></i>
            <span>Statistik Tim</span>
            
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div style="background-color: white" class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section  class="content-header">
      <div class="row">
                    <div  class="col-lg-12">
                       <ol  class="breadcrumb">
                            <li>
                                <i class="fa fa-bullhorn"></i>  <a href="index.php">Home</a>
                            </li>
                            <li class="active">
                               Statistik
                            </li>
                        </ol>
                    </div>
                </div>
    </section>

    <!-- Main content -->
    <section class="content">
      
   
      <div style="left :70px"  class="col-lg-10">
      
              <table class="table table-bordered table-striped">
                <thead style="text-align: center; background: #615eb2 ;color: white">
                    <td style=" width: 50px">No</td>
                    <td style=" width: 200px" >Fase Pertandingan</td>
                    <td style=" width: 200px">Team Bertanding</td>
                    <td style=" width: 100px">Skor</td>
                    <td style=" width: 50px">Jam Pertandingan</td>
                    <td style=" width: 200px" >Tanggal Pertandingan</td>
                    <td  style=" width: 200px">Fungsi</td>
                </thead>
                <tbody>
                <?php
                  $id_penyelenggara=$_SESSION['id_penyelenggara'];
                    $sql = mysqli_query($koneksi, "SELECT * FROM statistik WHERE id_penyelenggara='$id_penyelenggara'");
                  if(mysqli_num_rows($sql) == 0){
                    echo '<tr style="text-align:center;"><td colspan="7">Empty</td></tr>';
                  }
                  else{

                  $no = 1;
                  while($row = mysqli_fetch_assoc($sql)){
                      
                       echo '
                    <tr>
                      <td style="text-align: center">'.$no.'</td>
                      <td style="text-align:center;">'.$row['fase_pertandingan'].'</td>
                      <td style="text-align:center;">'.$row['namateamA'].' vs '.$row['namateamB'].' </td>
                      <td style="text-align:center;">'.$row['golteamA'].' : '.$row['golteamB'].' </td>
                      <td style="text-align:center;">'.$row['jam_pertandingan'].' </td>
                      <td style="text-align:center;">'.$row['tanggal_pertandingan'].' </td>
                      <td style="text-align: center;"> <a href="detail_statistik.php?view='.$row['id'].'"class="btn  btn-info" id="detail"><span  aria-hidden="true"></span> detail </a> 

                        <a href="statistik.php?aksi=delete&id='.$row['id'].'" title="Hapus Data" onclick="return confirm(\'Anda yakin akan menghapus data '.$row['fase_pertandingan'].'?\')" class="btn btn-warning btn-warning"><span  aria-hidden="true"></span> hapus </a>  </td>
                       </tr>';
                      $no++;
                  }
                }
               
                ?>
              </tbody>
          </table>
           <div class=" col-xs-3">
          <a type="button" id="tambah-pengumuman"  class="btn btn-block btn-primary" href="tambah_statistik.php">Tambah Statistik</a>
          </div>

          
    </div><!-- /#page-wrapper -->
        </section>
      </div>
        
   
    
  

              
              
        <script src="../user/js/jquery.min.js"></script>    
               
    
<!-- Script Proses Hapus -->
<?php
      if(isset($_GET['aksi']) == 'delete'){
        $id = $_GET['id'];
        $cek = mysqli_query($koneksi, "SELECT * FROM statistik WHERE id='$id'") or die (mysqli_error($koneksi));
        if(mysqli_num_rows($cek) == 0){
          echo "<script>
              
              window.location.href='statistik.php';
              </script>";
        }else{
          $delete = mysqli_query($koneksi, "DELETE FROM statistik WHERE id='$id'");
          if($delete){

           echo "<script>
              
              window.location.href='statistik.php';
              </script>"; 
          }else{
            echo "<script>
              
              window.location.href='statistik.php';
              </script>";
          }
        }
      }
      ?>

 

 


 <?php include("komponen/footer.php")  ?>



</body>
</html>

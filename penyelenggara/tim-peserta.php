<?php include("komponen/header.php")  ?>
  <ul class="sidebar-menu">
       
        <li class=" treeview">
          <a href="index.php">
            <i class="fa fa-dashboard"></i> <span>Home</span>
            
          </a>
          
        </li>
       
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-file-text-o"></i>
            <span>Data TIM</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li ><a href="Konfirmasi-tim.php"><i class="fa fa-hourglass-2"></i> Konfirmasi Tim</a></li>
            <li class="active"><a href="tim-peserta.php"><i class="fa fa-list"></i>Tim Peserta</a></li>
          </ul>
        </li>
         <li class="treeview">
          <a href="pengumuman.php">
            <i class="fa fa-bullhorn"></i>
            <span>Pengumuman</span>
            
          </a>
        </li>
       <li class="treeview">
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
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 style="text-align: center; text-transform: uppercase;">
        TIM PESERTA <?=$_SESSION['nama_lomba'];?>
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Data Tim</a></li>
        <li><a href="#">tim terdaftar</a></li>
       
      </ol>
    </section>
<div id="loading"></div> 
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead style="text-align: center; background: #615eb2 ;color: white">
                <tr style="text-align: center;" >
                  <th style="width: 20px">No</th>
                  <th>Nama Tim</th>
                  <th>Alamat Tim</th>
                  <th>Penanggung jawab</th>
                  <th style="width: 160px">Email</th>
                  <th>No HP</th>
                  <th>Pilih</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $sql = mysqli_query($koneksi, "SELECT * FROM tim where id_penyelenggara='$id_penyelenggara' and id_status='2' ");
                 $i = 1;
                  while($row = mysqli_fetch_assoc($sql)){
              
                echo '
                          <tr>
                            
                            <td >'.$i.'</td>
                            <td >'.$row['nama_tim'].'</td>
                            <td >'.$row['alamat_tim'].'</td>
                            <td >'.$row['penanggung_jawab'].'</td>
                            <td >'.$row['email_tim'].'</td>
                            <td >'.$row['tlp_tim'].'</td>
                            <td style="text-align: center">

                              <a href="tim-peserta.php?aksi=delete&id_tim='.$row['id_tim'].'" title="Hapus Data" onclick="return confirm(\'Anda yakin akan menghapus data '.$row['nama_tim'].'?\')" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>

                              <a href="javascript:void(0)" class="btn btn-sm btn-success" id="konfirmasi_tim" timId="'.$row['id_tim'].'" title="Lihat Data Pemain"><span class="fa fa-users" aria-hidden="true"></span></a>
                            </td>
                          </tr>
                          ';
                          $i++;
                        }

                  ?>
                
                </tbody>
              </table>

         
            </div>
            <!-- /.box-body -->

          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  

 

  


      <!-- jQuery -->
        <script src="../user/js/jquery.min.js"></script>
        <script src="../user/js/bootstrap.min.js"></script>


<!-- proses hapus  -->
    <?php
      if(isset($_GET['aksi']) == 'delete'){
        $id_tim = $_GET['id_tim'];
        $cek = mysqli_query($koneksi, "SELECT * FROM tim WHERE id_tim='$id_tim'") or die (mysqli_error($koneksi));
        if(mysqli_num_rows($cek) == 0){
          echo "<script>
              
              window.location.href='tim-peserta.php';
              </script>";
        }else{
          $delete = mysqli_query($koneksi, "DELETE FROM tim WHERE id_tim='$id_tim'");
          if($delete){

           echo "<script>
              
              window.location.href='tim-peserta.php';
              </script>"; 
          }else{
            echo "<script>
              
              window.location.href='tim-peserta.php';
              </script>";
          }
        }
      }
      ?>
       


<!-- DataTables -->
<script src="../user/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../user/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../user/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../user/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../user/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src=" ../user/dist/js/demo.js"></script>
<!-- page script -->



<script>
  $(function () {
    $("#example1").DataTable();
    
  });
</script>


 <script type="text/javascript">
  $(window).load(function() { $("#loading").fadeOut(700); })
</script>
</body>
</html>

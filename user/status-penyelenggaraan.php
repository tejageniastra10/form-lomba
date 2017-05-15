<?php include("header.php")  ?>
      <ul class="sidebar-menu">
        <li class="header">MENU</li>
        <li class="treeview">
          <a href="index.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            
          </a>
          
        </li>
        <li class="treeview">
          <a href="info-lomba.php">
            <i class="fa fa-bullhorn"></i>
            <span>Info Lomba</span>
            
          </a>
        </li>
        
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Penyelenggaraan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="status-penyelenggaraan.php"><i class="fa fa-hourglass-2"></i> Status Penyelenggaraan saya</a></li>
            <li><a href="penyelenggara-saya.php"><i class="fa fa-bar-chart"></i>Penyelenggaraan Saya</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-futbol-o"></i>
            <span>Lomba</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="status-lomba.php"><i class="fa fa-hourglass-1"></i> Status Lomba saya</a></li>
            <li><a href="lomba-saya.php"><i class="fa fa-area-chart"></i>Lomba Saya</a></li>
          </ul>
        </li>
      
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       <center><b>STATUS PENYELENGGARAAN</b></center> 
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Info Lomba</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      
    <div id="page-wrapper"><br />

      
              <form class="form-inline" method="get">
                <div class="form-group">
                  <select name="filter" class="form-control" onchange="form.submit()">
                    <option value="0">Kategori Status</option>
                    <?php $filter = (isset($_GET['filter']) ? strtolower($_GET['filter']) : NULL);  ?>
                    <option value="1" <?php if($filter == '1'){ echo 'selected'; } ?>>menunggu persetujuan</option>
                    <option value="2" <?php if($filter == '2'){ echo 'selected'; } ?>>menunggu pembayaran</option>
                    <option value="3" <?php if($filter == '3'){ echo 'selected'; } ?>>aktif</option>
                    <option value="4" <?php if($filter == '4'){ echo 'selected'; } ?>>Ditolak</option>
                    
                    
                  </select>
                </div>
              </form><br />

              <table class="table table-bordered table-striped">
                <thead style="text-align: center; background: #3c8dbc;color: white">
                    <td>No</td>
                    <td>Nama Lomba</td>
                    <td>Tempat Lomba</td>
                    <td>Waktu Mulai Lomba</td>
                    <td>Telphone Penyelenggara</td>
                    <td>Jumlah Tim Partisipan</td>
                    <td>Status</td>
                </thead>
                <tbody>
              <?php

                  if($filter){
                    $id_user=$_SESSION['id_user'];
                    $sql = mysqli_query($koneksi, "SELECT * FROM penyelenggara WHERE id_user='$id_user' AND  status_penyelenggara='$filter' ");
                  }else{
                    $id_user=$_SESSION['id_user'];
                    $sql = mysqli_query($koneksi, "SELECT * FROM penyelenggara where id_user='$id_user'");
                  }

                  if(mysqli_num_rows($sql) == 0){
                    echo '<tr style="text-align:center;"><td colspan="7">Empty</td></tr>';
                  }
                  else{

                    $no = 1;
                  while($row = mysqli_fetch_assoc($sql)){
                      if ($row['status_penyelenggara']=='1') {
                        echo '
                    <tr>
                      <td style="text-align: center">'.$no.'</td>
                      <td style="text-align: center">'.$row['nama_lomba'].'</td>
                      <td style="text-align: center" >'.$row['lokasi_lomba'].'</td>
                      <td style="text-align: center">'.$row['waktu_awal_lomba'].'</td>
                      <td style="text-align: center">'.$row['tlp_penyelenggara'].'</td>
                      <td style="text-align: center">'.$row['jml_tim'].'</td>
                      <td style="text-align: center">
                        <span class="label label-warning">Belum Disetujui</span>
                        
                      </td>
                    </tr>
                    ';
                    
                      }
                      else if ($row['status_penyelenggara']=='2') {
                        echo '
                    <tr>
                      <td style="text-align: center">'.$no.'</td>
                      <td style="text-align: center">'.$row['nama_lomba'].'</td>
                      <td style="text-align: center" >'.$row['lokasi_lomba'].'</td>
                      <td style="text-align: center">'.$row['waktu_awal_lomba'].'</td>
                      <td style="text-align: center">'.$row['tlp_penyelenggara'].'</td>
                      <td style="text-align: center">'.$row['jml_tim'].'</td>
                      <td style="text-align: center">
                       <span  class="label label-primary">Belum Bayar</span>
                        
                      </td>
                    </tr>
                    ';
                    
                      }
                      else if ($row['status_penyelenggara']=='3') {
                        echo '
                    <tr>
                      <td style="text-align: center">'.$no.'</td>
                      <td style="text-align: center">'.$row['nama_lomba'].'</td>
                      <td style="text-align: center" >'.$row['lokasi_lomba'].'</td>
                      <td style="text-align: center">'.$row['waktu_awal_lomba'].'</td>
                      <td style="text-align: center">'.$row['tlp_penyelenggara'].'</td>
                      <td style="text-align: center">'.$row['jml_tim'].'</td>
                      <td style="text-align: center">
                        <span class="label label-success"> Lomba Aktif</span>
                        
                      </td>
                    </tr>
                    ';
                    
                      }
                        else {
                        echo '
                    <tr>
                      <td style="text-align: center">'.$no.'</td>
                      <td style="text-align: center">'.$row['nama_lomba'].'</td>
                      <td style="text-align: center" >'.$row['lokasi_lomba'].'</td>
                      <td style="text-align: center">'.$row['waktu_awal_lomba'].'</td>
                      <td style="text-align: center">'.$row['tlp_penyelenggara'].'</td>
                      <td style="text-align: center">'.$row['jml_tim'].'</td>
                      <td style="text-align: center">
                        <span class="label label-danger">Lomba Ditolak</span>
                        
                      </td>
                    </tr>
                    ';
                    
                      }

                      $no++;

                  
                    
                  }
                }
                ?>
              </tbody>
          </table>
          <div class=" col-xs-3">
          <button type="button" id="bayar"  class="btn btn-block btn-primary">Bayar Pendaftaran Lomba</button>
          </div>
    </div><!-- /#page-wrapper -->

    </section>

    <!-- /.content -->
  </div>

 
<!-- Modal log in -->
  <div class="modal fade" id="modal-bayar" role="dialog">
    <div class="modal-dialog">
    
      <div class="modal-content">
        <div class="modal-header" style="background: #3c8dbc; padding:25px 30px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 style="color: white" ><center><b>Bayar Pendaftaran Lomba</b></center></h2>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" action="proses-bayar.php" method="post">
          <div class="form-group">
            <label >Nama Lomba</label>
            <select name="id_penyelenggara" class="form-control" required>
          <?php
            $id_user=$_SESSION['id_user']; 
            $sql = mysqli_query($koneksi, "SELECT * FROM penyelenggara WHERE id_user='$id_user' AND  status_penyelenggara='2'");
            if(mysqli_num_rows($sql) == 0)
            {
              echo '<tr><td colspan="8">Data Tidak Ditemukan.</td></tr>';
            }
            else
            {

              echo '<option value=""> Pilih </option>'; 
              while($row = mysqli_fetch_assoc($sql))
              {
                if (empty($row['pembayaran_penyelenggara'])) {
                echo  '<option value='.$row['id_penyelenggara'].'>'.$row['nama_lomba'].'</option>';              }
                
              }
            }
          ?>
          </select>
          </div> 
          <div class="form-group">
              <label><span ></span> Bukti Pembayaran</label>
              <input type="file" name="pembayaran_penyelenggara" class="form-control" placeholder="foto" required>
            </div>         
          <div class="form-group">
            <input type="submit" name="bayar" class="btn btn-primary btn-block" value="Upload" />
          </div>
        </form>
        </div>     
      </div>
    </div>
  </div> 



      <!-- jQuery -->
        <script src="js/jquery.min.js"></script>
      <!---script daftar penyelenggara-->
        <script src="js/bootstrap.min.js"></script>

      

      <!---script bayar -->

      <script>
      $(document).ready(function(){
          $("#bayar").click(function(){
              $("#modal-bayar").modal();
          });
      });
      </script>     


  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

  <!-- /.content-wrapper -->
  <footer class="main-footer">
    
    <strong>Copyright &copy; 2017 <a href="#">Aliansi Team</a>.</strong> All rights
    reserved.
  </footer>



</body>
</html>

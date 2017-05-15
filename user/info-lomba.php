<?php include("header.php")  ?>
      <ul class="sidebar-menu">
        <li class="header">MENU</li>
        <li class="active treeview">
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
        
        <li class="treeview">
          <a href="#">
            <i class="fa  fa-book"></i>
            <span>Kegiatan Saya</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/charts/morris.html"><i class="fa fa-users"></i> Penyelenggaraan saya</a></li>
            <li><a href="pages/charts/flot.html"><i class="fa fa-futbol-o"></i>Perlombaan Saya</a></li>
            <li><a href="pages/charts/inline.html"><i class="fa  fa-history"></i> Riwayat Kegiatan</a></li>
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
        INFO LOMBA
        
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
            <option value="0">Filter Data Kejuaraan</option>
            <?php $filter = (isset($_GET['filter']) ? strtolower($_GET['filter']) : NULL);  ?>
            <option value="1" <?php if($filter == '1'){ echo 'selected'; } ?>>Sepak Bola</option>
            <option value="2" <?php if($filter == '2'){ echo 'selected'; } ?>>Futsal</option>
            <option value="3" <?php if($filter == '3'){ echo 'selected'; } ?>>Basket</option>
          </select>
        </div>
      </form><br />

      <table class="table table-bordered table-striped">
        <thead style="text-align: center; background: black;color: white">
            <td>No</td>
            <td>Nama Lomba</td>
            <td>Nama Penyelenggara</td>
            <td>Waktu Mulai Lomba</td>
            <td>Waktu lomba</td>
            <td>Jumlah Tim Partisipan</td>
            <td>Pilihan</td>
        </thead>
        <tbody>
      <?php

          if($filter){
            $sql = mysqli_query($koneksi, "SELECT * FROM penyelenggara WHERE id_kategori='$filter'");
          }else{
            $sql = mysqli_query($koneksi, "SELECT * FROM penyelenggara");
          }

          if(mysqli_num_rows($sql) == 0){
            echo '<tr style="text-align:center;"><td colspan="7">Empty</td></tr>';
          }
          else{
            $no = 1;
          while($row = mysqli_fetch_assoc($sql)){
            echo '
            <tr>
              <td style="text-align: center">'.$no.'</td>
              <td style="text-align: center">'.$row['nama_lomba'].'</td>
              <td style="text-align: center" >'.$row['lokasi_lomba'].'</td>
              <td style="text-align: center">'.$row['waktu_awal_lomba'].'</td>
              <td style="text-align: center">'.$row['waktu_akhir_lomba'].'</td>
              <td style="text-align: center">'.$row['jml_tim'].'</td>
              <td style="text-align: center">
                <a href="#" id='.$row["id_penyelenggara"].' title="lihat Detail" class="btn btn-sm btn-info"><span aria-hidden="true"></span>Lihat</a>

                <a href="index.php?aksi=delete&id_penyelenggara='.$row['id_penyelenggara'].'" title="Daftar Perlombaan" onclick="return confirm(\'Anda yakin akan menghapus data '.$row['nama_penyelenggara'].'?\')" class="btn btn-sm btn-success"><span  aria-hidden="true">Daftar</span></a>
              </td>
            </tr>
            ';
            $no++;
          }
        }
        ?>
      </tbody>
  </table>

      </div><!-- /#page-wrapper -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    
    <strong>Copyright &copy; 2017 <a href="#">Aliansi Team</a>.</strong> All rights
    reserved.
  </footer>

 


<!-- jQuery -->
  <script src="js/jquery.min.js"></script>

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




</body>
</html>

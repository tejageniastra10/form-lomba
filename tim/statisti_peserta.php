<?php include("header.php") ?>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li >
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Home</a>
                    </li>
                     <li >
                        <a href="pengumuman_peserta.php"><i class="fa fa-fw fa-list"></i> Pengumuman</a>
                    </li>
                    <li>
                        <a href="list.php"><i class="fa fa-fw fa-list"></i> Daftar Tim</a>
                    </li>
                    <li >
                        <a href="myteam.php"><i class="fa fa-fw fa-plus"></i> Pemain</a>
                    </li>
                    <li>
                        <a href="jadwal.php"><i class="fa fa-fw fa-calendar"></i> Jadwal</a>
                    </li>
                    <li class="active">
                        <a href="statisti_peserta.php"><i class="fa fa-fw fa-calendar"></i> Statistik</a>
                    </li>
                </ul>
            </div>
        </nav>
            <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                         <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 style="text-align: center; text-transform: uppercase;">
        STATISTIK PERTANDINGAN <?=$_SESSION['nama_lomba_diikuti'];?>
        <small></small>
        <br>
        <br>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Peserta</a></li>
        <li><a href="#">Statistik Pertandingan</a></li>
       
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            
            <!-- /.box-header -->
            <div class="box-body">

             <?php
        if(!isset($_GET["view"]))
            {?>
              <table align="center" id="example1" class="table table-bordered table-striped">
                <thead style="text-align: center; background: #615eb2 ;color: white">
                <tr style="text-align: center;" >
                  <th class="text-center" style="width: 20px">No</th>
                  <th class="text-center" style="width: 140px">Fase Pertandingan</th>
                  <th class="text-center" style="width: 190px">Nama Tim</th>
                  <th class="text-center" >Poin Pertandingan</th>
                  <th class="text-center" >Jam Petandingan</th>
                  <th class="text-center" >Tanggal Pertandingan</th>
                  <th class="text-center" >Keterangan</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $id_penyelenggara = $_SESSION['id_penyelenggara_tim'];
                $sql = mysqli_query($koneksi, "SELECT * FROM statistik where id_penyelenggara='$id_penyelenggara'order by id DESC");
                 $i = 1;
                  while($row = mysqli_fetch_assoc($sql)){
              
                echo '
                          <tr>
                            
                            <td class="text-center" >'.$i.'</td>
                            <td class="text-center" >'.$row['fase_pertandingan'].'</td>
                            <td class="text-center" >'.$row['namateamA'].' VS '.$row['namateamB'].'</td>
                            <td class="text-center" >'.$row['golteamA'].' VS '.$row['golteamB'].'</td>
                            <td class="text-center" >'.$row['jam_pertandingan'].'</td>
                            <td class="text-center" >'.$row['tanggal_pertandingan'].'</td>
                            <td >'.$row['keterangan'].'</td>
                            
                          </tr>
                          ';
                          $i++;
                        }

                  ?>
                
                </tbody>
              </table>
          <?php } 
                  ?>

         
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
                    </div>
                </div>
                </div>



    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
 <script src="../user/js/jquery.min.js"></script>
        <script src="../user/js/bootstrap.min.js"></script>

        <link rel="stylesheet" type="text/css" href="../user/sweetalert-master/dist/sweetalert.css">
        <script type="text/javascript" src="../user/sweetalert-master/dist/sweetalert.min.js"></script>

        <!---script alret logout href="konfirmasi-tim.php?aksi=delete&id_tim='.$row['id_tim'].'"-->
               

    
       


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

</body>

</html>

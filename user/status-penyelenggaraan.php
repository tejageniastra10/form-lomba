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
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            
            <!-- /.box-header -->
            <div class="box-body">

              <table id="example1" class="table table-bordered table-striped">
                <thead style="text-align: center; background: #3c8dbc;color: white">
                    <th style=" width: 20px">No</th>
                    <th >Kategori</th>
                    <th >Nama Lomba</th>
                    <th >Tempat Lomba</th>
                    <th >Waktu Mulai Lomba</th>
                    <th >Telphone Penyelenggara</th>
                    <th >Jumlah Tim Partisipan</th>
                    <th>Status</th>
                </thead>
                <tbody>
              <?php

                  
                    $id_user=$_SESSION['id_user'];
                    $sql = mysqli_query($koneksi, "SELECT * FROM penyelenggara where id_user='$id_user' ");
                  

                    $no = 1;
                  while($row = mysqli_fetch_assoc($sql)){
                      if ($row['id_kategori']=='1'){
                            $Kategori='Sepak Bola';
                            }
                          if ($row['id_kategori']=='2') {
                            $Kategori='Basket';
                            } 
                          if ($row['id_kategori']=='3'){
                              $Kategori='Futsal'; 
                            }
                        echo '
                    <tr>
                      <td style="text-align: center">'.$no.'</td>
                       <td style="text-align: center">'.$Kategori.'</td>
                      <td style="text-align: center">'.$row['nama_lomba'].'</td>
                      <td style="text-align: center" >'.$row['lokasi_lomba'].'</td>
                      <td style="text-align: center">'.$row['waktu_awal_lomba'].'</td>
                      <td style="text-align: center">'.$row['tlp_penyelenggara'].'</td>
                      <td style="text-align: center">'.$row['jml_tim'].'</td>
                    ';
                    if ($row['status_penyelenggara']=='1') {
                      echo '<td style="text-align: center">
                        <span class="label label-warning">ditangguhkan</span> 
                      </td> </tr>';

                    }
                    elseif ($row['status_penyelenggara']=='2') {
                      echo '<td style="text-align: center">
                        <span class="label label-primary">Pembayaran</span> 
                      </td> </tr>';
                    } 
                    elseif ($row['status_penyelenggara']=='3') {
                      echo '<td style="text-align: center">
                        <span class="label label-success">Akun Aktif</span> 
                      </td> </tr>';
                    } else {
                      echo '<td style="text-align: center">
                        <span class="label label-danger">Akun Nonaktif</span> 
                      </td> </tr>';
                    }
                    
                    
                     $no++;                
                  }
              
                ?>
              </tbody>
          </table>
          </div>
          </div>
          </div>
          
    </div><!-- /#page-wrapper -->
    <div style="width: 20%">
          <button type="button" id="bayar"  class="btn btn-block btn-primary">Bayar Pendaftaran Lomba</button>
          </div>
    </section>

    <!-- /.content -->
  </div>

 
<!-- Modal bayar pendaftaran -->
  <div class="modal fade" id="modal-bayar" role="dialog">
    <div class="modal-dialog">
    
      <div class="modal-content">
        <div class="modal-header" style="background: #3c8dbc; padding:25px 30px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 style="color: white" ><center><b>Bayar Pendaftaran Lomba</b></center></h2>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" action="proses/proses-bayar.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label >Nama Lomba</label>
            <select name="id_penyelenggara" class="form-control" required>
          <?php
            $id_user=$_SESSION['id_user']; 
            $sql = mysqli_query($koneksi, "SELECT * FROM penyelenggara WHERE id_user='$id_user' AND  status_penyelenggara='2'");
            if(mysqli_num_rows($sql) == 0)
            {
              echo 'Data Tidak Ditemukan';
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
              <label>Bukti Pembayaran</label>
              <input type="file" name="pembayaran_penyelenggara" class="form-control" placeholder="foto" required>
            </div>         
          <div class="form-group">
            <button  style="background: #3c8dbc"   type="submit" name="bayar" value="Simpan" class="btn btn-success btn-block"></span> Upload</button>
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

 <?php include("alret-logout.php")  ?>     

      <!---script bayar -->

      <script>
      $(document).ready(function(){
          $("#bayar").click(function(){
              $("#modal-bayar").modal();
          });
      });
      </script>     

<script>
  $(function () {
    $("#example1").DataTable();
    
  });
</script>
 
<?php include("scrip/footer.php")  ?>



</body>
</html>

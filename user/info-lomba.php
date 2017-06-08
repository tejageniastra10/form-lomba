<?php include("header.php")  ?>
   <ul class="sidebar-menu">
        <li class="header">MENU</li>
        <li class="treeview">
          <a href="index.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            
          </a>
          
        </li>
        <li class="active treeview">
          <a href="info-lomba.php">
            <i class="fa fa-bullhorn"></i>
            <span>Info Lomba</span>
            
          </a>
        </li>
        
         <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Penyelenggaraan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="status-penyelenggaraan.php"><i class="fa fa-hourglass-2"></i> Status Penyelenggaraan saya</a></li>
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
        INFO LOMBA
        <small>lomba yang tersedia</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="#">Info Lomba</a></li>
       
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
                <thead style="text-align: center; background: #3c8dbc ;color: white">
                <tr>
                  <th>No</th>
                  <th>Kategori Lomba</th>
                  <th>Nama Lomba</th>
                  <th>Tempat Lomba</th>
                  <th>Tlp Penyelenggara</th>
                  <th>Jumlah Tim Partisipan</th>
                  <th>Pilih</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $id_user = $_SESSION['id_user'];
                $sql = mysqli_query($koneksi, "SELECT * FROM penyelenggara WHERE id_user!='$id_user'");
                 $no = 1;
                  while($row = mysqli_fetch_assoc($sql)){
                  $id_penyelenggara=$row['id_penyelenggara'];
                  $id_user= $_SESSION['id_user'];
                  $cek = mysqli_query($koneksi, "SELECT * FROM tim WHERE $id_user='$id_user' and id_penyelenggara='$id_penyelenggara'")or die (mysqli_error($koneksi));
                  if(mysqli_num_rows($cek) == 0)
                      {
                    if ($row['status_penyelenggara']=='3') {
                         ?>
                      <tr>
                      <td style="text-align: center"><?php echo $no?></td>
                      <td style="text-align: center"><?php 

                            if ($row['id_kategori']=='1') {
                            echo "Sepak Bola";
                            }
                            elseif ($row['id_kategori']=='2') {
                            echo "Futsal";
                             } 
                            else {
                                echo "Basket";
                    }?></td>
                      <td style="text-align: center"><?php echo $row['nama_lomba']; ?></td>
                      <td style="text-align: center" > <?php echo $row['lokasi_lomba']; ?></td>
                      <td style="text-align: center"><?php echo $row['tlp_penyelenggara']; ?></td>
                      <td style="text-align: center"><?php echo $row['jml_tim'] ; ?></td>
                      <td style="text-align: center">
                        
                        <a href="#" class="btn btn-sm btn-info"   data-id='<?php echo $row["id_penyelenggara"]; ?>'><span  aria-hidden="true"></span> detail </a>
                  
                        <a href="#" class="btn btn-sm btn-warning" ket='<?php echo $row["id_kategori"]; ?>'  data-id='<?php echo $row["id_penyelenggara"]; ?>'><span  aria-hidden="true"></span> Daftar </a>
                      </td>
                </tr>
                <?php                     
                $no++;
                      }
                    }
                  }
                  ?>
                
                </tbody>
              </table>

          <div class=" col-xs-3">
          <button type="button" id="daftar-penyelenggara"  class="btn btn-block btn-primary">Daftarkan Penyelenggara</button>
          </div>
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
  
  <footer class="main-footer">
    
    <strong>Copyright &copy; 2017 <a href="#">Aliansi Team</a>.</strong> All rights
    reserved.
  </footer>
 

  <div class="container">
     <!-- Modal daftar penyelenggara -->
      <div class="modal fade" id="Modal-penelenggara" role="dialog">
        <div class="modal-dialog">
        
          <div class="modal-content">
            <div class="modal-header" style="background: #0086b3; padding:15px 20px;">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h2 style="color: white" ><center><b>Daftar Penyelenggara</b></center></h2>
            </div>
            <div class="modal-body" style="padding:40px 50px;">
              <form id="form_tambah_penyelenggara" class="form-horizontal" action="../penyelenggara/proses/proses-tambah-penyelenggara.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label > Nama Penyelenggara</label>
                  <input type="text" class="form-control" name="nama_penyelenggara" placeholder="Masukan Nama Penyelenggara">
                </div>
                <div class="form-group">
                  <label > Nama Lomba</label>
                  <input type="text" class="form-control" name="nama_lomba" placeholder="masukan nama lomba">
                </div>
                <div class="form-group">
                  <label > lokasi Lomba</label>
                  <input type="text" class="form-control" name="lokasi_lomba" placeholder="masukan lokasi lomba">
                </div>
                <div class="form-group">
                  <label > Akhir Pendaftaran</label>
                  <input type="date" class="form-control" name="akhir_pendaftaran" placeholder="masukan waktu" required>
                </div>
                <div class="form-group">
                  <label > Waktu Awal Lomba</label>
                  <input type="date" class="form-control" name="waktu_awal_lomba" placeholder="masukan waktu" required>
                </div>
                <div class="form-group">
                  <label > Waktu Akhir Lomba</label>
                  <input type="date" class="form-control" name="waktu_akhir_lomba" placeholder="masukan waktu" required>
                </div>
                <div class="form-group">
                <label > Kategori Lomba</label>
                        <select name="id_kategori" class="form-control" required>
                        <option value="1">Sepak Bola</option>
                        <option value="2">Futsal</option>
                        <option value="3">Basket</option>
                        </select>  
                </div>
                <div class="form-group">
                  <label > Email</label>
                  <input type="text" class="form-control"  name="email_penyelenggara" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="usrname"> No. Telepon</label>
                  <input type="text" class="form-control" name="tlp_penyelenggara" placeholder="masukan no hp">
                </div>
                <div class="form-group">
                  <label >Jumlah Tim</label>
                  <input type="text" class="form-control" name="jml_tim" placeholder="masukkan jumlah tim">
                </div>
                <div class="form-group">
                   <label><span ></span> Foto Copy KTP Penyelenggara</label>
                   <input type="file" name="fc_ktp" class="form-control" placeholder="foto" >
                </div>  
                 <div class="form-group">
                  <label >Detail Penyelenggara</label>
                  <textarea rows="6" class="form-control" name="detail_penyelenggara" placeholder="masukkan detail penyelenggara"></textarea> 
                </div>
                
                <div class="form-group">
                  
                  <input  name="status_penyelenggara" value="1" type="hidden">
                </div>
                <div class="form-group">
                  
                  <input  name="id_user" value="<?php echo $_SESSION['id_user']; ?> " type="hidden">
                </div>
                
                
              
                
                  <button type="submit" href="index.php" type="submit" name="add" value="Simpan" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> daftar</button>
              </form>
            </div>     
          </div>
        </div>
      </div> 
      </div>

<?php include("modal/modal-daftar.php")  ?>
      <!-- jQuery -->
        <script src="js/jquery.min.js"></script>

  

<div class="modal fade" id="ModalDetail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-warning">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Anggota</h4>
      </div>
      <div class="modal-body">
      </div>
    </div>
  </div>
</div>

 <!---script lihat detail-->
       <script type="text/javascript">
            $(document).ready(function (){
                $(".btn-info").click(function (e){
                    var m = $(this).attr("data-id");
                    $.ajax({
                        url: "modal/detailpenyelenggara.php",
                        type: "GET",
                        data : {id_penyelenggara: m,},
                        success: function (ajaxData){
                            $("#ModalDetail").html(ajaxData);
                            $("#ModalDetail").modal('show',{backdrop: 'true'});
                        }
                    });
                });
            });
        </script>


            <!---script daftar penyelenggara-->
      <script>
      $(document).ready(function(){
          $("#daftar-penyelenggara").click(function(){
              $("#Modal-penelenggara").modal();
          });
      });
      </script>


      
      <script>
        jQuery(document).ready(function($){
            $('.btn-warning').on('click',function(){
               var getLink = $(this).attr('href');
               var m = $(this).attr("data-id");
               var n = $(this).attr("ket");
               $('#penyelenggara').val(m);
               $('#id_kategori').val(n);

                swal({
                        title: 'Apakah Anda Ingin Daftar?',
                        html: true,
                        confirmButtonColor: 'green',
                        showCancelButton: true,
                        },function(){
                        
                        
                        $.ajax({
                            url: "modal/modal-daftar.php",
                            type: "GET",
                            data : {id_penyelenggara: m,},
                            success: function (ajaxData){
                                
                                $("#Modal-tim").modal('show');
                            }
                        });
                    });
                return false;
            });
        });
    </script>

<?php include("alret-logout.php")  ?>


               
              <script src="js/bootstrap.min.js"></script>

             
              <?php include("scrip/validasi.php")  ?>

<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->


<script>
  $(function () {
    $("#example1").DataTable();
    
  });
</script>
</body>
</html>

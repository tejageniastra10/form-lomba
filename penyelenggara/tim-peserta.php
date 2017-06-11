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

                              <a  title="Hapus Data" timId="'.$row['id_tim'].'"  class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>

                              <a href="tim-peserta.php?view='.$row['id_tim'].'" class="btn btn-sm btn-success"  title="Lihat Data Pemain"><span class="fa fa-users" aria-hidden="true"></span></a>
                            </td>
                          </tr>
                          ';
                          $i++;
                        }

                  ?>
                
                </tbody>
              </table>
          <?php } 
                  else
                      {
                $view=$_GET["view"];
                $sql  = mysqli_query($koneksi, "SELECT nama_tim FROM tim WHERE id_tim = '$view'");
                    $result = mysqli_fetch_array($sql);
                    ?>
                    <h3 style="text-transform: uppercase;" align="center"><?php echo "TIM :",$result['nama_tim']; ?></h3>
              <div style="left :40px"  class="col-lg-11">
                <table class="table table-bordered table-striped">
                <thead style="text-align: center; background: #615eb2 ;color: white">
                    <td style=" width: 50px">No</td>
                    <td style=" width: 250px" >Nama</td>
                    <td style=" width: 150px">Usia</td>
                    <td >Alamat</td>
                    <td style=" width: 150px">FC KTP</td>
                </thead>
                <tbody>
                <?php
                  $view=$_GET["view"];
                    $sql = mysqli_query($koneksi, "SELECT * FROM pemain WHERE id_tim='$view'");
                  if(mysqli_num_rows($sql) == 0){
                    echo '<tr style="text-align:center;"><td colspan="5">Empty</td></tr>';
                  }
                  else{

                  $no = 1;
                  while($row = mysqli_fetch_assoc($sql)){
                      
                       echo '
                    <tr>
                      <td style="text-align: center">'.$no.'</td>
                      <td style="text-align:center;">'.$row['nama_pemain'].'</td>
                      <td style="text-align:center;">'.$row['usia_pemain'].'</td>
                      <td style="text-align:center;">'.$row['alamat_pemain'].'</td>
                      <td style="text-align: center"> <a href="#" class="btn btn-sm btn-info" data-foto_pemain='.$row["foto_pemain"].' data-id_pemain='.$row["id_pemain"].' ><span  aria-hidden="true"></span> Lihat </a> </td> 

                    </tr>';
                      $no++;
                  }
                }
               
                ?>
              </tbody>
          </table>
        </div>
        <?php  } ?>

         
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
    

        <link rel="stylesheet" type="text/css" href="../user/sweetalert-master/dist/sweetalert.css">
        <script type="text/javascript" src="../user/sweetalert-master/dist/sweetalert.min.js"></script>

        <!---script alret logout href="konfirmasi-tim.php?aksi=delete&id_tim='.$row['id_tim'].'"-->
                <script>
                jQuery(document).ready(function($){
                    $('.btn-danger').on('click',function(){
                       var getLink = $(this).attr('href');
                      var n = $(this).attr("timId");

                        swal({
                                title: "Apakah Anda Yakin Ingin Menghapus data?",
                                
                                type: "warning",
                                showCancelButton: true,
                                confirmButtonColor: "#DD6B55",
                                confirmButtonText: "Ya",
                                closeOnConfirm: false
                                },function(){
                                   window.location="tim-peserta.php?aksi=delete&id_tim="+n;
                            });
                        return false;
                    });
                });
            </script>
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
          $jml_tim = mysqli_query($koneksi, "SELECT * FROM tim WHERE id_penyelenggara='$id_penyelenggara' AND id_status='2'")or die (mysqli_error($koneksi));
          $tim_terdaftar=0;
          while($jml= mysqli_fetch_assoc($jml_tim)){
          $tim_terdaftar=$tim_terdaftar+1;
            }
          $tim_terdaftar = $tim_terdaftar-1;
          mysqli_query($koneksi, "UPDATE penyelenggara SET tim_terdaftar='$tim_terdaftar' WHERE id_penyelenggara='$id_penyelenggara'") or die (mysqli_error());



          $delete = mysqli_query($koneksi, "DELETE FROM tim WHERE id_tim='$id_tim'");
          if($delete){

                     echo '<script>
              setTimeout(function() {
                  swal({
                      title: "Data Terhapus!",
                      
                      type: "success"
                  }, function() {
                      window.location = "tim-peserta.php";
                  });
              });
          </script>';

          }else{
            echo "<script>
              
              window.location.href='tim-peserta.php';
              </script>";
          }
        }
      }
      ?>



    <script src="../user/js/bootstrap.min.js"></script>


<div class="modal fade" id="ModalDetail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-warning">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">KTP PEMAIN </h4>
      </div>
      <div class="modal-body">
      </div>
    </div>
  </div>
</div>
<script>
        $(function(){
            $(document).on('click','.btn-info',function(e){
                $("#ModalDetail").modal('show');
                $.post('modal/detailktp.php',
                    {  
                      id_pemain:$(this).attr('data-id_pemain'),
                      foto_pemain:$(this).attr('data-foto_pemain'),
                      
                    }, 
                    function(html){
                        $(".modal-body").html(html);
                    }   
                );
            });
        });
    </script>
 <!---script lihat detail-->

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






</body>
</html>

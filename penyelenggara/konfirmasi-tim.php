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
            <li class="active" ><a href="Konfirmasi-tim.php"><i class="fa fa-hourglass-2"></i> Konfirmasi Tim</a></li>
            <li><a href="tim-peserta.php"><i class="fa fa-list"></i>Tim Peserta</a></li>
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
      <h1>
        KONFIRMASI PEMBAYARAN TIM
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Data Tim</a></li>
        <li><a href="#">konfirmasi tim</a></li>
       
      </ol>


    </section>

    <!-- Main content -->
   
    <section  class="content">

      <div class="row">
        <div class="col-xs-12">
          <div  class="box">
            
            <!-- /.box-header -->
            <div class="box-body">
             
                 <table id="ajax-konfirmasi"  class="table ">
                      <thead style="text-align: center; background: #615eb2 ;color: white">
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
                          <tr >
                            
                            <td style="text-align: center">'.$i.'</td>
                            <td style="text-align: center">'.$row['nama_tim'].'</td>
                            <td style="text-align: center">'.$row['alamat_tim'].'</td>
                            <td style="text-align: center">'.$row['penanggung_jawab'].'</td>
                            <td style="text-align: center">'.$row['email_tim'].'</td>
                            <td style="text-align: center">'.$row['tlp_tim'].'</td>
                            <td style="text-align: center">

                              <a  title="Hapus Data" timId="'.$row['id_tim'].'" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>

                              <a href="javascript:void(0)" class="btn btn-sm btn-success" id="konfirmasi_tim" timId="'.$row['id_tim'].'" onclick="konfirmasi_tim(this);" ><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></a>
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
            <!-- /.box-body -->

       
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


        <link rel="stylesheet" type="text/css" href="../user/sweetalert-master/dist/sweetalert.css">
        <script type="text/javascript" src="../user/sweetalert-master/dist/sweetalert.min.js"></script>

        <!---hapus tim-->
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
                                   window.location="konfirmasi-tim.php?aksi=delete&id_tim="+n;
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
              
              window.location.href='konfirmasi-tim.php';
              </script>";
        }else{
          $delete = mysqli_query($koneksi, "DELETE FROM tim WHERE id_tim='$id_tim'");
          if($delete){

                     echo '<script>
              setTimeout(function() {
                  swal({
                      title: "Data Terhapus!",
                      
                      type: "success"
                  }, function() {
                      window.location = "konfirmasi-tim.php";
                  });
              });
          </script>';

          }else{
            echo "<script>
              
              window.location.href='konfirmasi-tim.php';
              </script>";
          }
        }
      }
      ?>

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
        $("#ajax-konfirmasi").load(document.URL + ' #ajax-konfirmasi');
      }
      else{
        alert('gagal update db');
      }
    }
  });
}
</script>

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







 <script type="text/javascript">
  $(window).load(function() { $("#loading").fadeOut(700); })
</script>
</body>
</html>

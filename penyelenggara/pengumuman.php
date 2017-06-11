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
         <li class="active treeview">
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
                               Pengumuman
                            </li>
                        </ol>
                    </div>
                </div>
    </section>

    <!-- Main content -->
    <section class="content">
      
    <?php
        if(!isset($_GET["view"]))
            {?>
      <div style="left :70px"  class="col-lg-10">
      
              <table class="table table-bordered table-striped">
                <thead style="text-align: center; background: #615eb2 ;color: white">
                    <td style=" width: 50px">No</td>
                    <td style=" width: 200px" >Tanggal Pengumuman</td>
                    <td >Judul pengumuman</td>
                    <td style=" width: 150px">Detail</td>
                </thead>
                <tbody>
                <?php
                  $id_penyelenggara=$_SESSION['id_penyelenggara'];
                    $sql = mysqli_query($koneksi, "SELECT * FROM pengumuman WHERE id_penyelenggara='$id_penyelenggara' ORDER BY id_pengumuman DESC");
                  if(mysqli_num_rows($sql) == 0){
                    echo '<tr style="text-align:center;"><td colspan="4">Empty</td></tr>';
                  }
                  else{

                  $no = 1;
                  while($row = mysqli_fetch_assoc($sql)){
                      
                       echo '
                    <tr>
                      <td style="text-align: center">'.$no.'</td>
                      <td style="text-align:center;">'.$row['tgl_pengumuman'].'</td>
                      <td style="text-align:center;">'.$row['judul_pengumuman'].'</td>
                      <td style="text-align: center"> 

                      <a  title="Hapus Data" pngId="'.$row['id_pengumuman'].'"  class="btn btn-danger btn-sm">hapus</a>
                      <a href="pengumuman.php?view='.$row['id_pengumuman'].'" class="btn btn-sm btn-info"<span  aria-hidden="true"></span> detail </a> </td> </tr>';
                      $no++;
                  }
                }
               
                ?>
              </tbody>
          </table>
           <div class=" col-xs-3">
          <button type="button" id="tambah-pengumuman"  class="btn btn-block btn-primary">Tambah Pengumuman</button>
          </div>

          
        </div>

          <?php } 
                  else
                      {
                $view=$_GET["view"];
                $sql  = mysqli_query($koneksi, "SELECT * FROM pengumuman WHERE id_pengumuman = '$view' ");
                    $row = mysqli_fetch_array($sql);
                    ?>
                    <section class="content">

                             <div class="col-md-12">
                                    <div style="background-color: #e6e8ed" class="box box-primary">
                                      <div style="background-color: #615eb2; color: white " class="box-header with-border">
                                        <h2 align="center"><b>Pengumuman</b></h2>
                                        <h5>Diterbitkan pada : <?= $row['tgl_pengumuman'];?> </h5>
                                      </div>
                                    
                                      <form role="form">
                                        <div class="box-body">
                                          <div class="form-group">
                                            <h4><b>Judul : <?= $row['judul_pengumuman'];?></b></h4>
                                          </div>
                                          <h4><b>Isi Pengumuman :</b></h4>
                                              <span align="justify"><p><?= $row['isi_pengumuman'];?></p>

                                          
                                          <?php
                                          if ($row['file_pengumuman']=='') {
                                            
                                          }
                                          else{
                                          ?>

                                          <div class="form-group">
                                          <h4><b>Dokumen :</b></h4>
                                           <a href="../penyelenggara/file_pengumuman/<?=$row['file_pengumuman'];?>" style="background-color: #615eb2 " class="btn btn-sm btn-success" target="_blank  ">Lihat Dokumen</a>
                                          </div>

                                      <?php }  ?>

                                      </form>
                                    </div>
                                    </div>
                              <?php  } ?>
                          </section>
                        </div>
                              
                         

  

              <script src="../user/js/jquery.min.js"></script> 
              <script src="../user/js/bootstrap.min.js"></script>
              <script src="../user/js/bootstrapValidator.js"></script>

        <link rel="stylesheet" type="text/css" href="../user/sweetalert-master/dist/sweetalert.css">
        <script type="text/javascript" src="../user/sweetalert-master/dist/sweetalert.min.js"></script>
<!---script alret hapus pengumuman-->
                <script>
                jQuery(document).ready(function($){
                    $('.btn-danger').on('click',function(){
                       var getLink = $(this).attr('href');
                      var n = $(this).attr("pngId");

                        swal({
                                title: "Apakah Anda Yakin Ingin Menghapus Pengumuman?",
                                
                                type: "warning",
                                showCancelButton: true,
                                confirmButtonColor: "#DD6B55",
                                confirmButtonText: "Ya",
                                closeOnConfirm: false
                                },function(){
                                   window.location="pengumuman.php?aksi=delete&id_pengumuman="+n;
                            });
                        return false;
                    });
                });
            </script> 


    <!-- proses hapus  -->
    <?php
      if(isset($_GET['aksi']) == 'delete'){
        $id_pengumuman = $_GET['id_pengumuman'];
        $cek = mysqli_query($koneksi, "SELECT * FROM pengumuman WHERE id_pengumuman='$id_pengumuman'") or die (mysqli_error($koneksi));
        if(mysqli_num_rows($cek) == 0){
          echo "<script>
              
              window.location.href='pengumuman.php';
              </script>";
        }else{
          $delete = mysqli_query($koneksi, "DELETE FROM pengumuman WHERE id_pengumuman='$id_pengumuman'");
          if($delete){

                     echo '<script>
              setTimeout(function() {
                  swal({
                      title: "Data Terhapus!",
                      
                      type: "success"
                  }, function() {
                      window.location = "pengumuman.php";
                  });
              });
          </script>';

          }else{
            echo "<script>
              
              window.location.href='pengumuman.php';
              </script>";
          }
        }
      }
      ?>

 <?php include("modal/tambah-pengumuman.php")  ?>


 

 <!---script tambah pengumuman-->
      <script>
      $(document).ready(function(){
          $("#tambah-pengumuman").click(function(){
              $("#Modal-pengumuman").modal();
          });
      });
      </script>
 <?php include("komponen/footer.php")  ?>

</body>
</html>

<?php include("komponen/header.php")  ?>
      <ul class="sidebar-menu">
       
        <li class="active treeview">
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
  <div style="background-color: white" class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section  class="content-header">
      <div class="row">
                    <div  class="col-lg-12">
                       <ol  class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Home</a>
                            </li>
                            <li class="active">
                               Profil
                            </li>
                        </ol>
                    </div>
                </div>
    </section>

    <!-- Main content -->
    <section class="content">
      
    <div id="page-wrapper">
      <div class="panel panel-info">
           
          
              <div class="row">
                <div class="col-md-4 col-lg-4 " > 

                <?php 
                            $id_penyelenggara=$_SESSION['id_penyelenggara'];
                            $sql = mysqli_query($koneksi, "SELECT * FROM penyelenggara WHERE id_penyelenggara=$id_penyelenggara");
                            $row = mysqli_fetch_assoc($sql);

            echo '<img src=logo/'.$row['logo'].'  width="340px" height="325px">';
            ?>  
                </div>
                
              
        <?php
          $id_penyelenggara = $_SESSION['id_penyelenggara'];
          $sql = mysqli_query($koneksi, "SELECT * FROM penyelenggara where id_penyelenggara='$id_penyelenggara' ");
          

          if(mysqli_num_rows($sql) == 0){
            echo '<tr style="text-align:center;"><td colspan="7">Empty</td></tr>';
          }
          else{
            $row = mysqli_fetch_assoc($sql);

            ?>
                          <div class=" col-md-9 col-lg-8 "> 
                            <table class="table table-user-information">
                              <tbody>
                              
                                <tr>
                                  <td><b>Nama Lomba</b></td>
                                  <td><?php echo $row['nama_lomba']; ?></td>
                                </tr>
                                <tr>
                                  <td><b>Penyelenggara</b></td>
                                  <td><?php echo $row['nama_penyelenggara']; ?></td>
                                </tr>
                                <tr>
                                  <td><b>Lokasi</b> </td>
                                  <td><?php echo $row['lokasi_lomba']; ?></td>
                                </tr>
                                <tr>
                                   <td><b>Waktu Mulai</b> </td>
                                  <td><?php echo $row['waktu_awal_lomba']; ?></td>
                                </tr>
                                <tr>
                                     <td><b>Waktu Selesai</b> </td>
                                  <td><?php echo $row['waktu_akhir_lomba']; ?></td>
                                </tr>
                                <tr>                                  
                                   <td><b>Email</b> </td>
                                  <td><?php echo $row['email_penyelenggara']; ?></td>
                                </tr>
                                <tr>
                                   <td><b>No HP</b> </td>
                                  <td><?php echo $row['tlp_penyelenggara']; ?></td>
                                </tr>
                                 
                                </tbody>
                            </table>
                         

                         <?php }

                         ?>   
                            
                            
                            <a href="#" id="edit-penyelenggara" class="btn btn-primary">edit profil</a>
                             <a href="#" id="logo" class="btn btn-warning">ganti logo</a>
                             <a href="#" id="nonaktif" class="btn btn-danger">Nonaktifkan Akun</a>
                            
                            
                  </div>
      
                </div>
               </div>
            </div>
        </section>
      </div>

 
     
        <?php include("modal/modal-edit-penyelenggara.php")  ?>

              <script src="../user/js/jquery.min.js"></script> 
              <script src="../user/js/bootstrap.min.js"></script>
              <script src="../user/js/bootstrapValidator.js"></script>

    
     <!---script edit penyelenggara-->
    <script>
    $(document).ready(function(){
        $("#edit-penyelenggara").click(function(){
            $("#Modal-penelenggara").modal();
        });
    });
    </script>
    <!---script edit logo-->
    <script>
    $(document).ready(function(){
        $("#logo").click(function(){
            $("#Modal-logo").modal();
        });
    });
    </script>


      

<!---script alret nonaktif-->
        <script>
        jQuery(document).ready(function($){
            $('#nonaktif').on('click',function(){
               var getLink = $(this).attr('href');
              

                swal({
                        title: "Apakah Anda Yakin Ingin Nonaktifkan Akun?",
                        text : "setelah anda menonaktifkan akun, anda tidak akan bisa mengakses dashboard ini lagi",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Ya",
                        closeOnConfirm: false
                        },function(){
                           window.location="proses/nonaktif.php";
                    });
                return false;
            });
        });
    </script>
 <?php include("komponen/footer.php")  ?>
<script type="text/javascript" src="../user/sweetalert-master/dist/sweetalert.min.js"></script>
</body>
</html>

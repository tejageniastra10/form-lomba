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
                            
                            
                  </div>
      
                </div>
               </div>
            </div>
        </section>
      </div>

 
     <?php
            $id_penyelenggara = $_SESSION['id_penyelenggara'];
            $sql = mysqli_query($koneksi, "SELECT * FROM penyelenggara WHERE id_penyelenggara='$id_penyelenggara'");
            if(mysqli_num_rows($sql) == 0)
            {
              echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data tidak ditemukan!!</div>';
            }
            else
            {
              $row = mysqli_fetch_assoc($sql);
            }
            if(isset($_POST['edit']))
            {
              
              $nama_penyelenggara       = $_POST['nama_penyelenggara'];
              $nama_lomba               = $_POST['nama_lomba'];
              $lokasi_lomba             = $_POST['lokasi_lomba'];
              $waktu_awal_lomba         = $_POST['waktu_awal_lomba'];
              $waktu_akhir_lomba        = $_POST['waktu_akhir_lomba'];
              $email_penyelenggara      = $_POST['email_penyelenggara'];
              $tlp_penyelenggara        = $_POST['tlp_penyelenggara'];
             
              

              

              
                $update = mysqli_query($koneksi, "UPDATE penyelenggara SET nama_penyelenggara='$nama_penyelenggara', nama_lomba='$nama_lomba', lokasi_lomba='$lokasi_lomba', waktu_awal_lomba='$waktu_akhir_lomba', email_penyelenggara='$email_penyelenggara',tlp_penyelenggara='$tlp_penyelenggara' WHERE id_penyelenggara='$id_penyelenggara'") or die (mysqli_error());

              if($update)
              {
                
                echo "<script>
                  alert('data berhasil di edit ');
                  window.location.href='index.php';
                  </script>";

                    }
              else
              {
                echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data gagal disimpan, silahkan coba lagi.</div>';
              }
              
            }
            
          ?>

        <!-- Modal edit penyelenggara -->
      <div class="modal fade" id="Modal-penelenggara" role="dialog">
        <div class="modal-dialog">
        
          <div class="modal-content">
            <div class="modal-header" style="background: green; color: white; padding:30px 40px;">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h2 align="center"><b> Edit Penyelenggara</b></h2>
            </div>
            <div class="modal-body" style="padding:40px 50px;">
              <form id="form_edit_penyelenggara" class="form-horizontal" action="" method="post" enctype="multipart/form-data">
              <div class="form-group">
                  <label ><span class="glyphicon glyphicon-home"></span>  Nama Penyelenggara</label>
                  <input type="text" class="form-control" value="<?php echo $row ['nama_penyelenggara']; ?>" name="nama_penyelenggara" placeholder="Masukan Nama Penyelenggara">
                </div>
                <div class="form-group">
                  <label ><span class="glyphicon glyphicon-file"></span>  Nama Lomba</label>
                  <input type="text" class="form-control" value="<?php echo $row ['nama_lomba']; ?>" name="nama_lomba" readonly>
                </div>
                <div class="form-group">
                  <label ><span class="glyphicon glyphicon-send"></span>  lokasi Lomba</label>
                  <input type="text" class="form-control" value="<?php echo $row ['lokasi_lomba']; ?>" name="lokasi_lomba" placeholder="masukan lokasi lomba">
                </div>
                <div class="form-group">
                  <label ><span class="glyphicon glyphicon-calendar"></span>  Waktu Awal Lomba</label>
                  <input type="date" class="form-control" value="<?php echo $row ['waktu_awal_lomba']; ?>" name="waktu_awal_lomba" placeholder="masukan waktu" required>
                </div>
                <div class="form-group">
                  <label ><span class="glyphicon glyphicon-calendar"></span>  Waktu Akhir Lomba</label>
                  <input type="date" class="form-control" value="<?php echo $row ['waktu_akhir_lomba']; ?>" name="waktu_akhir_lomba" placeholder="masukan waktu" required>
                </div>

                <div class="form-group">
                  <label ><span class="glyphicon glyphicon-envelope"></span> Email</label>
                  <input type="text" class="form-control" value="<?php echo $row ['email_penyelenggara']; ?>" name="email_penyelenggara" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="usrname"><span class="glyphicon glyphicon-phone-alt"></span> No. Telepon</label>
                  <input type="text" class="form-control" value="<?php echo $row ['tlp_penyelenggara']; ?>" name="tlp_penyelenggara" placeholder="masukan no hp">
                </div>
                
               
               
                
                
              
                
                  <button type="submit" href="index.php" type="submit" name="edit" value="Simpan" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Simpan</button>
              </form>
            </div>     
          </div>
        </div>
      </div> 


          <?php
            if(isset($_POST['ganti_logo']))
            {
              
              $logo = $_FILES['logo']['name'];
              $tmp = $_FILES['logo']['tmp_name'];
              $fotobaru = date('dmYHis').$logo;
              $path = "logo/".$fotobaru;
              $id_penyelenggara=$_SESSION['id_penyelenggara'];

              

              
            if(move_uploaded_file($tmp, $path)){
              
             $update = mysqli_query($koneksi, "UPDATE penyelenggara set logo='$fotobaru' WHERE id_penyelenggara='$id_penyelenggara'") or die(mysqli_error($koneksi));
                  if($update)
                  {
                    echo "<script>
                      alert('berhasil tersimpan');
                      window.location.href='index.php';
                      </script>";
                  }
                  else
                  {
                    echo "<script>
                      alert('gagal tersimpan');
                      window.location.href='index.php';
                      </script>";

                  }
            }
            
            }
          ?>



         
    <!-- Modal ganti logo -->
      <div class="modal fade" id="Modal-logo" role="dialog">
        <div class="modal-dialog">
        
          <div class="modal-content">
            
            <div class="modal-body" style="padding:40px 50px;">
              <form id="logo" class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                    
                                <?php 
                                $id_penyelenggara=$_SESSION['id_penyelenggara'];
                                $sql = mysqli_query($koneksi, "SELECT * FROM penyelenggara WHERE id_penyelenggara=$id_penyelenggara");
                                $row = mysqli_fetch_assoc($sql);

                echo '<img src=logo/'.$row['logo'].' width="470px" height="430px">';
                ?>  
                  <input type="file" name="logo" class="form-control" >
                  <button type="submit" href="index.php" type="submit" name="ganti_logo" value="Simpan" class="btn btn-success btn-block"> ganti</button>
              </form>
            </div>     
          </div>
        </div>
      </div> 

  

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


 <?php include("komponen/footer.php")  ?>


</body>
</html>

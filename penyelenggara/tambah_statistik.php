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
         <li >
          <a href="pengumuman.php">
            <i class="fa fa-bullhorn"></i>
            <span>Pengumuman</span>
            
          </a>
        </li>
       <li class="active treeview">
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
                               Statistik
                            </li>
                        </ol>
                    </div>
                </div>
    </section>

    <!-- Main content -->
    <section class="content">
      
   <div id="page-wrapper" style="left :70px"  >
    <div class="row">
      <div  style="left :280px"  class="col-lg-10">
      
            <form id="form_edit_penyelenggara" method="post" enctype="multipart/form-data" style="left: 10px">
              <div class="form-group">
               <div class="row">
                    <div  class="col-lg-7">
                  <label>Fase Pertandingan</label>
                  <select name="fase_pertandingan" class="form-control" >
                    <option value="0">Status Fase Pertandingan</option>
                    <option value="Penyisihan Grup" >Penyisihan Grup</option>
                    <option value="Semifinal" >Semifinal</option>
                    <option value="Final" >Final</option>
                  </select>
                </div>
                </div>
                </div>


                 <div class="form-group">
               <div class="row">
                    <div  class="col-lg-7">
                  <label >Nama Team Pertama</label>
                    <select name="namateamA" class="form-control" >
                       <?php
                        $id_p = $_SESSION['id_penyelenggara'];
                        $sql  = mysqli_query($koneksi, "SELECT * FROM tim");
                        
                        while($data=mysqli_fetch_array($sql)){
                       
                        ?>
                            <option><?php echo $data["nama_tim"] ?></option>
                       
                        <?php
                        }
                        ?>
                    </select>
                    </div>
                </div>
                </div>
               


                 <div class="form-group">
                  <div class="row">
                    <div  class="col-lg-7">
                  <label >Gol Team Pertama</label>
                  <input type="text" class="form-control" name="golteamA">
                </div>
                </div>
                </div>
                <div class="form-group">
                <div class="row">
                    <div  class="col-lg-7">
                  <label >Nama Team Kedua</label>
                  <select name="namateamB" class="form-control" >
                       <?php
                        $id_p = $_SESSION['id_penyelenggara'];
                        $sql  = mysqli_query($koneksi, "SELECT * FROM tim ");
                        
                        while($data=mysqli_fetch_array($sql)){
                       
                        ?>
                            <option><?php echo $data["nama_tim"] ?></option>
                       
                        <?php
                        }
                        ?>
                    </select>
                </div>
                </div>
                </div>
                 <div class="form-group">
                 <div class="row">
                    <div  class="col-lg-7">
                  <label >Gol Team Kedua</label>
                  <input type="text" class="form-control" name="golteamB">
                </div>
                </div>
                </div>
                <div class="form-group">
                <div class="row">
                    <div  class="col-lg-7">
                  <label >Jam Petandingan</label>
                  <input type="text"  class="form-control"  name="jam_pertandingan" value="<?php echo date("h : i") ?> " >
                </div>
                </div>
                </div>
                <div class="form-group">
                <div class="row">
                    <div  class="col-lg-7">
                  <label > Tanggal Pertandingan Pertandingan</label>
                  <input type="date" class="form-control" name="tanggal_pertandingan" placeholder="masukan waktu">
                </div>
                </div>
                </div>
              <div class="form-group">
              <div class="row">
                    <div  class="col-lg-7">
                <label > Keterangan</label>
                <textarea rows="6" class="form-control" name="keterangan" placeholder="Masukkan isi keterangan"></textarea>
              </div>
              </div>
              </div>
                
                <div class=" col-xs-7">
                  <button type="submit" type="submit" name="tambah" value="tambah_statistik" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Tambah</button>
                </div>
                <input  name="id_penyelenggara" value="<?php echo $_SESSION['id_penyelenggara']; ?> " type="hidden">
              </form>
         </div>
         </div>
         </div><!-- /#page-wrapper -->
        </section>
      </div>


    </div>
        
   

  

              <script src="../user/js/jquery.min.js"></script> 
              <script src="../user/js/bootstrap.min.js"></script>
              <script src="../user/js/bootstrapValidator.js"></script>

    
    

 <?php include("modal/tambah-pengumuman.php")  ?>


 

 <!---script tambah pengumuman-->
<?php


        if(isset($_POST['tambah']))
        {
          $fase_pertandingan       = $_POST['fase_pertandingan'];
          $namateamA          = $_POST['namateamA'];
          $golteamA            = $_POST['golteamA'];
          $golteamB            = $_POST['golteamB'];
          $namateamB           = $_POST['namateamB'];
          $jam_pertandingan       = $_POST['jam_pertandingan'];
          $tanggal_pertandingan   = $_POST['tanggal_pertandingan'];
          $keterangan            = $_POST['keterangan'];
          $id_penyelenggara     = $_POST['id_penyelenggara'];
         
          
            $insert = mysqli_query($koneksi, "INSERT INTO statistik(fase_pertandingan,namateamA,namateamB,golteamA,golteamB,jam_pertandingan, tanggal_pertandingan,keterangan,id_penyelenggara) VALUES('$fase_pertandingan','$namateamA','$namateamB', '$golteamA', '$golteamB', '$jam_pertandingan', '$tanggal_pertandingan', '$keterangan','$id_penyelenggara')") or die(mysqli_error($koneksi));
              if($insert)
              { 
                echo "<script>
                        alert('pendaftaran berhasil');
                        window.location.href='statistik.php';
                        </script>";
                
              }
            else
              {
                echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Sudah Ada..!</div>';
              }

        }
        else
        {
          echo "string";
        }
      ?>


 <?php include("komponen/footer.php")  ?>

</body>
</html>

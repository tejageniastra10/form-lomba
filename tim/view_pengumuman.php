<?php include("header.php") ?>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Home</a>
                    </li>
                     <li class="active">
                        <a href="pengumuman_peserta.php"><i class="fa fa-fw fa-list"></i> Pengumuman</a>
                    </li>
                    <li>
                        <a href="list.php"><i class="fa fa-fw fa-list"></i> Daftar Tim</a>
                    </li>
                    <li>
                        <a href="myteam.php"><i class="fa fa-fw fa-plus"></i> Pemain</a>
                    </li>
                    <li>
                        <a href="jadwal.php"><i class="fa fa-fw fa-calendar"></i> Jadwal</a>
                    </li>
                    <li>
                        <a href="statisti_peserta.php"><i class="fa fa-fw fa-calendar"></i> Statistik</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="pengumuman_peserta.php">Pengumuman</a>
                        </li>
                    </ol>
                </div>


          <!-- About Me Box -->
          <div class="col-md-6">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">PENGUMUMAN</h3>
              </div>

              <?php
              $id_penyelenggara = $_SESSION['id_penyelenggara_tim'];

              if(isset($_POST['view'])){

                $id_pengumuman=$_POST['id_pengumuman'];
              
              
              
              $sql = mysqli_query($koneksi, "SELECT * FROM pengumuman WHERE id_pengumuman='$id_pengumuman'");
              $data = mysqli_fetch_assoc($sql);

            
              ?>
              <!-- /.box-header -->
              <div class="box-body">
               <strong> Judul </strong>
                <p >
                </p>
                <p class="text-muted">
                 <?php echo $data['judul_pengumuman'];  ?>
                </p>

                <hr>

                <strong> Alamat  </strong>
                <p >
                </p>
                <p class="text-muted">
                  <?php echo $data['tgl_pengumuman'];  ?>
                </p>

              <hr>

              <strong> Isi Pengumuman</strong>
              <p >
              </p>
              <p class="text-muted"><?php echo $data['isi_pengumuman'];  ?></p>

              <hr>
              <a href="../penyelenggara/file_pengumuman/<?php echo $data['file_pengumuman'];?>" target="_blank">
                Lihat Dokumen 
              </a>
            </div>
            <!-- /.box-body -->
         <?php } ?>
                
          </div>
          <!-- /.box -->
          </div>

            </div>

        </div>
       
  
           
            <!-- /.container-fluid -->


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <div class="container">

 </div>

<!---script edit-->

</body>

</html>

<?php include("header.php") ?>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li >
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Home</a>
                    </li>
                     <li class="active">
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
                    <li>
                        <a href="statisti_peserta.php"><i class="fa fa-fw fa-calendar"></i> Statistik</a>
                    </li>
                </ul>
            </div>
            </nav>

            <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Pengumuman 
                        </h1>
                       
                    </div>
                </div>
             </div>
              </div>

  <?php
                        $id_penyelenggara = $_SESSION['id_penyelenggara_tim'];
                        $result = mysqli_query($koneksi, "SELECT * FROM pengumuman WHERE id_penyelenggara='$id_penyelenggara'");
                        while($data = mysqli_fetch_array($result)){ 
                    ?>
                        <div id="page-wrapper">
            <div class="container-fluid">
                         <div class="row">
                            <div class="col-md-9">
                            <h3>
                                <?php echo $data['judul_pengumuman']; ?>
                             </h3>
                              <small class="post-date">Posted on: <?php echo $data['tgl_pengumuman']; ?> in <strong><?php echo $_SESSION['nama_penyelenggara']; ?></strong></small><br>
                             <h4>
                             <?php echo $data['isi_pengumuman']; ?>
                              </h4>
                              
                              <br>
                              <p>
                              <form action="view_pengumuman.php" method="post">
                              <input type="hidden" name="id_pengumuman" value="<?php echo $data['id_pengumuman'];?>">
                                    <button  class="btn btn-primary" type="subbmit" name="view" value="simpan">Lihat
                                        
                                    </button>
                              </form>
                                </p>
                           
                            </div>
                          </div>
                          <hr>
                    <?php
                        }
                    ?>
                  </div>
              </div>





    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>


</body>

</html>

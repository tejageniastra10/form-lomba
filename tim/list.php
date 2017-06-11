
<?php include("header.php") ?>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li >
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Home</a>
                    </li>
                     <li>
                        <a href="pengumuman_peserta.php"><i class="fa fa-fw fa-list"></i> Pengumuman</a>
                    </li>
                     <li class="active">
                        <a href="list.php"><i class="fa fa-fw fa-list"></i> Daftar Tim</a>
                    </li>
                    <li>
                        <a href="myteam.php"><i class="fa fa-fw fa-plus"></i> Pemain</a>
                    </li>
                    <li>
                        <a href="statisti_peserta.php"><i class="fa fa-fw fa-calendar"></i> Statistik</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Tim Terdaftar
                            <small>Peserta</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Home</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-list"></i>Tim Terdaftar
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <!--isi-->
            
                <!-- Table -->
        <?php
        if(!isset($_GET["view"]))
            {?>
                *Klik Nama tim untuk melihat anggota tim
                <table class="responstable">
                    <tr>
                    <th p align="center" ><b>NAMA TIM</b></th>
                    <th p align="center" ><b>ALAMAT</b></th>
                    <th p align="center" ><b>NO. TELEPON</b></th>
                    </tr>



                    <?php
                        $id_tim = $_SESSION['id_tim'];
                        $result1 = mysqli_query($koneksi, "SELECT * FROM tim WHERE id_tim='$id_tim'");
                        $data1 = mysqli_fetch_array($result1);
                        $id_penyelenggara= $data1['id_penyelenggara'];


                        $result = mysqli_query($koneksi, "SELECT * FROM tim WHERE id_penyelenggara='$id_penyelenggara'");
                        while($data = mysqli_fetch_array($result)){ 
                    ?>
                        <tr>
                            <td p align="center" ><b><a href="list.php?view=<?=$data['id_tim']; ?>"><?php echo $data['nama_tim'];?></a><b></td>
                            <td p align="center" ><?php echo $data['alamat_tim']; ?></td>
                            <td p align="center" ><?php echo $data['tlp_tim']; ?></td>
                        </tr>
                    <?php
                        }
                    ?>
                </table>

    <?php } 
        else
            {
                $view=$_GET["view"];
                    $sql  = mysqli_query($koneksi, "SELECT nama_tim FROM tim WHERE id_tim = '$view'");
                    $result = mysqli_fetch_array($sql);
                    ?>
                    <h1><?php echo $result['nama_tim']; ?></h1>
                    <table class="responstable">
                    <tr>
                        <th p align="center" ><b>NAMA</b></th>
                        <th p align="center" ><b>USIA</b></th>
                        <th p align="center" ><b>ALAMAT</b></th>
                    </tr>

                <?php
                    $sql  = "SELECT * FROM pemain WHERE id_tim = '$view'";
                    $result = mysqli_query($koneksi, $sql);
                    while($data = mysqli_fetch_array($result)){ 
                ?>
                    <tr>
                        <td p align="center" ><b><?php echo $data['nama_pemain'];?></b></td>
                        <td p align="center" ><?php echo $data['usia_pemain']; ?></td>
                        <td p align="center" ><?php echo $data['alamat_pemain']; ?></td>
                    </tr>
                <?php } ?>
                 </table>
    <?php  } ?>
  
            </div>

        </div>
            <!-- /.container-fluid -->


        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

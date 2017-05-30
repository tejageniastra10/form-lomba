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
                    <li >
                        <a href="myteam.php"><i class="fa fa-fw fa-plus"></i> Pemain</a>
                    </li>
                    <li class="active"> 
                        <a href="jadwal.php"><i class="fa fa-fw fa-calendar"></i> Jadwal</a>
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
                            Hasil Undian dan Jadwal
                            <small>Peserta</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Home</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-calendar"></i> Hasil Undian dan Jadwal
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

               

                <!--isi-->
    <?php
        require_once("../koneksi.php");
        $result = mysqli_query($koneksi, "SELECT id_tim FROM jadwal");
        $jumlah = mysqli_num_rows($result);

    if($jumlah!=16)
    {?>
        <div class="alert alert-danger" role="alert"><b>Tim yang terdaftar belum memenuhi kuota, tidak dapat menampilkan hasil undian dan jadwal.</b></div>
    <?php
    }
    else
    {   
        if(!isset($_GET['jadwal']))
        { 
            { 
                    require_once("../koneksi.php");

                    $undian = array();
                    $query3 = "SELECT nama_tim FROM undian INNER JOIN tim ON undian.id_tim = tim.id_penyelenggara";
                    $result3 = mysqli_query($koneksi, $query3);

                    while($data2 = mysqli_fetch_array($result3)){
                        $undian[] = $data2['nama_tim'];
                    }
                ?>
                <div class="row">
                
                    <div class="col-xs-8 col-sm-6">
                    <h1>Hasil Undian</h1>
                        <table class="responstable">
                            <tr>
                                <th p align="center" ><b>GRUP A</b></th>
                            </tr>
                            <?php for ($i=0; $i < 4; $i++) { ?>
                            <tr>
                                <td p align="center" ><?= $undian[$i] ?></td>
                            </tr>
                            <?php } ?>
                        </table>
                    </div>
                    <div class="col-xs-4 col-sm-6">
                    <a href="jadwal.php?jadwal=1" class="btn btn-primary btn-lg pull-right" role="button">Lihat Jadwal</a><br><br><br>
                        <table class="responstable">
                            <tr>
                                <th p align="center" ><b>GRUP B</b></th>
                            </tr>
                            <?php for ($i=4; $i < 8; $i++) { ?>
                            <tr>
                                <td p align="center" ><?= $undian[$i] ?></td>
                            </tr>
                            <?php } ?>                  
                        </table>
                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="col-xs-8 col-sm-6">
                        <table class="responstable">
                            <tr>
                                <th p align="center" ><b>GRUP C</b></th>
                            </tr>
                            <?php for ($i=8; $i < 12; $i++) { ?>
                            <tr>
                                <td p align="center" ><?= $undian[$i] ?></td>
                            </tr>
                            <?php } ?>
                        </table>
                    </div>
                    <div class="col-xs-4 col-sm-6">
                        <table class="responstable">
                            <tr>
                                <th p align="center" ><b>GRUP D</b></th>
                            </tr>
                            <?php for ($i=12; $i <= 15; $i++) { ?>
                            <tr>
                                <td p align="center" ><?= $undian[$i] ?></td>
                            </tr>
                            <?php } ?>                       
                        </table>
                    </div>
                </div>
        <?php   } 
        }   
        else
        {
            require_once("../koneksi.php");
                    $tim = array();
                    $query = "SELECT id_tim FROM undian INNER JOIN tim ON undian.id_tim = tim.id_penyelenggara";
                    $result = mysqli_query($koneksi, $query);

                    while($data = mysqli_fetch_array($result)){
                        $tim[] = $data['nama_tim'];
                    }

        ?>
        <div class="row">
                    <div class="col-xs-8 col-sm-6">
                    <h1>Jadwal Pertandingan</h1>
                        <table class="responstable">
                            <tr>
                                <th p align="center" >PERTANDINGAN</th>
                            </tr>
                            <tr>
                                <td p align="center" ><?php echo"<b>$tim[0]</b> VS <b>$tim[1]</b>"; ?></td>
                            </tr>
                            <tr>
                                <td p align="center" ><?php echo"<b>$tim[4]</b> VS <b>$tim[5]</b>"; ?></td>
                            </tr>
                            <tr>
                                <td p align="center" ><?php echo"<b>$tim[2]</b> VS <b>$tim[3]</b>"; ?></td>
                            </tr>
                            <tr>
                                <td p align="center" ><?php echo"<b>$tim[6]</b> VS <b>$tim[7]</b>"; ?></td>
                            </tr>
                            <tr>
                                <td p align="center" ><?php echo"<b>$tim[0]</b> VS <b>$tim[2]</b>"; ?></td>
                            </tr>
                            <tr>
                                <td p align="center" ><?php echo"<b>$tim[4]</b> VS <b>$tim[6]</b>"; ?></td>
                            </tr>
                                <tr>
                                <td p align="center" ><?php echo"<b>$tim[1]</b> VS <b>$tim[3]</b>"; ?></td>
                            </tr>
                            <tr>
                                <td p align="center" ><?php echo"<b>$tim[5]</b> VS <b>$tim[7]</b>"; ?></td>
                            </tr>
                            <tr>
                                <td p align="center" ><?php echo"<b>$tim[0]</b> VS <b>$tim[3]</b>"; ?></td>
                            </tr>
                            <tr>
                                <td p align="center" ><?php echo"<b>$tim[4]</b> VS <b>$tim[7]</b>"; ?></td>
                            </tr>
                            <tr>
                                <td p align="center" ><?php echo"<b>$tim[1]</b> VS <b>$tim[2]</b>"; ?></td>
                            </tr>
                            <tr>
                                <td p align="center" ><?php echo"<b>$tim[5]</b> VS <b>$tim[6]</b>"; ?></td>
                            </tr>
                        </div>
                        </table>
                    </div>
                    
    <?php           
        }
    } ?>

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

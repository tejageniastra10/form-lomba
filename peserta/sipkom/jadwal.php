<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Peserta | Jadwal </title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<style type="text/css">
    .responstable {
  margin: 1em 0;
  width: 100%;
  overflow: hidden;
  background: #FFF;
  color: #024457;
  border-radius: 10px;
  border: 1px solid #167F92;
}
.responstable tr {
  border: 1px solid #D9E4E6;
  text-align: center;
}
.responstable tr:nth-child(odd) {
  background-color: #EAF3F3;
  text-align: center;
}
.responstable th {
  display: none;
  border: 1px solid #FFF;
  background-color: #34495E;
  color: #FFF;
  padding: 1em;
  text-align: center;
}
.responstable th:first-child {
  display: table-cell;
  text-align: center;
}
.responstable th:nth-child(2) {
  display: table-cell;
  text-align: center;
}
.responstable th:nth-child(2) span {
  display: none;
  text-align: center;
}
.responstable th:nth-child(2):after {
  content: attr(data-th);
  text-align: center;
}
@media (min-width: 480px) {
  .responstable th:nth-child(2) span {
    display: block;
    text-align: center;
  }
  .responstable th:nth-child(2):after {
    display: none;
    text-align: center;
  }
}
.responstable td {
  display: block;
  word-wrap: break-word;
  max-width: 7em;
  text-align: center;
}
.responstable td:first-child {
  display: table-cell;
  text-align: center;
  border-right: 1px solid #D9E4E6;
  text-align: center;
}
@media (min-width: 480px) {
  .responstable td {
    border: 1px solid #D9E4E6;
    text-align: center;
  }
}
.responstable th,
.responstable td {
  text-align: center;
  margin: .5em 1em;
}
@media (min-width: 480px) {
  .responstable th,
  .responstable td {
    display: table-cell;
    padding: 1em;
  }
}

body {
  padding: 0 2em;
  font-family: Arial, sans-serif;
  color: #024457;
  background: #f2f2f2;
}

h1 {
  font-family: Verdana;
  font-weight: normal;
  color: #024457;
}
h1 span {
  color: #167F92;
}
</style>
<body>
<?php
  session_start();
    if(!isset($_SESSION['username'])) 
    {
      header('location:login1.php?failed=5'); 
    }
    else 
    { 
      $username = $_SESSION['username'];
      $idtim    = $_SESSION['idtim'];
    }
    require_once("../koneksi.php");
    $query = 'SELECT namatim FROM tim WHERE id = "'.$idtim.'"';
    $hasil = mysqli_query($konek, $query);
    $name  = mysqli_fetch_array($hasil);
    ?>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="sip.php">Nama Kegiatan | Peserta</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?=$username?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="../index.php"><i class="fa fa-fw fa-user"></i> Homepage</a>
                        </li>
                        <li>
                            <a href="../petunjuk.php"><i class="fa fa-fw fa-info"></i> Petunjuk</a>
                        </li>
                        <li>
                            <a href="../kegiatan.php"><i class="fa fa-fw fa-info"></i> Kegiatan</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="../logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                     <li >
                        <a href="sip.php"><i class="fa fa-fw fa-dashboard"></i> Home</a>
                    </li>
                     <li>
                        <a href="pengumuman_peserta.php"><i class="fa fa-fw fa-list"></i> Pengumuman</a>
                    </li>
                    <li >
                        <a href="list.php"><i class="fa fa-fw fa-list"></i> Tim Terdaftar</a>
                    </li>
                    <li >
                        <a href="myteam.php"><i class="fa fa-fw fa-plus"></i> Pemain</a>
                    </li>
                     <li>
                        <a href="pembayaran_peserta.php"><i class="fa fa-fw fa-plus"></i> Pembayaran</a>
                    </li>
                    <li class="active"> 
                        <a href="jadwal.php"><i class="fa fa-fw fa-calendar"></i> Hasil Undian dan Jadwal</a>
                    </li>
                    <li>
                        <a href="statistik_peserta.php"><i class="fa fa-fw fa-calendar"></i> Statistik</a>
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
                                <i class="fa fa-dashboard"></i>  <a href="sip.php">Home</a>
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
        $sql = "SELECT id FROM tim";
        $result = mysqli_query($konek, $sql);
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
                    $query3 = "SELECT namatim FROM undian INNER JOIN tim ON undian.idtim = tim.id";
                    $result3 = mysqli_query($konek, $query3);

                    while($data2 = mysqli_fetch_array($result3)){
                        $undian[] = $data2['namatim'];
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
                    $query = "SELECT namatim FROM undian INNER JOIN tim ON undian.idtim = tim.id";
                    $result = mysqli_query($konek, $query);

                    while($data = mysqli_fetch_array($result)){
                        $tim[] = $data['namatim'];
                    }

                    $jam = array();
                    $query2 = "SELECT jam FROM jadwal";
                    $result2 = mysqli_query($konek, $query2);

                    while($data2 = mysqli_fetch_array($result2)){
                        $jam[] = $data2['jam'];
                    }

        ?>
        <div class="row">
                    <div class="col-xs-8 col-sm-6">
                    <h1>Jadwal Pertandingan</h1>
                        <table class="responstable">
                            <tr>
                                <th p align="center" colspan="2" ><b>LAPANGAN 1</b></th>
                            </tr>
                            <tr>
                                <th p align="center" >JAM</th>
                                <th p align="center" >PERTANDINGAN</th>
                            </tr>
                            <tr>
                                <td p align="center" ><?= $jam[0]; ?></td>
                                <td p align="center" ><?php echo"<b>$tim[0]</b> VS <b>$tim[1]</b>"; ?></td>
                            </tr>
                            <tr>
                                <td p align="center" ><?= $jam[1]; ?></td>
                                <td p align="center" ><?php echo"<b>$tim[4]</b> VS <b>$tim[5]</b>"; ?></td>
                            </tr>
                            <tr>
                                <td p align="center" ><?= $jam[2]; ?></td>
                                <td p align="center" ><?php echo"<b>$tim[2]</b> VS <b>$tim[3]</b>"; ?></td>
                            </tr>
                            <tr>
                                <td p align="center" ><?= $jam[3]; ?></td>
                                <td p align="center" ><?php echo"<b>$tim[6]</b> VS <b>$tim[7]</b>"; ?></td>
                            </tr>
                            <tr>
                                <td p align="center" ><?= $jam[4]; ?></td>
                                <td p align="center" ><?php echo"<b>$tim[0]</b> VS <b>$tim[2]</b>"; ?></td>
                            </tr>
                            <tr>
                                <td p align="center" ><?= $jam[5]; ?></td>
                                <td p align="center" ><?php echo"<b>$tim[4]</b> VS <b>$tim[6]</b>"; ?></td>
                            </tr>
                                <tr>
                                <td p align="center" ><?= $jam[6]; ?></td>
                                <td p align="center" ><?php echo"<b>$tim[1]</b> VS <b>$tim[3]</b>"; ?></td>
                            </tr>
                            <tr>
                                <td p align="center" ><?= $jam[7]; ?></td>
                                <td p align="center" ><?php echo"<b>$tim[5]</b> VS <b>$tim[7]</b>"; ?></td>
                            </tr>
                            <tr>
                                <td p align="center" ><?= $jam[8]; ?></td>
                                <td p align="center" ><?php echo"<b>$tim[0]</b> VS <b>$tim[3]</b>"; ?></td>
                            </tr>
                            <tr>
                                <td p align="center" ><?= $jam[9]; ?></td>
                                <td p align="center" ><?php echo"<b>$tim[4]</b> VS <b>$tim[7]</b>"; ?></td>
                            </tr>
                            <tr>
                                <td p align="center" ><?= $jam[10]; ?></td>
                                <td p align="center" ><?php echo"<b>$tim[1]</b> VS <b>$tim[2]</b>"; ?></td>
                            </tr>
                            <tr>
                                <td p align="center" ><?= $jam[11]; ?></td>
                                <td p align="center" ><?php echo"<b>$tim[5]</b> VS <b>$tim[6]</b>"; ?></td>
                            </tr>
                        </div>
                        </table>
                    </div>
                    <div class="col-xs-4 col-sm-6">
                    <a href="jadwal.php" class="btn btn-primary btn-lg pull-right" role="button">Hasil Undian</a><br><br><br>
                        <table class="responstable">
                            <tr>
                                <th p align="center" colspan="2" ><b>LAPANGAN 2</b></th>
                            </tr>
                            <tr>
                                <th p align="center" >JAM</th>
                                <th p align="center" >PERTANDINGAN</th>
                            </tr>
                            <tr>
                                <td p align="center" ><?= $jam[12]; ?></td>
                                <td p align="center" ><?php echo"<b>$tim[8]</b> VS <b>$tim[9]</b>"; ?></td>
                            </tr>
                            <tr>
                                <td p align="center" ><?= $jam[13]; ?></td>
                                <td p align="center" ><?php echo"<b>$tim[12]</b> VS <b>$tim[13]</b>"; ?></td>
                            </tr>
                            <tr>
                                <td p align="center" ><?= $jam[14]; ?></td>
                                <td p align="center" ><?php echo"<b>$tim[10]</b> VS <b>$tim[11]</b>"; ?></td>
                            </tr>
                            <tr>
                                <td p align="center" ><?= $jam[15]; ?></td>
                                <td p align="center" ><?php echo"<b>$tim[14]</b> VS <b>$tim[15]</b>"; ?></td>
                            </tr>
                            <tr>
                                <td p align="center" ><?= $jam[16]; ?></td>
                                <td p align="center" ><?php echo"<b>$tim[8]</b> VS <b>$tim[10]</b>"; ?></td>
                            </tr>
                            <tr>
                                <td p align="center" ><?= $jam[17]; ?></td>
                                <td p align="center" ><?php echo"<b>$tim[12]</b> VS <b>$tim[14]</b>"; ?></td>
                            </tr>
                                <tr>
                                <td p align="center" ><?= $jam[18]; ?></td>
                                <td p align="center" ><?php echo"<b>$tim[9]</b> VS <b>$tim[11]</b>"; ?></td>
                            </tr>
                            <tr>
                                <td p align="center" ><?= $jam[19]; ?></td>
                                <td p align="center" ><?php echo"<b>$tim[13]</b> VS <b>$tim[15]</b>"; ?></td>
                            </tr>
                            <tr>
                                <td p align="center" ><?= $jam[20]; ?></td>
                                <td p align="center" ><?php echo"<b>$tim[8]</b> VS <b>$tim[11]</b>"; ?></td>
                            </tr>
                            <tr>
                                <td p align="center" ><?= $jam[21]; ?></td>
                                <td p align="center" ><?php echo"<b>$tim[12]</b> VS <b>$tim[14]</b>"; ?></td>
                            </tr>
                            <tr>
                                <td p align="center" ><?= $jam[22]; ?></td>
                                <td p align="center" ><?php echo"<b>$tim[9]</b> VS <b>$tim[10]</b>"; ?></td>
                            </tr>
                            <tr>
                                <td p align="center" ><?= $jam[23]; ?></td>
                                <td p align="center" ><?php echo"<b>$tim[13]</b> VS <b>$tim[14]</b>"; ?></td>
                            </tr>
                        </div>
                        </table>
                    </div>
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
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

</body>

</html>

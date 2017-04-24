<?php
  include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Projek web a</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">

  </head>

  <body>

    <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">SPOTS TURNAMENT</a>
        </div>

        <!-- pilihan menu -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li class="active"><a href="index.html"><i class="fa fa-dashboard"></i> Data Penyelenggara</a></li>
            <li><a href="charts.html"><i class="fa fa-bar-chart-o"></i> Confirmasi Penyelenggara</a></li>
            <li><a href="tables.html"><i class="fa fa-table"></i> Statistik</a></li>
            <li><a href="forms.html"><i class="fa fa-edit"></i> Ivent</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Rudi Astawan <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                <li class="divider"></li>
                <li><a href="#"><i class="fa fa-power-off"></i> Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>

      <?php
      if(isset($_GET['aksi']) == 'delete'){
        $id_penyelenggara = $_GET['id_penyelenggara'];
        $cek = mysqli_query($koneksi, "SELECT * FROM penyelenggara WHERE id_penyelenggara='$id_penyelenggara'") or die (mysqli_error($koneksi));
        if(mysqli_num_rows($cek) == 0){
          echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data tidak ditemukan.</div>';
        }else{
          $delete = mysqli_query($koneksi, "DELETE FROM penyelenggara WHERE id_penyelenggara='$id_penyelenggara'");
          if($delete){
            ?>
              <script type="text/javascript">
                alert("Data Berhasil Dihapus");
              </script>
            <?php
          }else{
            ?>
              <script type="text/javascript">
                alert("Data Gagal Dihapus");
              </script>
            <?php
          }
        }
      }
      ?>

      <div id="page-wrapper"><br />
      <h2>Tampilan Data Admin</h2><br />

      <table class="table table-bordered table-striped">
        <thead style="text-align: center">
            <td>Id</td>
            <td>Nama Penyelenggara</td>
            <td>Nama Lomba</td>
            <td>Lokasi</td>
            <td>Waktu Awal</td>
            <td>Waktu Akhir</td>
            <td>Email</td>
            <td>Pilihan</td>
        </thead>
        <tbody>
      <?php
          $sql = mysqli_query($koneksi, "SELECT * FROM penyelenggara");

          if(mysqli_num_rows($sql) == 0){
            echo '<tr style="text-align:center;"><td colspan="8">Empty</td></tr>';
          }
          else{
         
          while($row = mysqli_fetch_assoc($sql)){
            echo '
            <tr>
              <td style="text-align: center">'.$row['id_penyelenggara'].'</td>
              <td style="text-align: center">'.$row['nama_penyelenggara'].'</td>
              <td>'.$row['nama_lomba'].'</td>
              <td style="text-align: center">'.$row['lokasi_lomba'].'</td>
              <td style="text-align: center">'.$row['waktu_awal_lomba'].'</td>
              <td style="text-align: center">'.$row['waktu_akhir_lomba'].'</td>
              <td style="text-align: center">'.$row['email_penyelenggara'].'</td>
              <td style="text-align: center">
                <a href="" title="Edit Data" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                <a href="index.php?aksi=delete&id_penyelenggara='.$row['id_penyelenggara'].'" title="Hapus Data" onclick="return confirm(\'Anda yakin akan menghapus data '.$row['nama_penyelenggara'].'?\')" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
              </td>
            </tr>
            ';
          }
        }
        ?>
      </tbody>
  </table>

      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

    <!-- Page Specific Plugins -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
    <script src="js/morris/chart-data-morris.js"></script>
    <script src="js/tablesorter/jquery.tablesorter.js"></script>
    <script src="js/tablesorter/tables.js"></script>

  </body>
</html>
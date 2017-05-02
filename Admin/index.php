<?php
session_start();

if(empty($_SESSION)){
  header("Location: ../index.php");
}
if ($_SESSION['id_level']!='1') {
  header("Location: ../index.php");
}

?>

<?php
  include("../koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
    <title>Indek Admin</title>
  </head>

  <body>
    <div id="wrapper">
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">SPOTS TURNAMENT</a>
        </div>

        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li class="active"><a href="index.php"><i class="fa fa-dashboard"></i> Confirmasi Penyelenggara</a></li>
            <li><a href="data_penyelenggara.php"><i class="fa fa-bar-chart-o"></i> Data Penyelenggara</a></li>
            <li><a href="tables.html"><i class="fa fa-table"></i> Statistik</a></li>
            <li><a href="ivent.php"><i class="fa fa-edit"></i> Ivent</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['nama_admin']; ?> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                <li class="divider"></li>
                <li><a href="#"><i class="fa fa-power-off"></i> Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div>
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
      <h2>Data Penyelenggara Belum Konfirmasi</h2><br />

      <table class="table table-bordered table-striped">
        <thead style="text-align: center">
            <td>No</td>
            <td>Nama Penyelenggara</td>
            <td>Nama Lomba</td>
            <td>Email</td>
            <td>No Telepon</td>
            <td>Pembayaran</td>
            <td>Pilihan</td>
        </thead>
        <tbody>
      <?php
          $sql = mysqli_query($koneksi, "SELECT * FROM penyelenggara");
          if(mysqli_num_rows($sql) == 0){
            echo '<tr style="text-align:center;"><td colspan="7">Empty</td></tr>';
          }
          else{
            $no = 1;

          while($row = mysqli_fetch_assoc($sql)){
            if ($row['status_penyelenggara']==0) {
              echo '
              <tr>
                <td style="text-align: center">'.$no.'</td>
                <td style="text-align: center">'.$row['nama_penyelenggara'].'</td>
                <td>'.$row['nama_lomba'].'</td>
                <td style="text-align: center">'.$row['email_penyelenggara'].'</td>
                <td style="text-align: center">'.$row['tlp_penyelenggara'].'</td>
                <td style="text-align: center"><img src="../penyelenggara/pembayaran_penyelenggara/'.$row['pembayaran_penyelenggara'].'" style="width:75px; height:60px";/></td>
                <td style="text-align: center">

                  <a href="index.php?aksi=delete&id_penyelenggara='.$row['id_penyelenggara'].'" title="Hapus Data" onclick="return confirm(\'Anda yakin akan menghapus data '.$row['nama_penyelenggara'].'?\')" class="btn btn-danger btn-sm" style="width:90px;">Delete</a>
                  <a href="javascript:void(0)" class="btn btn-sm btn-success" id="konfirmasi" penyelenggaraId="'.$row['id_penyelenggara'].'" onclick="konfirmasi(this);" style="width:90px;">Confirmation</a>

                </td>
              </tr>
              ';
              $no++;
            }
          }
        }
        ?>
      </tbody>
  </table>

  </div>
</div>

<!-- Modal untuk Detail -->
<div class="modal fade" id="ModalDetail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-warning">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Anggota</h4>
      </div>
      <div class="modal-body">
      </div>
    </div>
  </div>
</div>

<!-- Ajax untuk Detail -->
<script type="text/javascript">
    $(document).ready(function (){
        $(".btn-info").click(function (e){
            var m = $(this).attr("id");
            $.ajax({
                url: "detail.php",
                type: "GET",
                data : {id_penyelenggara: m,},
                success: function (ajaxData){
                    $("#ModalDetail").html(ajaxData);
                    $("#ModalDetail").modal('show',{backdrop: 'true'});
                }
            });
        });
    });


</script>

<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
<script src="js/morris/chart-data-morris.js"></script>
<script src="js/tablesorter/jquery.tablesorter.js"></script>
<script src="js/tablesorter/tables.js"></script>

  </body>
</html>

<!-- Modal untuk Konfirmasi -->
<script type="text/javascript">
function konfirmasi(e) {
  var id_penyelenggara = $(e).attr("penyelenggaraId");
  $.ajax({
    url:'konfirmasi.php',
    type:'post',
    data:'id='+id_penyelenggara,
    success:function (data) {
      var dataKonf = jQuery.parseJSON(data);
      if (dataKonf.isSuccess) {
        $("#page-wrapper").load(document.URL + ' #page-wrapper');
      }
      else{
        alert('gagal update db');
      }
    }
  });
}
</script>

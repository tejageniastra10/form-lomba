<?php
  include "../koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Peserta | List Pemain</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
                <a class="navbar-brand" href="sip.php"> Nama Kegiatan | Peserta</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <b class="caret"></b></a>
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
                    <li class="active">
                        <a href="myteam.php"><i class="fa fa-fw fa-plus"></i> Pemain</a>
                    </li>
                    <li>
                        <a href="pembayaran_peserta.php"><i class="fa fa-fw fa-plus"></i> Pembayaran</a>
                    </li>
                    <li>
                        <a href="jadwal.php"><i class="fa fa-fw fa-calendar"></i> Hasil Undian dan Jadwal</a>
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
                            Tambah Anggota tim
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="sip.php">Nama Kegiatan | Peserta</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-plus"></i> Tambah Anggota tim
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <!--isi-->
          <?php
          if(!isset($_GET['fail']))
          {
            echo""; 
          }
          else
          {?>
              <div class="alert alert-danger" role="alert"><b>Gagal Menambah pemain. Hanya dapat mendaftarkan 16 pemain per tim.<b></div> 
    <?php }
        ?>

            <button type="button" data-idtim="<?=$idtim;?>" class="btn btn-primary tambah-record pull-right" data-toggle="modal" data-target="#tambah"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambah anggota</button>
        </div>

        <center>

        <?php if (!isset($_GET['order'])) {
          $kolom = 'id_pemain';
          $order = 'asc';
          }
          else if($_GET['order']=='desc')
          {
            $kolom = 'nama_pemain';
            $order = 'desc';
            } 
          else if($_GET['order']=='asc')
          {
            $kolom = 'nama_pemain';
            $order = 'asc';
            } ?>

          <!-- Table -->
        <table class="responstable">
          <tr>
          <th p align="center" ><b>NAMA</b>
        <?php
        if(!isset($_GET['order']) || $_GET['order']=='desc' )
          {?>
            <a class="pull-right" href="myteam.php?order=asc">
              <span class="glyphicon glyphicon-triangle-top" aria-hidden="true">
              </span></a>
        <?php
          }
          else if($_GET['order']=='asc')
            {?>
            <a class="pull-right" href="myteam.php?order=desc">
              <span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true">
            </a></span>
            <?php
            }
            ?>
          </th>
          <th p align="center" ><b>USIA</b></th>
          <th p align="center" ><b>ACTION</b></th>
          </tr>

          <?php
            $sql  = "SELECT * FROM pemain WHERE id_tim = '$id_tim' ORDER BY $kolom $order";
            $result = mysqli_query($koneksi, $sql);
            while($data = mysqli_fetch_array($result)){ 
          ?>
              <tr>
                <td p align="center" ><b><?php echo $data['nama_pemain'];?></b></td>
                <td p align="center" ><?php echo $data['usia_pemain']; ?></td>
                <td p align="center" >
                <a href="../uploads/<?php echo $data['file']; ?>" target="_blank" class="btn btn-success" role="button">
                <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                  <button type="button" class="btn btn-warning edit-record" data-nama="<?=$data['nama_pemain'];?>" data-usia="<?=$data['usia_pemain'];?>"  data-id_tim="<?=$data['id_tim'];?>" data-id_pemain="<?=$data['id_pemain'];?>" aria-label="Left Align" data-toggle="modal" data-target="#edit">
                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                  </button>
                  <button type="button" class="btn btn-danger hapus-record" data-nama="<?=$data['nama_pemain'];?>" data-idpemain="<?=$data['id_pemain'];?>" aria-label="Left Align">
                    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                  </button>
              </tr>
          <?php
            }
          ?>
        </table>

      </div>
      </center>
  
            </div>

        </div>
            <!-- /.container-fluid -->


        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- Modal tambah -->
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Tambah Anggota</h4>
      </div>
      <div class="modal-body">
      </div>
    </div>
  </div>
</div>

<!-- Modal edit -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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

<!-- Modal hapus -->
<div class="modal fade" id="hapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Hapus Anggota</h4>
      </div>
      <div class="modal-body">
      </div>
    </div>
  </div>
</div>


    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!--AJAX edit-->
     <script>
        $(function(){
            $(document).on('click','.edit-record',function(e){
                $("#edit").modal('show');
                $.post('modaledit.php',
                    { nama:$(this).attr('data-nama'),
                      usia:$(this).attr('data-usia'),
                      idtim:$(this).attr('data-id_tim'),
                      idpemain:$(this).attr('data-id_pemain')}, 
                    function(html){
                        $(".modal-body").html(html);
                    }   
                );
            });
        });
    </script>
    <!--AJAX hapus-->
    <script>
        $(function(){
            $(document).on('click','.hapus-record',function(e){
                $("#hapus").modal('show');
                $.post('modalhapus.php',
                    { nama:$(this).attr('data-nama'),
                      idpemain:$(this).attr('data-id_pemain')}, 
                    function(html){
                        $(".modal-body").html(html);
                    }   
                );
            });
        });
    </script>
    <!--AJAX tambah-->
    <script>
        $(function(){
            $(document).on('click','.tambah-record',function(e){
                $("#tambah").modal('show');
                $.post('modaltambah.php',
                    {idtim:$(this).attr('data-id_tim')}, 
                    function(html){
                        $(".modal-body").html(html);
                    }   
                );
            });
        });
    </script>

</body>

</html>

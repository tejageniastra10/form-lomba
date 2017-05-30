
<?php
  include("session.php");
  include("../koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Peserta | Home </title>

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
  background-color: #167F92;
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
                <a class="navbar-brand" href="index.php">Nama Kegiatan | Peserta</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <b><?php echo $_SESSION['nama_tim']; ?></b> <i class="fa fa-user"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="index.php"><i class="fa fa-fw fa-user"></i> Homepage</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="../user/index.php"><i class="fa fa-fw fa-power-off"></i> kembali</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li  class="active">
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Home</a>
                    </li>
                     <li>
                        <a href="pengumuman_peserta.php"><i class="fa fa-fw fa-list"></i> Pengumuman</a>
                    </li>
                    <li>
                        <a href="myteam.php"><i class="fa fa-fw fa-plus"></i> Pemain</a>
                    </li>
                    <li>
                        <a href="jadwal.php"><i class="fa fa-fw fa-calendar"></i> Jadwal</a>
                    </li>
                    <li>
                        <a href="statistik_peserta.php"><i class="fa fa-fw fa-calendar"></i> Statistik</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="index.php">Home</a>
                        </li>
                    </ol>
                </div>
          <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" <?php echo 'src=foto/'.$_SESSION['foto'].' '?> style="width:300px;height:300px" alt="User profile picture">
              <h3 class="profile-username text-center"><?php echo $_SESSION['nama_tim']; ?></h3>
              <p class="text-muted text-center">USER</p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

          <!-- About Me Box -->
          <div class="col-md-6">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Profil Peserta</h3>
              </div>
              <?php 
                            $sql = mysqli_query($koneksi, "SELECT * FROM tim WHERE id_tim='$id_tim'");
                            $row = mysqli_fetch_assoc($sql);

            
              ?>
              <!-- /.box-header -->
              <div class="box-body">
               <strong><i class="fa fa-user margin-r-5"></i> Nama </strong>
                <p >
                </p>
                <p class="text-muted">
                 <?php echo $row['nama_tim'];  ?>
                </p>

                <hr>

                <strong><i class="fa fa-map-marker margin-r-5"></i> Alamat  </strong>
                <p >
                </p>
                <p class="text-muted">
                  <?php echo $row['alamat_tim'];  ?>
                </p>

              <hr>

              <strong><i class="fa fa-user margin-r-5"></i> Penanggung Jawab</strong>
              <p >
              </p>
              <p class="text-muted"><?php echo $row['penanggung_jawab'];  ?></p>

              <hr>

              <strong><i class="fa  fa-envelope-o margin-r-5"></i> Email</strong>
              <p >
              </p>
              <p class="text-muted"><?php echo $row['email_tim'];  ?></p>
              <hr>
              <strong><i class="fa fa-phone margin-r-5"></i> No Telepon</strong>
              <p >
              </p>
              <p class="text-muted"><?php echo $row['tlp_tim'];  ?></p>
              <hr>
              <strong><i class="fa fa-user margin-r-5"></i> Jumlah Pemain</strong>
              <p >
              </p>
              <p class="text-muted"><?php echo $row['jml_pemain'];  ?></p>


              <div class="box-body">
                  <a href="#" id="edit" class="btn btn-primary btn-block"><b>Edit Profil</b></a> 
                  
              </div>  
            </div>
            <!-- /.box-body -->
           
          </div>
          <!-- /.box -->
          </div>

            </div>

        </div>
       
  
           
        </div>
            <!-- /.container-fluid -->


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <div class="container">

  <div class="modal fade" id="Modal-edit-profil" role="dialog">
    <div class="modal-dialog">
    
      <div class="modal-content">
        <div class="modal-header" style="background: #00cc00; padding:25px 30px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 style="color: white" ><center><b>Edit Profil</b></center></h2>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form id="form_edit_tim" class="form-horizontal" action="proses-edit-profil.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
              <label > Nama</label>
              <input type="text" class="form-control" name="nama_tim" value="<?php echo $row ['nama_tim']; ?>" placeholder="Masukan Nama Tim">
            </div>
            <div class="form-group">
              <label >  alamat</label>
              <input type="text" class="form-control" name="alamat_tim" value="<?php echo $row ['alamat_tim']; ?>" placeholder="Masukan Alamat Tim">
            </div>
             <div class="form-group">
              <label > Penanggung Jawab</label>
              <input type="text" class="form-control" name="penanggung_jawab" value="<?php echo $row ['penanggung_jawab']; ?>" placeholder="Masukan Nama Penanggung Jawab">
            </div>
            <div class="form-group">
              <label >  Email</label>
              <input type="text" class="form-control" name="email_tim" value="<?php echo $row ['email_tim']; ?>" placeholder="Masukan Email Tim">
            </div>
            <div class="form-group">
              <label >  No.telephone</label>
              <input type="text" class="form-control" name="tlp_tim" value="<?php echo $row ['tlp_tim']; ?>" placeholder="Masukan No Telp">
            </div>
            <div class="form-group">
              <label >  Jumlah Pemain</label>
              <input type="text" class="form-control" name="jml_pemain" value="<?php echo $row ['jml_pemain']; ?>" placeholder="Masukan Jumlah Pemain">
            </div>
            <div class="form-group">
              <label >  Foto</label>
                <input type="file" name="foto" class="form-control" placeholder="foto" required>
            </div>
             
            
            
              <button  style="background: #00cc00"   type="submit" name="edit-tim" value="Simpan" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> simpan</button>
          </form>
        </div>     
      </div>
    </div>
  </div> 

 </div>



<!---script edit-->
<script>
$(document).ready(function(){
    $("#edit").click(function(){
        $("#Modal-edit-profil").modal();
    });
});
</script>

    <link rel="stylesheet" href="js/bootstrapValidator.css">  
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrapValidator.js"></script>

<script type="text/javascript">
            $(document).ready(function() {
                $('#form_edit_tim')
                    .bootstrapValidator({
                        
                        feedbackIcons: {
                            valid: 'glyphicon glyphicon-ok',
                            invalid: 'glyphicon glyphicon-remove',
                            validating: 'glyphicon glyphicon-refresh'
                        },
                        fields: {
                            nama_tim: {
                               
                                validators: {
                                    notEmpty: {
                                        message: 'Nama  tidak boleh kosong'
                                    },
                                    
                                }
                            },
                            
                            
                            email_tim: {
                               
                                validators: {
                                    notEmpty: {
                                        message: 'email tidak boleh kosong'
                                    }, 
                                    regexp: {
                                regexp: /^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z]{2,4}$/,
                                message: 'format email salah'
                            },
                                }
                            },
                            tlp_tim: {
                               
                                validators: {
                                    notEmpty: {
                                        message: 'no telephone tidak boleh kosong'
                                    },
                                    stringLength: {
                                max: 11,
                                message: 'maksimal 11 karakter'
                            },
                            regexp: {
                                regexp: /^[a-zA-Z0-9_]+$/,
                                message: 'karakter tidak valid'
                            },
                             regexp: {
                                regexp: /^[0-9]/,
                                message: 'harus berupa angka'
                            }
                                    
                                }
                            }, 
                            penanggung_jawab: {
                               
                                validators: {
                                    notEmpty: {
                                        message: 'Penanggung Jawab tidak boleh kosong'
                                    },
                                    
                                }
                            },
                            jml_pemain: {
                               
                                validators: {
                                    notEmpty: {
                                        message: 'jumlah pemain tidak boleh kosong'
                                    },
                                    stringLength: {
                                max: 11,
                                message: 'maksimal 2karakter'
                            },
                            regexp: {
                                regexp: /^[a-zA-Z0-9_]+$/,
                                message: 'karakter tidak valid'
                            },
                             regexp: {
                                regexp: /^[0-9]/,
                                message: 'harus berupa angka'
                            }
                                    
                                }
                            }, 
                            alamat_tim: {
                               
                                validators: {
                                    notEmpty: {
                                        message: 'alamat tidak boleh kosong'
                                    },
                                    
                                }
                            },
                            
                        }
                    });
                });
        </script>
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

</body>

</html>

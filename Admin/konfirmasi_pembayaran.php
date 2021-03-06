<?php
  include("../koneksi.php");
?>

<?php
 session_start();
 if (empty($_SESSION['username'])) {
    header("location:../login-admin.php"); // jika belum login, maka dikembalikan ke file form_login.php
 }
 else {
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="assets/template/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="assets/template/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="assets/template/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- DATA TABLES -->
        <link href="assets/template/css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="assets/template/css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="../../index.html" class="logo">
                Admin
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation" style="background-color: #20B2AA !important;">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right" style="background-color: #20B2AA !important;">
                    <ul class="nav navbar-nav">
                        <!-- Notifications: style can be found in dropdown.less -->
                        
                       
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span><?php echo $_SESSION['username'] ?> <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="assets/template/img/avatar3.png" class="img-circle" alt="User Image" />
                                    <p>
                                        Jane Doe - Web Developer
                                        <small>Member since Nov. 2012</small>
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">                
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="assets/template/img/avatar3.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Hello, <?php echo $_SESSION['username'] ?> </p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li>
                            <a href="index.php">
                                <i class="fa fa-dashboard"></i> <span>Konfirmasi Penyelenggara</span>
                            </a>
                        </li>
                        
                         <li class="active">
                            <a href="konfirmasi_pembayaran.php">
                                <i class="fa fa-dashboard"></i> <span>Konfirmasi Pembayaran</span>
                            </a>
                        </li>

                        <li>
                            <a href="data_penyelenggara.php">
                                <i class="fa fa-dashboard"></i> <span>Data penyelenggara</span>
                            </a>
                        </li>

                        <li>
                            <a href="data_user.php">
                                <i class="fa fa-dashboard"></i> <span>Data User</span>
                            </a>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>





            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Data Penyelenggara
                        <small>Konfirmasi Penyelenggara</small>
                    </h1>
                </section>

                <!-- Main content -->
               
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                               <br />
                                <div class="box-body table-responsive">
                                 <div id="wrapper">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr style="background-color: #20B2AA; color: #fff;">
                                                <th style="width: 30px; text-align: center;">No</th>
                                                <th style="text-align: center;">Nama Penyelenggara</th>
                                                <th style="width: 200px; text-align: center;">Nama Lomba</th>
                                                <th style="width: 200px; text-align: center;">E-Mail</th>
                                                <th style="width: 150px; text-align: center;">Foto Slip Pembayaran</th>
                                                <th style="width: 100px; text-align: center;">Pilihan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php
                                              $sql = mysqli_query($koneksi, "SELECT * FROM penyelenggara");

                                                $no = 1;

                                              while($row = mysqli_fetch_assoc($sql)){
                                                if ($row['status_penyelenggara']==2) { ?>
                                            <tr>
                                                <td style="text-align: center;"><?php echo $no ?></td>
                                                <td><?php echo $row['nama_penyelenggara'] ?></td>
                                                <td style="text-align: center;"><?php echo $row['nama_lomba'] ?></td>
                                                <td style="text-align: center;"><?php echo $row['email_penyelenggara'] ?></td>
                                                <td style="text-align: center;"><a href="../user/proses/pembayaran/<?php echo $row['pembayaran_penyelenggara'] ?>" target="_blank">Slip Pembayara</a></td>
                                                <td style="text-align: center;">

                                                   <a href="javascript:void(0)" class="btn btn-sm btn-info" id="konfirmasi" penyelenggaraId="<?php echo $row['id_penyelenggara'] ?>" onclick="konfirmasi(this);" style="width:40px; height: 34px;"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></a>
                                                    <button type="button" class="btn btn-danger hapus-record" data-nama="<?=$row['nama_penyelenggara'];?>" data-id_penyelenggara="<?=$row['id_penyelenggara'];?>" aria-label="Left Align">
                                                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                                    </button>
                                                </td>
                                                
                                            </tr>

                                            <?php
                                                
                                            }
                                            $no++;
                                        }


                                            ?>
                                            
                                        </tbody>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>
                     </div>
                </section><!-- /.content -->
               
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
       
        <!-- Modal hapus -->
        <div class="modal fade" id="hapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header bg-danger">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Hapus Penyelenggara</h4>
              </div>
              <div class="modal-body">
              </div>
            </div>
          </div>
        </div>

        <!--AJAX hapus-->
        <script>
            $(function(){
                $(document).on('click','.hapus-record',function(e){
                    $("#hapus").modal('show');
                    $.post('modaldelete.php',
                        { nama_penyelenggara:$(this).attr('data-nama'),
                          id_penyelenggara:$(this).attr('data-id_penyelenggara')}, 
                        function(html){
                            $(".modal-body").html(html);
                        }   
                    );
                });
            });
        </script>


         
        <!-- Bootstrap -->
        <script src="assets/template/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- DATA TABES SCRIPT -->
        <script src="assets/template/js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="assets/template/js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="assets/template/js/AdminLTE/app.js" type="text/javascript"></script>

        <!-- page script -->
        <script type="text/javascript">
            $(function() {
                $("#example1").dataTable();
                $('#example2').dataTable({
                    "bPaginate": true,
                    "bLengthChange": false,
                    "bFilter": false,
                    "bSort": true,
                    "bInfo": true,
                    "bAutoWidth": false
                });
            });
        </script>

    </body>
</html>



<!-- Modal untuk Konfirmasi -->
<script type="text/javascript">
function konfirmasi(e) {
  var id_penyelenggara = $(e).attr("penyelenggaraId");
  $.ajax({
    url:'proses_konfirmasi_pembayaran.php',
    type:'post',
    data:'id='+id_penyelenggara,
    success:function (data) {
      var dataKonf = jQuery.parseJSON(data);
      if (dataKonf.isSuccess) {
        $("#example1").load(document.URL + ' #example1');
      }
      else{
        alert('gagal update db');
      }
    }
  });
}
</script>

<?php } ?>
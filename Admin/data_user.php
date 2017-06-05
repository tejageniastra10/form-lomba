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
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-warning"></i>
                                <span class="label label-warning">10</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 10 notifications</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-people info"></i> 5 new members joined today
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-warning danger"></i> Very long description here that may not fit into the page and may cause design problems
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users warning"></i> 5 new members joined
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-cart success"></i> 25 sales made
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-person danger"></i> You changed your username
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">View all</a></li>
                            </ul>
                        </li>
                       
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
                        
                         <li>
                            <a href="konfirmasi_pembayaran.php">
                                <i class="fa fa-dashboard"></i> <span>Konfirmasi Pembayaran</span>
                            </a>
                        </li>

                        <li>
                            <a href="data_penyelenggara.php">
                                <i class="fa fa-dashboard"></i> <span>Data penyelenggara</span>
                            </a>
                        </li>

                        <li class="active">
                            <a href="../../index.html">
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
                        Data User
                        <small>Data User</small>
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
                                                <th style="text-align: center;">Nama</th>
                                                <th style="width: 200px; text-align: center;">Email</th>
                                                <th style="width: 200px; text-align: center;">No Telepon</th>
                                                <th style="width: 150px; text-align: center;">Alamat</th>
                                                <th style="width: 100px; text-align: center;">Pilihan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php
                                              $sql = mysqli_query($koneksi, "SELECT * FROM user");
                                                $no = 1;

                                              while($row = mysqli_fetch_assoc($sql)){
                                               ?>
                                            <tr>
                                                <td style="text-align: center;"><?php echo $no ?></td>
                                                <td><?php echo $row['nama_user'] ?></td>
                                                <td style="text-align: center;"><?php echo $row['email_user'] ?></td>
                                                <td style="text-align: center;"><?php echo $row['tlp_user'] ?></td>
                                                <td style="text-align: center;"><?php echo $row['alamat_user'] ?></td>
                                                <td style="text-align: center;">

                                                   <a href="#" id="<?php echo $row['id_user'] ?>" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                                                    <button type="button" class="btn btn-danger hapus-record" data-nama="<?=$row['nama_user'];?>" data-id_user="<?=$row['id_user'];?>" aria-label="Left Align">
                                                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                                    </button>
                                                </td>
                                                
                                            </tr>

                                            <?php
                                                
                                            
                                        }

                                            ?>
                                            
                                        </tbody>
                                    </table>


                                    <div id="convert">
                                        <div class="table-responsive">
                                          <div id="live_data">
                                            <form action="excel.php" method="post">
                                              <input type="submit" name="export_excel" class="btn btn-success" value="Export to Excel" />
                                            </form>
                                          </div>
                                        </div>
                                    </div>




                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>
                     </div>
                <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>

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
                            $.post('modaldelete_user.php',
                                { nama_user:$(this).attr('data-nama'),
                                  id_user:$(this).attr('data-id_user')}, 
                                function(html){
                                    $(".modal-body").html(html);
                                }   
                            );
                        });
                    });
                </script>
                </section><!-- /.content -->
               
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

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

<script type="text/javascript">
        $(document).ready(function (){
            $(".btn-info").click(function (e){
                var m = $(this).attr("id");
                $.ajax({
                    url: "detail_user.php",
                    type: "GET",
                    data : {id_user: m,},
                    success: function (ajaxData){
                        $("#ModalDetail").html(ajaxData);
                        $("#ModalDetail").modal('show',{backdrop: 'true'});
                    }
                });
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
    </body>
</html>

<?php } ?>


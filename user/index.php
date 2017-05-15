<?php include("header.php")  ?>
      <ul class="sidebar-menu">
        <li class="header">MENU</li>
        <li class="active treeview">
          <a href="index.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            
          </a>
          
        </li>
        <li class="treeview">
          <a href="info-lomba.php">
            <i class="fa fa-bullhorn"></i>
            <span>Info Lomba</span>
            
          </a>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa  fa-book"></i>
            <span>Kegiatan Saya</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/charts/morris.html"><i class="fa fa-users"></i> Penyelenggaraan saya</a></li>
            <li><a href="pages/charts/flot.html"><i class="fa fa-futbol-o"></i>Perlombaan Saya</a></li>
            <li><a href="pages/charts/inline.html"><i class="fa  fa-history"></i> Riwayat Kegiatan</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>150</h3>

              <p>Penyelenggaraan saya</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="#" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>

              <p>Lomba Saya</p>
            </div>
            <div class="icon">
              <i class="fa  fa-soccer-ball-o"></i>
            </div>
            <a href="#" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>44</h3>

              <p>Konfirmasi kegiatan</p>
            </div>
            <div class="icon">
              <i class="fa fa-refresh"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>65</h3>

              <p>Konfirmasi Pembayaran</p>
            </div>
            <div class="icon">
              <i class="fa fa-money"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

         <!-- Profile Image -->
          <div class="col-md-6">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="gambar/kim.png" alt="User profile picture">

              <h3 class="profile-username text-center"><?php echo $_SESSION['nama_user']; ?></h3>

              <p class="text-muted text-center">Teknik INformatika</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Penyelenggaraan saya</b><a class="pull-right">1,322</a>
                </li>
                <li class="list-group-item">
                  <b>Perlombaan saya</b> <a class="pull-right">543</a>
                </li>
                <li class="list-group-item">
                  <b>Menunggu konfirmasi kegiatan</b> <a class="pull-right">13,287</a>
                </li>
                <li class="list-group-item">
                  <b>Menunggu konfirmasi pembayaran</b> <a class="pull-right">13,287</a>
                </li>
              </ul>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          </div>

          <!-- About Me Box -->
          <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Profil saya</h3>
            </div>
            <?php 
                            $username_user=$_SESSION['username_user'];
                            $sql = mysqli_query($koneksi, "SELECT * FROM user WHERE username_user='$username_user'");
                            $row = mysqli_fetch_assoc($sql);

            
            ?>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-user margin-r-5"></i> Nama </strong>
              <p >
              </p>
              <p class="text-muted">
                <?php echo $row['nama_user'];  ?>
              </p>

              <hr>

              <strong><i class="fa fa-home margin-r-5"></i> Username </strong>
              <p >
              </p>
              <p class="text-muted">
                <?php echo $row['username_user'];  ?>
              </p>

              <hr>

              <strong><i class="fa  fa-envelope-o margin-r-5"></i> Email</strong>
              <p >
              </p>
              <p class="text-muted"><?php echo $row['email_user'];  ?></p>

              <hr>

              <strong><i class="fa fa-phone margin-r-5"></i> No.Telephone</strong>
              <p >
              </p>
              <p class="text-muted"><?php echo $row['tlp_user'];  ?></p>
              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i>Alamat</strong>

              <p><?php echo $row['alamat_user'];  ?></p>


              <div class="box-body">
                  <a href="#" id="edit" class="btn btn-primary btn-block"><b>Edit Profil</b></a> 
                  
                   </div>  
            </div>
            <!-- /.box-body -->
           
          </div>
          <!-- /.box -->
          </div>




    </div>
     


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    
    <strong>Copyright &copy; 2017 <a href="#">Aliansi Team</a>.</strong> All rights
    reserved.
  </footer>

 
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->



<!-- jQuery -->
  <script src="js/jquery.min.js"></script>

  <?php
        $id_user = $_SESSION['id_user'];
        $sql = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user='$id_user'");
        $row = mysqli_fetch_assoc($sql);
        ?>

<!-- Modal edit user  -->
 <div class="container">

  <div class="modal fade" id="Modal-edit-profil" role="dialog">
    <div class="modal-dialog">
    
      <div class="modal-content">
        <div class="modal-header" style="background: #00cc00; padding:25px 30px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 style="color: white" ><center><b>Edit Profil</b></center></h2>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form id="form_edit_user" class="form-horizontal" action="proses-edit-profil.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
              <label ><span class="glyphicon glyphicon-home"></span>  Nama</label>
              <input type="text" class="form-control" name="nama_user" value="<?php echo $row ['nama_user']; ?>" placeholder="Masukan Nama Penyelenggara">
            </div>
            <div class="form-group">
              <label ><span class="glyphicon glyphicon-envelope"></span>  Email</label>
              <input type="text" class="form-control" name="email_user" value="<?php echo $row ['email_user']; ?>" placeholder="masukan nama lomba">
            </div>
            <div class="form-group">
              <label ><span class="glyphicon glyphicon-phone-alt"></span>  No.telephone</label>
              <input type="text" class="form-control" name="tlp_user" value="<?php echo $row ['tlp_user']; ?>" placeholder="masukan nama lomba">
            </div>
            <div class="form-group">
              <label ><span class="glyphicon glyphicon-send"></span>  alamat</label>
              <input type="text" class="form-control" name="alamat_user" value="<?php echo $row ['alamat_user']; ?>" placeholder="masukan lokasi lomba">
            </div>
             <div  class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" name="username_user" value="<?php echo $row ['username_user']; ?>" placeholder="Enter username" readonly>
            </div>
            <div  class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Password</label>
              <input type="password" class="form-control" name="password_user"  placeholder="Enter password" >
            </div>
            
            
          
          
            
              <button  style="background: #00cc00"  type="submit"  type="submit" name="edit-user" value="Simpan" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> simpan</button>
          </form>
        </div>     
      </div>
    </div>
  </div> 

 </div>



<!---script daftar-->
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
                $('#form_edit_user')
                    .bootstrapValidator({
                        
                        feedbackIcons: {
                            valid: 'glyphicon glyphicon-ok',
                            invalid: 'glyphicon glyphicon-remove',
                            validating: 'glyphicon glyphicon-refresh'
                        },
                        fields: {
                            nama_user: {
                               
                                validators: {
                                    notEmpty: {
                                        message: 'Nama  tidak boleh kosong'
                                    },
                                    
                                }
                            },
                            
                            
                            email_user: {
                               
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
                            tlp_user: {
                               
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
                            username_user: {
                               
                                validators: {
                                    notEmpty: {
                                        message: 'username tidak boleh kosong'
                                    },
                                    
                                }
                            },
                            password_user: {
                               
                                validators: {
                                    notEmpty: {
                                        message: 'password tidak boleh kosong'
                                    },
                                    
                                }
                            },
                            alamat_user: {
                               
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


<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
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

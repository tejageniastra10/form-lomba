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
            <i class="fa fa-users"></i>
            <span>Penyelenggaraan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="status-penyelenggaraan.php"><i class="fa fa-hourglass-2"></i> Status Penyelenggaraan saya</a></li>
            <li><a href="penyelenggara-saya.php"><i class="fa fa-bar-chart"></i>Penyelenggaraan Saya</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-futbol-o"></i>
            <span>Lomba</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="status-lomba.php"><i class="fa fa-hourglass-1"></i> Status Lomba saya</a></li>
            <li><a href="lomba-saya.php"><i class="fa fa-area-chart"></i>Lomba Saya</a></li>
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
<div id="loading"></div>

  


    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3> <?php echo $_SESSION['jml_penyelenggara']; ?> </h3>

              <p>Penyelenggaraan saya</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="penyelenggara-saya.php" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3> <?php echo $_SESSION['jml_tim'];  ?> </h3>

              <p>Lomba Saya</p>
            </div>
            <div class="icon">
              <i class="fa  fa-soccer-ball-o"></i>
            </div>
            <a href="lomba-saya.php" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>Konfirmasi</h3>

              <p>Kegiatan</p>
            </div>
            <div class="icon">
              <i class="fa fa-refresh"></i>
            </div>
            <a href="status-penyelenggaraan.php" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        

         <!-- Profile Image -->
          <div class="col-md-6">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" <?php echo 'src=foto/'.$_SESSION['foto'].' '?> style="width:300px;height:300px" alt="User profile picture">

              <h3 class="profile-username text-center"><?php echo $_SESSION['nama_user']; ?></h3>

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

 


<!-- jQuery -->
  <script src="js/jquery.min.js"></script>

  <script type="text/javascript">
  $(window).load(function() { $("#loading").fadeOut(3000); })
</script>

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
              <label > Nama</label>
              <input type="text" class="form-control" name="nama_user" value="<?php echo $row ['nama_user']; ?>" placeholder="Masukan Nama Penyelenggara">
            </div>
            <div class="form-group">
              <label >  Email</label>
              <input type="text" class="form-control" name="email_user" value="<?php echo $row ['email_user']; ?>" placeholder="masukan nama lomba">
            </div>
            <div class="form-group">
              <label >  No.telephone</label>
              <input type="text" class="form-control" name="tlp_user" value="<?php echo $row ['tlp_user']; ?>" placeholder="masukan nama lomba">
            </div>
            <div class="form-group">
              <label >  alamat</label>
              <input type="text" class="form-control" name="alamat_user" value="<?php echo $row ['alamat_user']; ?>" placeholder="masukan lokasi lomba">
            </div>
            <div class="form-group">
              <label >  Foto</label>
                <input type="file" name="foto" class="form-control" placeholder="foto" >
            </div>
             <div  class="form-group">
              <label for="usrname"> Username</label>
              <input type="text" class="form-control" name="username_user" value="<?php echo $row ['username_user']; ?>" placeholder="Enter username" readonly>
            </div>
            <div  class="form-group">
              <label for="usrname"> Password</label>
              <input type="password" class="form-control" name="password_user"  placeholder="Enter password" >
            </div>
            
            
          
          
            
              <button  style="background: #00cc00"   type="submit" name="edit-user" value="Simpan" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> simpan</button>
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

<?php include("scrip/footer.php")  ?>

</body>
</html>

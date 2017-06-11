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
              <h3><?=$_SESSION['menunggu_konfirmasi']?> Menunggu </h3>

              <p>Konfirmasi Penyelenggaraan Lomba</p>
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
  $(window).load(function() { $("#loading").fadeOut(2300); })
</script>

  <?php
        $id_user = $_SESSION['id_user'];
        $sql = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user='$id_user'");
        $row = mysqli_fetch_assoc($sql);
        ?>




    
<?php include("modal/modal-edit-profil.php")  ?>
<?php include("alret-logout.php")  ?>

<!---script edit-->
<script>
$(document).ready(function(){
    $("#edit").click(function(){
        $("#Modal-edit-profil").modal();
    });
});
</script>

    
<?php include("scrip/validasi_edit_user.php")  ?>
<?php include("scrip/footer.php")  ?>

</body>
</html>

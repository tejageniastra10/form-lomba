
<?php
  
  include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>

<style>
  h3{
    color: white;
  }

</style> 
    
    
  </head>

  <body>

  <section id="container" >
      
      <!--sidebar start-->
      <aside>
          <div  id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <p class="centered"><a href="#">
                            <?php 
                            $id_penyelenggara=$_SESSION['id_penyelenggara'];
                            $sql = mysqli_query($koneksi, "SELECT * FROM penyelenggara WHERE id_penyelenggara=$id_penyelenggara");
                            $row = mysqli_fetch_assoc($sql);

            echo '<img src=logo/'.$row['logo'].' class="img-circle" height="60px" width="60px">';
            ?></a></p>
                  <h5 class="centered"><?php echo $_SESSION['nama_lomba']; ?></h5> 
                    
                  <li class="mt">
                      <a class="active"  href="index.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Data Tim</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="tim-belum-dikonfirmasi.php">Data Tim Terdaftar</a></li>
                          <li><a  href="buttons.html">Data Tim Terkonfirmasi</a></li>
                          
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Components</span>
                      </a>
                     
                  </li>
                  

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
                    

        <div class="panel panel-info">
           <h1 style="text-transform: uppercase;color: white;text-align: center;">  XXXXXXXXX</h1>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-4 col-lg-4 " align="center"> 

                <?php 
                            $id_penyelenggara=$_SESSION['id_penyelenggara'];
                            $sql = mysqli_query($koneksi, "SELECT * FROM penyelenggara WHERE id_penyelenggara=$id_penyelenggara");
                            $row = mysqli_fetch_assoc($sql);

            echo '<img src=logo/'.$row['logo'].' width="348px" height="335px">';
            ?>  
                </div>
                
                <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                  <dl>
                    <dt>DEPARTMENT:</dt>
                    <dd>Administrator</dd>
                    <dt>HIRE DATE</dt>
                    <dd>11/12/2013</dd>
                    <dt>DATE OF BIRTH</dt>
                       <dd>11/12/2013</dd>
                    <dt>GENDER</dt>
                    <dd>Male</dd>
                  </dl>
                </div>-->
        <?php
          $id_penyelenggara = $_SESSION['id_penyelenggara'];
          $sql = mysqli_query($koneksi, "SELECT * FROM penyelenggara where id_penyelenggara='$id_penyelenggara' ");
          

          if(mysqli_num_rows($sql) == 0){
            echo '<tr style="text-align:center;"><td colspan="7">Empty</td></tr>';
          }
          else{
            $row = mysqli_fetch_assoc($sql);

            ?>
                          <div class=" col-md-9 col-lg-8 "> 
                            <table class="table table-user-information">
                              <tbody>
                                <tr>
                                  <td><b>Nama Lomba</b></td>
                                  <td><?php echo $row['nama_lomba']; ?></td>
                                </tr>
                                <tr>
                                  <td><b>Penyelenggara</b></td>
                                  <td><?php echo $row['nama_penyelenggara']; ?></td>
                                </tr>
                                <tr>
                                  <td><b>Lokasi</b> </td>
                                  <td><?php echo $row['lokasi_lomba']; ?></td>
                                </tr>
                                <tr>
                                   <td><b>Waktu Mulai</b> </td>
                                  <td><?php echo $row['waktu_awal_lomba']; ?></td>
                                </tr>
                                <tr>
                                     <td><b>Waktu Selesai</b> </td>
                                  <td><?php echo $row['waktu_akhir_lomba']; ?></td>
                                </tr>
                                <tr>                                  
                                   <td><b>Email</b> </td>
                                  <td><?php echo $row['email_penyelenggara']; ?></td>
                                </tr>
                                <tr>
                                   <td><b>No HP</b> </td>
                                  <td><?php echo $row['tlp_penyelenggara']; ?></td>
                                </tr>
                                 
                                </tbody>
                            </table>
                         

                         <?php }

                         ?>   
                            
                            
                            <a href="#" id="edit-penyelenggara" class="btn btn-primary">edit profil</a>
                             <a href="#" id="logo" class="btn btn-warning">ganti logo</a>
                            
                            
              </div>
            </div> 
          </div>
        </div>
                  
          </section>
      </section>           
      
  </section>


    <?php
        $id_penyelenggara = $_SESSION['id_penyelenggara'];
        $sql = mysqli_query($koneksi, "SELECT * FROM penyelenggara WHERE id_penyelenggara='$id_penyelenggara'");
        if(mysqli_num_rows($sql) == 0)
        {
          echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data tidak ditemukan!!</div>';
        }
        else
        {
          $row = mysqli_fetch_assoc($sql);
        }
        if(isset($_POST['edit']))
        {
          
          $nama_penyelenggara       = $_POST['nama_penyelenggara'];
          $nama_lomba               = $_POST['nama_lomba'];
          $lokasi_lomba             = $_POST['lokasi_lomba'];
          $waktu_awal_lomba         = $_POST['waktu_awal_lomba'];
          $waktu_akhir_lomba        = $_POST['waktu_akhir_lomba'];
          $email_penyelenggara      = $_POST['email_penyelenggara'];
          $tlp_penyelenggara        = $_POST['tlp_penyelenggara'];
         
          

          

          
            $update = mysqli_query($koneksi, "UPDATE penyelenggara SET nama_penyelenggara='$nama_penyelenggara', nama_lomba='$nama_lomba', lokasi_lomba='$lokasi_lomba', waktu_awal_lomba='$waktu_akhir_lomba', email_penyelenggara='$email_penyelenggara',tlp_penyelenggara='$tlp_penyelenggara' WHERE id_penyelenggara='$id_penyelenggara'") or die (mysqli_error());

          if($update)
          {
            
            echo "<script>
              alert('data berhasil di edit ');
              window.location.href='index.php';
              </script>";

                }
          else
          {
            echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data gagal disimpan, silahkan coba lagi.</div>';
          }
          
        }
        
      ?>

    <!-- Modal edit penyelenggara -->
  <div class="modal fade" id="Modal-penelenggara" role="dialog">
    <div class="modal-dialog">
    
      <div class="modal-content">
        <div class="modal-header" style="background: green; color: white; padding:30px 40px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 align="center"><b> Edit Penyelenggara</b></h2>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form id="form_edit_penyelenggara" class="form-horizontal" action="" method="post" enctype="multipart/form-data">
          <div class="form-group">
              <label ><span class="glyphicon glyphicon-home"></span>  Nama Penyelenggara</label>
              <input type="text" class="form-control" value="<?php echo $row ['nama_penyelenggara']; ?>" name="nama_penyelenggara" placeholder="Masukan Nama Penyelenggara">
            </div>
            <div class="form-group">
              <label ><span class="glyphicon glyphicon-file"></span>  Nama Lomba</label>
              <input type="text" class="form-control" value="<?php echo $row ['nama_lomba']; ?>" name="nama_lomba" readonly>
            </div>
            <div class="form-group">
              <label ><span class="glyphicon glyphicon-send"></span>  lokasi Lomba</label>
              <input type="text" class="form-control" value="<?php echo $row ['lokasi_lomba']; ?>" name="lokasi_lomba" placeholder="masukan lokasi lomba">
            </div>
            <div class="form-group">
              <label ><span class="glyphicon glyphicon-calendar"></span>  Waktu Awal Lomba</label>
              <input type="date" class="form-control" value="<?php echo $row ['waktu_awal_lomba']; ?>" name="waktu_awal_lomba" placeholder="masukan waktu" required>
            </div>
            <div class="form-group">
              <label ><span class="glyphicon glyphicon-calendar"></span>  Waktu Akhir Lomba</label>
              <input type="date" class="form-control" value="<?php echo $row ['waktu_akhir_lomba']; ?>" name="waktu_akhir_lomba" placeholder="masukan waktu" required>
            </div>

            <div class="form-group">
              <label ><span class="glyphicon glyphicon-envelope"></span> Email</label>
              <input type="text" class="form-control" value="<?php echo $row ['email_penyelenggara']; ?>" name="email_penyelenggara" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-phone-alt"></span> No. Telepon</label>
              <input type="text" class="form-control" value="<?php echo $row ['tlp_penyelenggara']; ?>" name="tlp_penyelenggara" placeholder="masukan no hp">
            </div>
            
           
           
            
            
          
            
              <button type="submit" href="index.php" type="submit" name="edit" value="Simpan" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Simpan</button>
          </form>
        </div>     
      </div>
    </div>
  </div> 


<?php
        if(isset($_POST['ganti_logo']))
        {
          
          $logo = $_FILES['logo']['name'];
          $tmp = $_FILES['logo']['tmp_name'];
          $fotobaru = date('dmYHis').$logo;
          $path = "logo/".$fotobaru;
          $id_penyelenggara=$_SESSION['id_penyelenggara'];

          

          
        if(move_uploaded_file($tmp, $path)){
          
         $update = mysqli_query($koneksi, "UPDATE penyelenggara set logo='$fotobaru' WHERE id_penyelenggara='$id_penyelenggara'") or die(mysqli_error($koneksi));
              if($update)
              {
                echo "<script>
                  alert('berhasil tersimpan');
                  window.location.href='index.php';
                  </script>";
              }
              else
              {
                echo "<script>
                  alert('gagal tersimpan');
                  window.location.href='index.php';
                  </script>";

              }
        }
        
        }
      ?>



     
<!-- Modal ganti logo -->
  <div class="modal fade" id="Modal-logo" role="dialog">
    <div class="modal-dialog">
    
      <div class="modal-content">
        
        <div class="modal-body" style="padding:40px 50px;">
          <form id="logo" class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                
                            <?php 
                            $id_penyelenggara=$_SESSION['id_penyelenggara'];
                            $sql = mysqli_query($koneksi, "SELECT * FROM penyelenggara WHERE id_penyelenggara=$id_penyelenggara");
                            $row = mysqli_fetch_assoc($sql);

            echo '<img src=logo/'.$row['logo'].' width="500px" height="430px">';
            ?>  
              <input type="file" name="logo" class="form-control" >
              <button type="submit" href="index.php" type="submit" name="ganti_logo" value="Simpan" class="btn btn-success btn-block"> ganti</button>
          </form>
        </div>     
      </div>
    </div>
  </div> 

  <!---script edit penyelenggara-->
<script>
$(document).ready(function(){
    $("#edit-penyelenggara").click(function(){
        $("#Modal-penelenggara").modal();
    });
});
</script>
<!---script edit logo-->
<script>
$(document).ready(function(){
    $("#logo").click(function(){
        $("#Modal-logo").modal();
    });
});
</script>

    <link rel="stylesheet" href="assets/css/bootstrapValidator.css">  
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/bootstrapValidator.js"></script>

<script type="text/javascript">
            $(document).ready(function() {
                $('#form_edit_penyelenggara')
                    .bootstrapValidator({
                        
                        feedbackIcons: {
                            valid: 'glyphicon glyphicon-ok',
                            invalid: 'glyphicon glyphicon-remove',
                            validating: 'glyphicon glyphicon-refresh'
                        },
                        fields: {
                            nama_penyelenggara: {
                               
                                validators: {
                                    notEmpty: {
                                        message: 'Nama Penyelenggara tidak boleh kosong'
                                    },
                                    
                                }
                            },
                            nama_lomba: {
                               
                                validators: {
                                    notEmpty: {
                                        message: 'Nama lomba tidak boleh kosong'
                                    },
                                    
                                }
                            }, 
                            lokasi_lomba: {
                               
                                validators: {
                                    notEmpty: {
                                        message: 'lokasi lomba tidak boleh kosong'
                                    },
                                    
                                }
                            },
                            email_penyelenggara: {
                               
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
                            tlp_penyelenggara: {
                               
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
                            username_penyelenggara: {
                               
                                validators: {
                                    notEmpty: {
                                        message: 'username tidak boleh kosong'
                                    },
                                    
                                }
                            },
                            password_penyelenggara: {
                               
                                validators: {
                                    notEmpty: {
                                        message: 'password tidak boleh kosong'
                                    },
                                    stringLength: {
                                min: 5,
                                message: 'minimal 5 karakter'
                            },
                                    
                                }
                            },
                            
                        }
                    });
                });
        </script>

	
	
  </body>
</html>

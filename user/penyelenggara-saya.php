<?php include("header.php")  ?>
      <ul class="sidebar-menu">
        <li class="header">MENU</li>
        <li class="treeview">
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
        
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Penyelenggaraan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="status-penyelenggaraan.php"><i class="fa fa-hourglass-2"></i> Status Penyelenggaraan saya</a></li>
            <li class="active"><a href="penyelenggara-saya.php"><i class="fa fa-bar-chart"></i>Penyelenggaraan Saya</a></li>
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
       <center><b>DAFTAR LOMBA SAYA</b></center> 
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Info Lomba</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
              <div class="box-body">

              <table id="example1" class="table table-bordered table-striped">
                <thead style="text-align: center; background: #3c8dbc;color: white">
                    <td style="width: 50px">No</td>
                    <td >Kategori lomba</td>
                    <td >Nama Lomba</td>
                    <td >Tempat Lomba</td>
                    <td >Waktu Mulai Lomba</td>
                    <td >Telphone Penyelenggara</td>
                    <td>Dashboard</td>
                </thead>
                <tbody>
              <?php

                 
                    $id_user=$_SESSION['id_user'];
                    $sql = mysqli_query($koneksi, "SELECT * FROM penyelenggara WHERE id_user='$id_user' ");


                    $no = 1;
                  while($row = mysqli_fetch_assoc($sql)){
                      if ($row['status_penyelenggara']=='3') {

                          if ($row['id_kategori']=='1'){
                            $Kategori='Sepak Bola';
                      }
                          if ($row['id_kategori']=='2') {
                            $Kategori='Basket';
                       } 
                      if ($row['id_kategori']=='3'){
                           $Kategori='Futsal'; 
                      }


                        echo '
                    <tr>
                      <td style="text-align: center">'.$no.'</td>
                      <td style="text-align: center"> '.$Kategori.'</td>
                      <td style="text-align: center">'.$row['nama_lomba'].'</td>
                      <td style="text-align: center" >'.$row['lokasi_lomba'].'</td>
                      <td style="text-align: center">'.$row['waktu_awal_lomba'].'</td>
                      <td style="text-align: center">'.$row['tlp_penyelenggara'].'</td>
                      <td style="text-align: center">
                        <a href="session.php?id_penyelenggara='.$row['id_penyelenggara'].'" target="_blank" title="Menuju Dashbpard"  class="btn btn-sm btn-primary"><span  aria-hidden="true"></span> Ke Dashboard </a>
                      </td>
                    </tr>
                    ';
                    $no++;
                      }
                 
                }
                ?>
                    </tbody>
                </table>
             </div>
            </div>
          </div>
        </div>
    </section>

    <!-- /.content -->
  </div>

 

 


      <!-- jQuery -->
        <script src="js/jquery.min.js"></script>
            <!---script daftar penyelenggara-->
      <script>
      $(document).ready(function(){
          $("#daftar-penyelenggara").click(function(){
              $("#Modal-penelenggara").modal();
          });
      });
      </script>
               
              <script src="js/bootstrap.min.js"></script>

              <script src="js/bootstrapValidator.js"></script>

      <script type="text/javascript">
                  $(document).ready(function() {
                      $('#form_tambah_penyelenggara')
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
                                          
                                      }
                                  },
                                  
                              }
                          });
                      });
              </script>
              
<?php include("alret-logout.php")  ?>
<script>
  $(function () {
    $("#example1").DataTable();
    
  });
</script>

 <?php include("scrip/footer.php")  ?>


</body>
</html>

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
      
    <div id="page-wrapper"><br />

      
              <form class="form-inline" method="get">
                <div class="form-group">
                  <select name="filter" class="form-control" onchange="form.submit()">
                    <option value="0">Filter Kategori Lomba</option>
                    <?php $filter = (isset($_GET['filter']) ? strtolower($_GET['filter']) : NULL);  ?>
                    <option value="1" <?php if($filter == '1'){ echo 'selected'; } ?>>Sepak Bola</option>
                    <option value="2" <?php if($filter == '2'){ echo 'selected'; } ?>>Futsal</option>
                    <option value="3" <?php if($filter == '3'){ echo 'selected'; } ?>>Basket</option>
                  </select>
                </div>
              </form><br />

              <table class="table table-bordered table-striped">
                <thead style="text-align: center; background: black;color: white">
                    <td style=" width: 50px">No</td>
                    <td style=" width: 130px">Nama Lomba</td>
                    <td style=" width: 250px">Tempat Lomba</td>
                    <td style=" width: 150px">Waktu Mulai Lomba</td>
                    <td style=" width: 200px">Telphone Penyelenggara</td>
                    <td style=" width: 180px">Jumlah Tim Partisipan</td>
                    <td>Dashboard</td>
                </thead>
                <tbody>
              <?php

                  if($filter){
                    $id_user=$_SESSION['id_user'];
                    $sql = mysqli_query($koneksi, "SELECT * FROM penyelenggara WHERE id_kategori='$filter' AND id_user='$id_user'");
                  }else{
                    $id_user=$_SESSION['id_user'];
                    $sql = mysqli_query($koneksi, "SELECT * FROM penyelenggara WHERE id_user='$id_user'");
                  }

                  if(mysqli_num_rows($sql) == 0){
                    echo '<tr style="text-align:center;"><td colspan="7">Empty</td></tr>';
                  }
                  else{

                    $no = 1;
                  while($row = mysqli_fetch_assoc($sql)){
                      if ($row['status_penyelenggara']=='3') {

                        echo '
                    <tr>
                      <td style="text-align: center">'.$no.'</td>
                      <td style="text-align: center">'.$row['nama_lomba'].'</td>
                      <td style="text-align: center" >'.$row['lokasi_lomba'].'</td>
                      <td style="text-align: center">'.$row['waktu_awal_lomba'].'</td>
                      <td style="text-align: center">'.$row['tlp_penyelenggara'].'</td>
                      <td style="text-align: center">'.$row['jml_tim'].'</td>
                      <td style="text-align: center">
                        <a href="session.php?id_penyelenggara='.$row['id_penyelenggara'].'" target="_blank" title="Menuju Dashbpard"  class="btn btn-sm btn-primary"><span  aria-hidden="true"></span> Ke Dashboard </a>
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
          
    </div><!-- /#page-wrapper -->

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

  <!-- /.content-wrapper -->
  <footer class="main-footer">
    
    <strong>Copyright &copy; 2017 <a href="#">Aliansi Team</a>.</strong> All rights
    reserved.
  </footer>



</body>
</html>
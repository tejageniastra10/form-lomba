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
        
        <li class=" treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Penyelenggaraan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="status-penyelenggaraan.php"><i class="fa fa-hourglass-2"></i> Status Penyelenggaraan saya</a></li>
            <li><a href="penyelenggara-saya.php"><i class="fa fa-bar-chart"></i>Penyelenggaraan Saya</a></li>
          </ul>
        </li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-futbol-o"></i>
            <span>Lomba</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="status-lomba.php"><i class="fa fa-hourglass-1"></i> Status Lomba saya</a></li>
            <li ><a href="lomba-saya.php"><i class="fa fa-area-chart"></i>Lomba Saya</a></li>
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
       <center><b>STATUS LOMBA</b></center> 
        
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
                    <td style=" width: 120px">Nama Tim</td>
                    <td style=" width: 200px">Alamat Tim</td>
                    <td style=" width: 140px">Penanggung Jawab</td>
                    <td style=" width: 150px">No Telephone</td>
                    <td style=" width: 150px">Jumlah Pemain</td>
                    <td style=" width: 100px">Status</td>
                    <td style=" width: 100px">Detail</td>
                </thead>
                <tbody>
              <?php

                  if($filter){
                    $id_user=$_SESSION['id_user'];
                    $sql = mysqli_query($koneksi, "SELECT * FROM tim WHERE id_user='$id_user' AND id_kategori='$filter'");
                  }else{
                    $id_user=$_SESSION['id_user'];
                    $sql = mysqli_query($koneksi, "SELECT * FROM tim WHERE id_user='$id_user'");
                  }

                  if(mysqli_num_rows($sql) == 0){
                    echo '<tr style="text-align:center;"><td colspan="8">Empty</td></tr>';
                  }
                  else{

                    $no = 1;
                  while($row = mysqli_fetch_assoc($sql)){
                      
                       echo '
                    <tr>
                      <td style="text-align: center">'.$no.'</td>
                      <td style="text-align: center">'.$row['nama_tim'].'</td>
                      <td style="text-align: center" >'.$row['alamat_tim'].'</td>
                      <td style="text-align: center">'.$row['penanggung_jawab'].'</td>
                      <td style="text-align: center">'.$row['tlp_tim'].'</td>
                      <td style="text-align: center">'.$row['jml_pemain'].'</td>

                    ';
                    if ($row['id_status']=='1') {
                      echo '<td style="text-align: center">
                        <span class="label label-primary">Pembayaran</span> 
                      </td> ';

                    }
                    elseif ($row['id_status']=='2') {
                      echo '<td style="text-align: center">
                        <span class="label label-success">Akun Aktif</span> 
                      </td> ';
                    }else {
                      echo '<td style="text-align: center">
                        <span class="label label-danger">Akun Ditolak</span> 
                      </td> ';
                    }
                    $no++;
                    echo '<td style="text-align: center"> <a href="#" class="btn btn-sm btn-info"   data-id='.$row["id_tim"].'><span  aria-hidden="true"></span> detail </a> </td> </tr>';
                  }
                }
                ?>
              </tbody>
          </table>
          
    </div><!-- /#page-wrapper -->

    </section>

    <!-- /.content -->
  </div>

 

  <div class="container">
     <!-- Modal daftar penyelenggara -->
      <div class="modal fade" id="Modal-penelenggara" role="dialog">
        <div class="modal-dialog">
        
          <div class="modal-content">
            <div class="modal-header" style="background: #0086b3; padding:15px 20px;">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h2 style="color: white" ><center><b>Daftar Penyelenggara</b></center></h2>
            </div>
            <div class="modal-body" style="padding:40px 50px;">
              <form id="form_tambah_penyelenggara" class="form-horizontal" action="../penyelenggara/proses-tambah-penyelenggara.php" method="post" enctype="multipart/form-data">
              <div class="form-group">
                  <label ><span class="glyphicon glyphicon-home"></span>  Nama Penyelenggara</label>
                  <input type="text" class="form-control" name="nama_penyelenggara" placeholder="Masukan Nama Penyelenggara">
                </div>
                <div class="form-group">
                  <label ><span class="glyphicon glyphicon-file"></span>  Nama Lomba</label>
                  <input type="text" class="form-control" name="nama_lomba" placeholder="masukan nama lomba">
                </div>
                <div class="form-group">
                  <label ><span class="glyphicon glyphicon-send"></span>  lokasi Lomba</label>
                  <input type="text" class="form-control" name="lokasi_lomba" placeholder="masukan lokasi lomba">
                </div>
                <div class="form-group">
                  <label ><span class="glyphicon glyphicon-calendar"></span>  Akhir Pendaftaran</label>
                  <input type="date" class="form-control" name="akhir_pendaftaran" placeholder="masukan waktu" required>
                </div>
                <div class="form-group">
                  <label ><span class="glyphicon glyphicon-calendar"></span>  Waktu Awal Lomba</label>
                  <input type="date" class="form-control" name="waktu_awal_lomba" placeholder="masukan waktu" required>
                </div>
                <div class="form-group">
                  <label ><span class="glyphicon glyphicon-calendar"></span>  Waktu Akhir Lomba</label>
                  <input type="date" class="form-control" name="waktu_akhir_lomba" placeholder="masukan waktu" required>
                </div>
                <div class="form-group">
                <label ><span class="glyphicon glyphicon-list"></span>  Kategori Lomba</label>
                        <select name="id_kategori" class="form-control" required>
                        <option value="1">Sepak Bola</option>
                        <option value="2">Futsal</option>
                        <option value="3">Basket</option>
                        </select>  
                </div>
                <div class="form-group">
                  <label ><span class="glyphicon glyphicon-envelope"></span> Email</label>
                  <input type="text" class="form-control"  name="email_penyelenggara" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="usrname"><span class="glyphicon glyphicon-phone-alt"></span> No. Telepon</label>
                  <input type="text" class="form-control" name="tlp_penyelenggara" placeholder="masukan no hp">
                </div>
                <div class="form-group">
                  <label ><span class="glyphicon glyphicon-user"></span> Jumlah Tim</label>
                  <input type="text" class="form-control" name="jml_tim" placeholder="masukkan jumlah tim">
                </div>
                
                
                <div class="form-group">
                  
                  <input  name="status_penyelenggara" value="0" type="hidden">
                </div>
                <div class="form-group">
                  
                  <input  name="id_user" value="<?php echo $_SESSION['id_user']; ?> " type="hidden">
                </div>
                
                
              
                
                  <button type="submit" href="index.php" type="submit" name="add" value="Simpan" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> daftar</button>
              </form>
            </div>     
          </div>
        </div>
      </div> 
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

        <!---script lihat detail-->
       <script type="text/javascript">
            $(document).ready(function (){
                $(".btn-info").click(function (e){
                    var m = $(this).attr("data-id");
                    $.ajax({
                        url: "modal/detail_tim.php",
                        type: "GET",
                        data : {id_tim: m,},
                        success: function (ajaxData){
                            $("#ModalDetail").html(ajaxData);
                            $("#ModalDetail").modal('show',{backdrop: 'true'});
                        }
                    });
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




 <?php include("scrip/footer.php")  ?>


</body>
</html>

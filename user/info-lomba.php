<?php include("header.php")  ?>

      <ul class="sidebar-menu">
        <li class="header">MENU</li>
        <li class="treeview">
          <a href="index.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            
          </a>
          
        </li>
        <li class="active treeview">
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
       <center><b>INFO LOMBA</b></center> 
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Info Lomba</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      
    <div id="page-wrapper"><br />

            <?php if (!isset($_GET['order'])) {
                  $kolom = 'id_penyelenggara';
                  $order = 'asc';
                  }
                  else if($_GET['order']=='desc')
                  {
                    $kolom = 'nama_lomba';
                    $order = 'desc';
                    } 
                  else if($_GET['order']=='asc')
                  {
                    $kolom = 'nama_lomba';
                    $order = 'asc';
                    } ?>

      
              <form class="form-inline" method="get">
                <div class="form-group">
                  <select name="filter" class="form-control" onchange="form.submit()">
                    <option value="0">Kategori Lomba</option>
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
                    <td style=" width: 130px">Nama Lomba
                    <?php
                        if(!isset($_GET['order']) || $_GET['order']=='desc' )
                          {?>
                            <a class="pull-right" href="info-lomba.php?order=asc">
                              <span class="glyphicon glyphicon-triangle-top" aria-hidden="true">
                              </span></a>
                        <?php
                          }
                          else if($_GET['order']=='asc')
                            {?>
                            <a class="pull-right" href="info-lomba.php?order=desc">
                              <span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true">
                            </a></span>
                            <?php
                            }
                            ?></td>
                    <td style=" width: 250px">Tempat Lomba</td>
                    <td style=" width: 150px">Waktu Mulai Lomba</td>
                    <td style=" width: 200px">Telphone Penyelenggara</td>
                    <td style=" width: 180px">Jumlah Tim Partisipan</td>
                    <td>Pilihan</td>
                </thead>
                <tbody>
              <?php
                  $id_user=$_SESSION['id_user'];

                  if($filter){
                    $sql = mysqli_query($koneksi, "SELECT * FROM penyelenggara WHERE id_kategori='$filter' and id_user!='$id_user' ORDER BY $kolom $order ");
                  }else{
                    $sql = mysqli_query($koneksi, "SELECT * FROM penyelenggara WHERE id_user!='$id_user' ORDER BY $kolom $order");
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
                        
                        <a href="#" class="btn btn-sm btn-info"   data-id='.$row["id_penyelenggara"].'><span  aria-hidden="true"></span> detail </a>
                  
                        <a href="#" class="btn btn-sm btn-warning" ket='.$row["id_kategori"].'  data-id='.$row["id_penyelenggara"].'><span  aria-hidden="true"></span> Daftar </a>
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
          <div class=" col-xs-3">
          <button type="button" id="daftar-penyelenggara"  class="btn btn-block btn-primary">Daftarkan Penyelenggara</button>
          </div>
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
                  <label > Nama Penyelenggara</label>
                  <input type="text" class="form-control" name="nama_penyelenggara" placeholder="Masukan Nama Penyelenggara">
                </div>
                <div class="form-group">
                  <label > Nama Lomba</label>
                  <input type="text" class="form-control" name="nama_lomba" placeholder="masukan nama lomba">
                </div>
                <div class="form-group">
                  <label > lokasi Lomba</label>
                  <input type="text" class="form-control" name="lokasi_lomba" placeholder="masukan lokasi lomba">
                </div>
                <div class="form-group">
                  <label > Akhir Pendaftaran</label>
                  <input type="date" class="form-control" name="akhir_pendaftaran" placeholder="masukan waktu" required>
                </div>
                <div class="form-group">
                  <label > Waktu Awal Lomba</label>
                  <input type="date" class="form-control" name="waktu_awal_lomba" placeholder="masukan waktu" required>
                </div>
                <div class="form-group">
                  <label > Waktu Akhir Lomba</label>
                  <input type="date" class="form-control" name="waktu_akhir_lomba" placeholder="masukan waktu" required>
                </div>
                <div class="form-group">
                <label > Kategori Lomba</label>
                        <select name="id_kategori" class="form-control" required>
                        <option value="1">Sepak Bola</option>
                        <option value="2">Futsal</option>
                        <option value="3">Basket</option>
                        </select>  
                </div>
                <div class="form-group">
                  <label > Email</label>
                  <input type="text" class="form-control"  name="email_penyelenggara" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="usrname"> No. Telepon</label>
                  <input type="text" class="form-control" name="tlp_penyelenggara" placeholder="masukan no hp">
                </div>
                <div class="form-group">
                  <label >Jumlah Tim</label>
                  <input type="text" class="form-control" name="jml_tim" placeholder="masukkan jumlah tim">
                </div>
                <div class="form-group">
                   <label><span ></span> Foto Copy KTP Penyelenggara</label>
                   <input type="file" name="fc_ktp" class="form-control" placeholder="foto" required>
                </div>  
                 <div class="form-group">
                  <label >Detail Penyelenggara</label>
                  <textarea rows="6" class="form-control" name="detail_penyelenggara" placeholder="masukkan detail penyelenggara"></textarea> 
                </div>
                
                <div class="form-group">
                  
                  <input  name="status_penyelenggara" value="1" type="hidden">
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

<?php include("../penyelenggara/modal-daftar.php")  ?>
      <!-- jQuery -->
        <script src="js/jquery.min.js"></script>

  <!---script daftar peserta-->
        <script type="text/javascript">
            $(document).ready(function (){
                $(".btn-warning").click(function (e){
                    var m = $(this).attr("data-id");
                    var n = $(this).attr("ket");
                    $('#penyelenggara').val(m);
                    $('#id_kategori').val(n);

                    $.ajax({
                        url: "../penyelenggara/modal-daftar.php",
                        type: "GET",
                        data : {id_penyelenggara: m,},
                        success: function (ajaxData){
                            
                            $("#Modal-tim").modal('show');
                        }
                    });
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
                        url: "modal/detailpenyelenggara.php",
                        type: "GET",
                        data : {id_penyelenggara: m,},
                        success: function (ajaxData){
                            $("#ModalDetail").html(ajaxData);
                            $("#ModalDetail").modal('show',{backdrop: 'true'});
                        }
                    });
                });
            });
        </script>


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

              <script type="text/javascript">
            $(document).ready(function() {
                $('#form_tambah_tim')
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
                                        message: 'Nama Tim tidak boleh kosong'
                                    },
                                    
                                }
                            },
                           alamat_tim: {
                               
                                validators: {
                                    notEmpty: {
                                        message: 'Alamat Tim tidak boleh kosong'
                                    },
                                    
                                }
                            }, 
                            penanggung_jawab: {
                               
                                validators: {
                                    notEmpty: {
                                        message: 'penanggung jawab tidak boleh kosong'
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
                            username_tim: {
                               
                                validators: {
                                    notEmpty: {
                                        message: 'username tidak boleh kosong'
                                    },
                                    
                                }
                            },
                            password_tim: {
                               
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

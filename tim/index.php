<?php include("header.php") ?>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li  class="active">
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Home</a>
                    </li>
                     <li>
                        <a href="pengumuman_peserta.php"><i class="fa fa-fw fa-list"></i> Pengumuman</a>
                    </li>
                    <li>
                        <a href="list.php"><i class="fa fa-fw fa-list"></i> Daftar Tim</a>
                    </li>
                    <li>
                        <a href="myteam.php"><i class="fa fa-fw fa-plus"></i> Pemain</a>
                    </li>
                    <li>
                        <a href="statisti_peserta.php"><i class="fa fa-fw fa-calendar"></i> Statistik</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="index.php">Home</a>
                        </li>
                    </ol>
                </div>


          <!-- About Me Box -->
          <div class="col-md-9" style="margin: 5px 120px;">
            <div class="box box-primary">
              <div class="box-header with-border">
              </div>

              <?php
              $id_tim=$_SESSION['id_tim']; 
                            $sql = mysqli_query($koneksi, "SELECT * FROM tim WHERE id_tim='$id_tim'");
                            $row = mysqli_fetch_assoc($sql);

            
              ?>
              <!-- /.box-header -->
              <div class="panel panel-primary">
                <div class="panel-heading" style="height: 60px;">
                  <h2 class="panel-title" style="text-align: center; line-height: 40px;">PROFIL PESERTA</h2>
                </div>
                <div class="panel-body">
                  <strong><i class="fa fa-user margin-r-5" style="margin-left: 50px;"></i> Nama </strong>
                    <p class="text-muted" style="margin-left: 50px; padding-left: 20px;">
                     <?php echo $row['nama_tim'];  ?>
                    </p><hr style="margin-left: 50px; margin-right: 50px;">

                    <strong><i class="fa fa-map-marker margin-r-5" style="margin-left: 50px;"></i> Alamat  </strong>
                    <p class="text-muted" style="margin-left: 50px; padding-left: 20px;">
                      <?php echo $row['alamat_tim'];  ?>
                    </p><hr style="margin-left: 50px; margin-right: 50px;">

                    <strong><i class="fa fa-user margin-r-5" style="margin-left: 50px;"></i> Penanggung Jawab</strong>
                    <p class="text-muted" style="margin-left: 50px; padding-left: 20px;">
                      <?php echo $row['penanggung_jawab'];  ?>
                    </p>
                    <hr style="margin-left: 50px; margin-right: 50px;">

                    <strong><i class="fa  fa-envelope-o margin-r-5" style="margin-left: 50px;"></i> Email</strong>
                    <p class="text-muted" style="margin-left: 50px; padding-left: 20px;">
                      <?php echo $row['email_tim'];  ?></p>
                    <hr style="margin-left: 50px; margin-right: 50px;">

                    <strong><i class="fa fa-phone margin-r-5" style="margin-left: 50px;"></i> No Telepon</strong>
                    <p class="text-muted" style="margin-left: 50px; padding-left: 20px;"><?php echo $row['tlp_tim'];  ?></p>
                    <hr style="margin-left: 50px; margin-right: 50px;">

                    <strong><i class="fa fa-user margin-r-5" style="margin-left: 50px;"></i> Jumlah Pemain</strong>
                    <p class="text-muted" style="margin-left: 50px; padding-left: 20px;"><?php echo $row['jml_pemain'];  ?></p>

                </div>
              </div>

              <div class="box-body">
              <div class="box-body">
                  <a href="#" id="edit" class="btn btn-primary btn-block"><b>Edit Profil</b></a> 
                  
              </div>  
            </div>
            <!-- /.box-body -->
           
          </div>
          <!-- /.box -->
          </div>

            </div>

        </div>
       
  
           
            <!-- /.container-fluid -->


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <div class="container">

  <div class="modal fade" id="Modal-edit-profil" role="dialog">
    <div class="modal-dialog">
    
      <div class="modal-content">
        <div class="modal-header" style="background: #00cc00; padding:25px 30px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 style="color: white" ><center><b>Edit Profil</b></center></h2>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form id="form_edit_tim" class="form-horizontal" action="proses-edit-profil.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
              <label > Nama</label>
              <input type="text" class="form-control" name="nama_tim" value="<?php echo $row ['nama_tim']; ?>" placeholder="Masukan Nama Tim">
            </div>
            <div class="form-group">
              <label >  alamat</label>
              <input type="text" class="form-control" name="alamat_tim" value="<?php echo $row ['alamat_tim']; ?>" placeholder="Masukan Alamat Tim">
            </div>
             <div class="form-group">
              <label > Penanggung Jawab</label>
              <input type="text" class="form-control" name="penanggung_jawab" value="<?php echo $row ['penanggung_jawab']; ?>" placeholder="Masukan Nama Penanggung Jawab">
            </div>
            <div class="form-group">
              <label >  Email</label>
              <input type="text" class="form-control" name="email_tim" value="<?php echo $row ['email_tim']; ?>" placeholder="Masukan Email Tim">
            </div>
            <div class="form-group">
              <label >  No.telephone</label>
              <input type="text" class="form-control" name="tlp_tim" value="<?php echo $row ['tlp_tim']; ?>" placeholder="Masukan No Telp">
            </div>
            <div class="form-group">
              <label >  Jumlah Pemain</label>
              <input type="text" class="form-control" name="jml_pemain" value="<?php echo $row ['jml_pemain']; ?>" placeholder="Masukan Jumlah Pemain">
            </div>
             
            
            
              <button  style="background: #00cc00"   type="submit" name="edit-tim" value="Simpan" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> simpan</button>
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
                $('#form_edit_tim')
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
                                        message: 'Nama  tidak boleh kosong'
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
                            penanggung_jawab: {
                               
                                validators: {
                                    notEmpty: {
                                        message: 'Penanggung Jawab tidak boleh kosong'
                                    },
                                    
                                }
                            },
                            jml_pemain: {
                               
                                validators: {
                                    notEmpty: {
                                        message: 'jumlah pemain tidak boleh kosong'
                                    },
                                    stringLength: {
                                max: 11,
                                message: 'maksimal 2karakter'
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
                            alamat_tim: {
                               
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

</body>

</html>

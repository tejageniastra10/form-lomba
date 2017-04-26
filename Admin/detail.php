<?php

    include '../koneksi.php';
    $id_penyelenggara = $_GET['id_penyelenggara'];
    $sql = mysqli_query($koneksi,"SELECT * FROM penyelenggara where id_penyelenggara='$id_penyelenggara'");

    while($row=  mysqli_fetch_array($sql)){
    
?>

<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
            <h4 class="modal-title" id="myModalLabel">Detail Mahasiswa</h4>
        </div>
        <div class="modal-body">
            <form class="form-horizontal" name="modal-popup" enctype="multipart/form-data" method="POST">
                                       
                            
                    <div class="container">
  
                        <div class="row">
                          <div class="col-md-4">
                                                                
                                        <div class="form-group">
                                        <label class="col-lg-6 control-label">Id Penyelenggara</label>
                                                <div class="col-lg-5">
                                                    <input style="width: 200px;"  class="form-control" type="text" name="nim" value="<?php echo $row['id_penyelenggara']; ?>" readonly/>
                                                </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="col-lg-6 control-label">Nama Penyelengara</label>
                                                <div class="col-lg-5">
                                                    <input style="width: 200px;"  class="form-control" type="text" name="nama" value="<?php echo $row['nama_penyelenggara']; ?>" readonly/>
                                                </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-lg-6 control-label">Nama Lomba</label>
                                                <div class="col-lg-5">
                                                    <input style="width: 200px;"  class="form-control" type="text" name="tempat_lahir" value="<?php echo $row['nama_lomba']; ?>" readonly/>
                                                </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-lg-6 control-label">Lokasi Lomba</label>
                                                <div class="col-lg-5">
                                                    <input style="width: 200px;"  class="form-control" type="text" name="tanggal_lahir" value="<?php echo $row['lokasi_lomba']; ?>" readonly/>
                                                </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-lg-6 control-label">Waktu Awal</label>
                                                <div class="col-lg-5">
                                                    <textarea style="width: 200px" name="alamat" class="form-control" readonly><?php echo $row['waktu_awal_lomba'];?></textarea>
                    
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-6 control-label">Waktu Akhir</label>
                                                <div class="col-lg-5">
                                                    <input style="width: 200px;"  class="form-control" type="text" name="jenis_kelamin" value="<?php echo $row['waktu_akhir_lomba']; ?>" readonly/>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-6 control-label">Nama Kategori</label>
                                                <div class="col-lg-5">
                                                    <input style="width: 200px;"  class="form-control" type="text" name="jurusan" value="<?php echo $row['id_kategori']; ?>" readonly/>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-6 control-label">Email Penyelengara</label>
                                                <div class="col-lg-5">
                                                    <input style="width: 200px;"  class="form-control" type="text" name="no_tlp" value="<?php echo $row['email_penyelenggara']; ?>" readonly/>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-6 control-label">No Telepon</label>
                                                <div class="col-lg-5">
                                                    <input style="width: 200px;"  class="form-control" type="text" name="no_tlp" value="<?php echo $row['tlp_penyelenggara']; ?>" readonly/>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-6 control-label">Username</label>
                                                <div class="col-lg-5">
                                                    <input style="width: 200px;"  class="form-control" type="text" name="no_tlp" value="<?php echo $row['username_penyelenggara']; ?>" readonly/>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-6 control-label">Password</label>
                                                <div class="col-lg-5">
                                                    <input style="width: 200px;"  class="form-control" type="text" name="no_tlp" value="<?php echo $row['password_penyelenggara']; ?>" readonly/>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-6 control-label">Jumlah Tim</label>
                                                <div class="col-lg-5">
                                                    <input style="width: 200px;"  class="form-control" type="text" name="no_tlp" value="<?php echo $row['jml_tim']; ?>" readonly/>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-6 control-label">Pembayaran</label>
                                                <div class="col-lg-5">
                                                    <input style="width: 200px;"  class="form-control" type="text" name="no_tlp" value="<?php echo $row['pembayaran_penyelenggara']; ?>" readonly/>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-6 control-label">Status Penyelenggara</label>
                                                <div class="col-lg-5">
                                                    <input style="width: 200px;"  class="form-control" type="text" name="no_tlp" value="<?php echo $row['status_penyelenggara']; ?>" readonly/>
                                                </div>
                                        </div>



                            
                        </div>
                    </div>
                 </div>
                            
                
                            
            </form>
              <?php
    }
            ?>
        </div>
    </div>
</div>
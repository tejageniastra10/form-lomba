<?php
    include '../koneksi.php';

    $id_user = $_GET['id_user'];
    $sql = mysqli_query($koneksi,"SELECT * FROM user where id_user='$id_user'");
    while($row=  mysqli_fetch_array($sql)){
?>

<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
            <h4 class="modal-title" id="myModalLabel">Detail Pengguna</h4>
        </div>
        <div class="modal-body">
            <form class="form-horizontal" name="modal-popup" enctype="multipart/form-data" method="POST">            
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">                         
                            <div class="form-group">
                                <label class="col-lg-6 control-label">Id Pengguna</label>
                                <div class="col-lg-5">
                                    <input style="width: 200px;"  class="form-control" type="text" name="nim" value="<?php echo $row['id_user']; ?>" readonly/>
                                </div>
                            </div>
                                    
                            <div class="form-group">
                                <label class="col-lg-6 control-label">Nama Pengguna</label>
                                <div class="col-lg-5">
                                    <input style="width: 200px;"  class="form-control" type="text" name="nama" value="<?php echo $row['nama_user']; ?>" readonly/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-6 control-label">Email Pengguna</label>
                                <div class="col-lg-5">
                                    <input style="width: 200px;"  class="form-control" type="text" name="tempat_lahir" value="<?php echo $row['email_user']; ?>" readonly/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-6 control-label">No Telepon</label>
                                <div class="col-lg-5">
                                    <input style="width: 200px;"  class="form-control" type="text" name="tanggal_lahir" value="<?php echo $row['tlp_user']; ?>" readonly/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-6 control-label">Alamat</label>
                                <div class="col-lg-5">
                                    <textarea style="width: 200px" name="alamat" class="form-control" readonly><?php echo $row['alamat_user'];?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-6 control-label">Username</label>
                                <div class="col-lg-5">
                                    <input style="width: 200px;"  class="form-control" type="text" name="tanggal_lahir" value="<?php echo $row['username_user']; ?>" readonly/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-6 control-label">Password</label>
                                <div class="col-lg-5">
                                    <input style="width: 200px;"  class="form-control" type="text" name="jenis_kelamin" value="<?php echo $row['password_user']; ?>" readonly/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-6 control-label">Foto</label>
                                <div class="col-lg-5">
                                    <input style="width: 200px;"  class="form-control" type="text" name="jurusan" value="<?php echo $row['id_kategori']; ?>" readonly/>
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
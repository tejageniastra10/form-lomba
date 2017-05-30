<?php
  include("session.php");
  include("../koneksi.php");
?>
<?php
  $id_tim = $_SESSION['id_tim'];
?>
<form action="insert.php" method="post" enctype="multipart/form-data">
          <input class="form-control" required="required" type="text" placeholder="Nama" name="nama_pemain" maxlength="30">
                <br>
                 <div class="row">
                    <div class="col-xs-8 col-sm-6">
                        <input class="form-control" required="required" type="text" placeholder="Usia" name="usia_pemain" maxlength="2">
                    </div>
                </div>
                <br>
                 <input class="form-control" required="required"  type="text" placeholder="Alamat" name="alamat_pemain" maxlength="100"><br>
                <br>
                <input type="file" name="foto_pemain" required="required" /><br>
                <input type="hidden" value="<?=$id_tim; ?>" name="id_tim">  
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" value="add" name="add" class="btn btn-primary">Tambah</button>
</form>
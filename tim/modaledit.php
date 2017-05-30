
    <?php
      $id_pemain = $_POST['id_pemain'];
      $nama_pemain = $_POST['nama_pemain'];
      $usia_pemain = $_POST['usia_pemain'];
      $alamat_pemain = $_POST['alamat_pemain'];
  ?>
    <form action="edit.php" method="post">
      <input class="form-control" required="required" type="text" value="<?=$nama_pemain;?>" name="nama_pemain" maxlength="30">
        <br>
          <div class="row">
            <div class="col-xs-8 col-sm-6">
              <input class="form-control" required="required" type="text" value="<?=$usia_pemain;?>" placeholder="Usia" name="usia_pemain" maxlength="2">
            </div>
            </div>
            <br>
          <input class="form-control" required="required" type="text" value="<?=$alamat_pemain;?>" name="alamat_pemain" maxlength="30">
        <br>
          <input type="hidden" value="<?=$id_tim ?>" name="id_tim">
          <input type="hidden" value="<?=$id_pemain ?>" name="id_pemain">
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" value="ganti" name="ganti" class="btn btn-warning">Edit</button>
    </form>
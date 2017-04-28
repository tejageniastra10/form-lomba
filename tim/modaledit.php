
    <?php
      $nama = $_POST['nama'];
      $usia = $_POST['usia'];
      $alamat = $_POST['alamat'];
      $idtim = $_POST['idtim'];
      $idpemain = $_POST['idpemain'];
  ?>
    <form action="edit.php" method="post">
      <input class="form-control" required="required" type="text" value="<?=$nama;?>" name="nama" maxlength="30">
        <br>
          <div class="row">
            <div class="col-xs-8 col-sm-6">
              <input class="form-control" required="required" type="text" value="<?=$usia;?>" placeholder="Usia" name="usia" maxlength="2">
            </div>
            </div>
            <br>
          <input class="form-control" required="required" type="text" value="<?=$alamat;?>" name="alamat" maxlength="30">
        <br>
          <input type="hidden" value="<?=$id_tim ?>" name="id_tim">
          <input type="hidden" value="<?=$id_pemain ?>" name="id_pemain">
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" value="ganti" name="GANTI" class="btn btn-warning">Edit</button>
    </form>

    <?php
      $nama = $_POST['nama'];
      
      $idpemain = $_POST['idpemain'];
  ?>
    Anda yakin menghapus <?=$nama;?> ?
    <br><br>
    <form action="hapus.php" method="post">
          <input type="hidden" value="<?=$idpemain ?>" name="idpemain">
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" value="hapus" name="HAPUS" class="btn btn-danger">Hapus</button>
    </form>
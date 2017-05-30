
    <?php
      $nama_pemain = $_POST['nama_pemain'];
      
      $id_pemain = $_POST['id_pemain'];
  ?>
    Anda yakin menghapus <?=$nama_pemain;?> ?
    <br><br>
    <form action="hapus.php" method="post">
          <input type="hidden" value="<?=$id_pemain ?>" name="id_pemain">
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" value="hapus" name="HAPUS" class="btn btn-danger">Hapus</button>
    </form>
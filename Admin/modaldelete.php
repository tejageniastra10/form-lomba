
    <?php

      if (isset($_POST['nama_penyelenggara'])) {
        $nama_penyelenggara =$_POST['nama_penyelenggara']; // there is no error here
      }

      if (isset($_POST['id_penyelenggara'])) {
        $id_penyelenggara =$_POST['id_penyelenggara']; // there is no error here
      }


  ?>
    Anda yakin menghapus <?=$nama_penyelenggara;?> ?
    <br><br>
    <form action="delete_penyelenggara.php" method="post">
          <input type="hidden" value="<?=$id_penyelenggara ?>" name="id_penyelenggara">
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" value="hapus" name="HAPUS" class="btn btn-danger">Hapus</button>
    </form>

    <?php

      if (isset($_POST['nama_user'])) {
        $nama_user =$_POST['nama_user']; // there is no error here
      }

      if (isset($_POST['id_user'])) {
        $id_user =$_POST['id_user']; // there is no error here
      }


  ?>
    Anda yakin menghapus <?=$nama_user;?> ?
    <br><br>
    <form action="delete_user.php" method="post">
          <input type="hidden" value="<?=$id_user ?>" name="id_user">
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" value="hapus" name="HAPUS" class="btn btn-danger">Hapus</button>
    </form>
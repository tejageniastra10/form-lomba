
    <?php
      $id_pemain = $_POST['id_pemain'];
      $foto_pemain = $_POST['foto_pemain'];
      
  ?>
    <form action="edit.php" method="post">
      
          <div align="center">
                            <?php echo '<img src=foto_pemain/'.$foto_pemain.' width="300px" height="300px">'; ?>

              </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </form>
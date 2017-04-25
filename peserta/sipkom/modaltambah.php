<?php
  $idtim = $_POST["idtim"];
?>
<form action="insert.php" method="post" enctype="multipart/form-data">
          <input class="form-control" required="required" type="text" placeholder="Nama" name="nama" maxlength="30">
                <br>
                 <div class="row">
                    <div class="col-xs-8 col-sm-6">
                        <input class="form-control" required="required" type="text" placeholder="Usia" name="usia" maxlength="2">
                    </div>
                    <div class="col-xs-4 col-sm-6">
                        <select required="required" name="fakultas" class="form-control">
                          <option selected disabled>Fakultas</option>
                          <option>TEKNIK</option>
                          <option>MIPA</option>
                          <option>FISIP</option>
                          <option>KEDOKTERAN</option>
                        </select>
                    </div>
                </div>
                <br>
                <input class="form-control" required="required"  type="text" placeholder="No. KTP" name="noktp" maxlength="20"><br>
                <input type="file" name="file" required="required" /><br>
                <input type="hidden" value="<?=$idtim; ?>" name="idtim1">  
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" value="add" name="ADD" class="btn btn-primary">Tambah</button>
</form>
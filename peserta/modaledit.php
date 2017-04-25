
    <?php
      $nama = $_POST['nama'];
      $usia = $_POST['usia'];
      $noktp= $_POST['noktp'];
      $fakultas = $_POST['fakultas'];
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
            <div class="col-xs-4 col-sm-6">
              <select required="required" name="fakultas" class="form-control">
                <option disabled>Fakultas</option>
                <option <?php if($fakultas=='TEKNIK') { echo 'selected';};?>>TEKNIK</option>
                <option <?php if($fakultas=='MIPA') { echo 'selected';};?>>MIPA</option>
                <option <?php if($fakultas=='FISIP') { echo 'selected';};?>>FISIP</option>
                <option <?php if($fakultas=='KEDOKTERAN') { echo 'selected';};?>>KEDOKTERAN</option>
              </select>
            </div>
          </div>
          <br>
          <input class="form-control" required="required" type="text" placeholder="No. KTP" value="<?=$noktp;?>" name="noktp" maxlength="20">
          <input type="hidden" value="<?=$idtim ?>" name="idtim1">
          <input type="hidden" value="<?=$idpemain ?>" name="idpemain">
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" value="ganti" name="GANTI" class="btn btn-warning">Edit</button>
    </form>
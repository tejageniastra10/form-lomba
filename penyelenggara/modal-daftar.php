
<div class="modal fade" id="Modal-tim" role="dialog">
    <div class="modal-dialog">
    
      <div class="modal-content">
        <div class="modal-header" style="background: #0086b3; padding:15px 20px;">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h2 style="color: white" ><center><b>Daftar Lomba</b></center></h2>
            </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form id="form_tambah_tim" class="form-horizontal" action="../tim/proses-tambah-tim.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
              <input type="hidden" class="form-control" name="id_penyelenggara" id="penyelenggara">
            </div>
            <div class="form-group">
              <input type="hidden" class="form-control" name="kategori" id="id_kategori">
            </div>
          <div class="form-group">
              <label ><span class="glyphicon glyphicon-home"></span>  Nama Tim Peserta</label>
              <input type="text" class="form-control" name="nama_tim" placeholder="Masukan Nama Tim Peserta">
            </div>
            <div class="form-group">
              <label ><span class="glyphicon glyphicon-file"></span>  Alamat Tim Peserta</label>
              <input type="text" class="form-control" name="alamat_tim" placeholder="Masukan Alamat Tim Peserta">
            </div>
            <div class="form-group">
              <label ><span class="glyphicon glyphicon-send"></span>  Penanggung Jawab</label>
              <input type="text" class="form-control" name="penanggung_jawab" placeholder="Masukan Penanggung Jawab">
            </div>
            <div class="form-group">
              <label ><span class="glyphicon glyphicon-envelope"></span> Email Tim Peserta</label>
              <input type="text" class="form-control" name="email_tim" placeholder="Enter email Tim">
            </div>
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-phone-alt"></span> No. Telepon</label>
              <input type="text" class="form-control" name="tlp_tim" placeholder="masukan no hp">
            </div>
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Jumlah Pemain</label>
              <input type="text" class="form-control" name="jml_pemain" placeholder="masukan jumlah tim">
            </div>
            
              <input type="hidden" class="form-control" name="id_status" value="1">
              <input type="hidden" class="form-control" name="id_user" value="<?php echo $_SESSION['id_user'];?>">
                      <div class="form-group">
               <label> Foto Copy KTP Penanggung jawab</label>
               <input type="file" name="ktp_tim" class="form-control" placeholder="foto" required>
            </div>
            
            
              <button type="submit" href="index.php" type="submit" name="add" value="Simpan" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> daftar</button>
          </form>
        </div>     
      </div>
    </div>
  </div> 
</div>


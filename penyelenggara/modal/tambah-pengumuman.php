 <div class="container">
     <!-- Modal tambah pengumuman-->
      <div class="modal fade" id="Modal-pengumuman" role="dialog">
        <div class="modal-dialog">
        
          <div class="modal-content">
           
            <div class="modal-body" style="padding:40px 50px;">
              <form id="form_tambah_penyelenggara" class="form-horizontal" action="../penyelenggara/proses/proses-tambah-pengumuman.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label > Judul Pengumuman</label>
                  <input type="text" class="form-control" name="judul_pengumuman" placeholder="Masukan judul pengumuman" required>
                </div>
              
              <div class="form-group">
                <label > Isi Pengumuman</label>
                <textarea rows="6" class="form-control" name="isi_pengumuman" placeholder="Masukan isi Pengumuman" required></textarea>
              </div>
              <div class="form-group">
              <label > Upload Dokumen</label>
                  <input type="file" name="file_pengumuman" placeholder="file">
              </div>
              <div class="form-group">
                  <input  name="id_penyelenggara" value="<?php echo $_SESSION['id_penyelenggara']; ?> " type="hidden">
              </div>
              <div class="form-group">
                  <input type="hidden"  name="tgl_pengumuman" value="<?php echo date("Y/m/d") ?> " >
              </div>
             <div class="form-group">    
                <button type="submit" style="width: 100px"  name="add-pengumuman" value="Simpan" class="btn btn-success btn-block"></span> simpan</button>
            </div>
           
                  
              </form>
            </div>     
          </div>
        </div>
      </div> 
      </div>
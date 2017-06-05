 <div class="container">
     <!-- Modal tambah pengumuman-->
      <div class="modal fade" id="Modal-pengumuman" role="dialog">
        <div class="modal-dialog">
        
          <div class="modal-content">
           
            <div class="modal-body" style="padding:40px 50px;">
              <form id="form_tambah_penyelenggara" class="form-horizontal" action="../penyelenggara/proses-tambah-penyelenggara.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label > Judul Pengumuman</label>
                  <input type="text" class="form-control" name="judul_pengumuman" placeholder="Masukan judul pengumuman">
                </div>
              
              <div class="form-group">
                <label > Isi Pengumuman</label>
                <textarea rows="6" class="form-control" name="isi_pengumuman" placeholder="Masukan isi Pengumuman"></textarea>
              </div>

             <div class="form-group">    
                <button type="submit" style="width: 100px"  name="add" value="Simpan" class="btn btn-success btn-block"></span> simpan</button>
            </div>
                  
              </form>
            </div>     
          </div>
        </div>
      </div> 
      </div>
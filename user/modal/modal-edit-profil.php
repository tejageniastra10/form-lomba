<!-- Modal edit user  -->
 <div class="container">

  <div class="modal fade" id="Modal-edit-profil" role="dialog">
    <div class="modal-dialog">
    
      <div class="modal-content">
        <div class="modal-header" style="background: #3c8dbc; padding:25px 30px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 style="color: white" ><center><b>Edit Profil</b></center></h2>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form id="form_edit_user" class="form-horizontal" action="../user/proses-edit-profil.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
              <label > Nama</label>
              <input type="text" class="form-control" name="nama_user" value="<?php echo $row ['nama_user']; ?>" placeholder="Masukan Nama Penyelenggara">
            </div>
            <div class="form-group">
              <label >  Email</label>
              <input type="text" class="form-control" name="email_user" value="<?php echo $row ['email_user']; ?>" placeholder="masukan nama lomba">
            </div>
            <div class="form-group">
              <label >  No.telephone</label>
              <input type="text" class="form-control" name="tlp_user" value="<?php echo $row ['tlp_user']; ?>" placeholder="masukan nama lomba">
            </div>
            <div class="form-group">
              <label >  alamat</label>
              <input type="text" class="form-control" name="alamat_user" value="<?php echo $row ['alamat_user']; ?>" placeholder="masukan lokasi lomba">
            </div>
            <div class="form-group">
              <label >  Foto</label>
                <input type="file" name="foto" class="form-control" placeholder="foto" >
            </div>
             <div  class="form-group">
              <label for="usrname"> Username</label>
              <input type="text" class="form-control" name="username_user" value="<?php echo $row ['username_user']; ?>" placeholder="Enter username" readonly>
            </div>
            <div  class="form-group">
              <label for="usrname"> Password</label>
              <input type="password" class="form-control" name="password_user"  placeholder="Enter password" >
            </div>
            
            
          
          
            
              <button  style="background: #3c8dbc"   type="submit" name="edit-user" value="Simpan" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> simpan</button>
          </form>
        </div>     
      </div>
    </div>
  </div> 

 </div>


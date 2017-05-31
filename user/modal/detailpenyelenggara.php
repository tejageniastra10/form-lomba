<?php
    include '../../koneksi.php';

    $id_penyelenggara = $_GET['id_penyelenggara'];
    $sql = mysqli_query($koneksi,"SELECT * FROM penyelenggara where id_penyelenggara='$id_penyelenggara'");
    while($row=  mysqli_fetch_array($sql)){
?>

<div class="modal-dialog">
     <div class="modal-content">
        <div class="modal-header" style="background: #0086b3; padding:15px 20px;">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h2 style="color: white" ><center><b><?php echo $row['nama_lomba']; ?></b></center></h2>
            </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form id="form_tambah_tim" class="form-horizontal" >
         
              <div align="center">
                            <?php echo '<img class="img-circle"  src=../penyelenggara/logo/'.$row['logo'].' width="150px" height="150px">'; ?>

              </div>
        
            
         
            <div class="form-group">
              <label > Email</label>
              <input type="text" class="form-control"  value="<?php echo $row['email_penyelenggara']; ?>" readonly>
            </div>
            <div class="form-group">
              <label > Kategori</label>

              <input type="text" class="form-control"  value=" <?php 

              if ($row['id_kategori']=='1') {
                echo "Sepak Bola";
                }
                elseif ($row['id_kategori']=='2') {
                echo "Futsal";
                 } 
                 else {
                    echo "Basket";
                    }?>" readonly>
            </div>
            <div class="form-group">
              <label > Waktu awal lomba</label>
              <input type="text" class="form-control"  value="<?php echo $row['waktu_awal_lomba']; ?>" readonly>
            </div>
            <div class="form-group">
              <label > Waktu akhir lomba</label>
              <input type="text" class="form-control"  value="<?php echo $row['waktu_akhir_lomba']; ?>" readonly>
            </div>
             <div class="form-group">
              <label > Detail Lomba</label>
              <textarea rows="6" class="form-control" readonly><?php echo $row['detail_penyelenggara']; ?></textarea>
            </div>

            
            
              
          </form>
        </div>     
      </div>
    </div>
</div>
<?php }  ?>
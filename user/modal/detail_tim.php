<?php
    include '../../koneksi.php';

    $id_tim = $_GET['id_tim'];
    $sql = mysqli_query($koneksi,"SELECT * FROM tim where id_tim='$id_tim'");
    while($row=  mysqli_fetch_array($sql)){
    $id_penyelenggara=$row['id_penyelenggara'];
    $sql1 = mysqli_query($koneksi,"SELECT * FROM penyelenggara where id_penyelenggara='$id_penyelenggara'");
    $row1=  mysqli_fetch_array($sql1) 
?>

<div class="modal-dialog">
     <div class="modal-content">
        <div class="modal-header" style="background: #0086b3; padding:15px 20px;">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h2 style="color: white" ><center><b>Nama Lomba : <?php echo $row1['nama_lomba']; ?></b></center></h2>
            </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form id="form_tambah_tim" class="form-horizontal" >
         
              <div align="center">
                <?php echo '<img class="img-circle"  src=../penyelenggara/logo/'.$row1['logo'].' width="150px" height="150px">'; ?>
              </div>
              <div class="form-group">
              <label > Nama Penyelenggara</label>
              <input type="text" class="form-control"  value="<?php echo $row1['nama_penyelenggara']; ?>" readonly>
            </div>
            <div class="form-group">
              <label > Lokasi</label>
              <input type="text" class="form-control"  value="<?php echo $row1['lokasi_lomba']; ?>" readonly>
            </div>
              <div class="form-group">
              <label > Waktu awal lomba</label>
              <input type="text" class="form-control"  value="<?php echo $row1['waktu_awal_lomba']; ?>" readonly>
            </div>
            <div class="form-group">
              <label > Waktu akhir lomba</label>
              <input type="text" class="form-control"  value="<?php echo $row1['waktu_akhir_lomba']; ?>" readonly>
            </div>
            <div class="form-group">
              <label > NO Telephone</label>
              <input type="text" class="form-control"  value="<?php echo $row1['tlp_penyelenggara']; ?>" readonly>
            </div> 
              <div class="form-group">
              <label > Detail</label>
              <textarea rows="6" class="form-control" readonly><?php echo $row1['detail_penyelenggara']; ?></textarea>
            </div>             
          </form>
        </div>     
      </div>
    </div>
</div>
<?php }  ?>
<?php
    include '../../koneksi.php';

    $id = $_GET['id'];
    $sql = mysqli_query($koneksi,"SELECT * FROM statistik where id='$id'");
    while($row=  mysqli_fetch_array($sql)){
?>

<div class="modal-dialog">
     <div class="modal-content">
        <div class="modal-header" style="background: #0086b3; padding:15px 20px;">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h2 style="color: white" ><center><b><?php echo $row['fase_pertandingan']; ?></b></center></h2>
            </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form id="form_tambah_tim" class="form-horizontal" >
            <div class="form-group">
              <label >Fase Pertandingan</label>
              <input type="text" class="form-control"  value="<?php echo $row['fase_pertandingan']; ?>" readonly>
            </div>

            <div class="form-group">
              <label >Nama Team A</label>
              <input type="text" class="form-control"  value="<?php echo $row['namateamA']; ?>" readonly>
            </div>

            <div class="form-group">
              <label > Nama Team B</label>
              <input type="text" class="form-control"  value="<?php echo $row['namateamB']; ?>" readonly>
            </div>
            <div class="form-group">
              <label > Gol Team A</label>
              <input type="text" class="form-control"  value="<?php echo $row['golteamA']; ?>" readonly>
            </div>
            <div class="form-group">
              <label > Gol Team B</label>
              <input type="text" class="form-control"  value="<?php echo $row['golteamB']; ?>" readonly>
            </div>
            <div class="form-group">
              <label > Jam Pertandingan</label>
              <input type="text" class="form-control"  value="<?php echo $row['jam_pertandingan']; ?>" readonly>
            </div>
            <div class="form-group">
              <label >Tanggal Pertandingan</label>
              <input type="date" class="form-control"  value="<?php echo $row['tanggal_pertandingan']; ?>" readonly>
            </div>
             <div class="form-group">
              <label > Keterangan </label>
              <textarea rows="6" class="form-control" readonly><?php echo $row['Keterangan']; ?></textarea>
            </div>

            
            
              
          </form>
        </div>     
      </div>
    </div>

<?php }  ?>
<!-- Menu -->

<?php include("komponen/header.php")  ?>

    <section>
      <ul class="sidebar-menu">
       
        <li class=" treeview">
          <a href="index.php">
            <i class="fa fa-dashboard"></i> <span>Home</span>
            
          </a>
          
        </li>
       
        <li class=" treeview">
          <a href="#">
            <i class="fa fa-file-text-o"></i>
            <span>Data TIM</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li ><a href="Konfirmasi-tim.php"><i class="fa fa-hourglass-2"></i> Konfirmasi Tim</a></li>
            <li><a href="tim-peserta.php"><i class="fa fa-list"></i>Tim Peserta</a></li>
          </ul>
        </li>
         <li >
          <a href="pengumuman.php">
            <i class="fa fa-bullhorn"></i>
            <span>Pengumuman</span>
            
          </a>
        </li>
       <li class="active treeview">
          <a href="statistik.php">
            <i class="fa  fa-line-chart"></i>
            <span>Statistik Tim</span>
            
          </a>
        </li>
      </ul>
    </section>
  </aside>



  <!-- Header Content -->
  <div style="background-color: white; height: 1000px !important;" class="content-wrapper">
    <section  class="content-header">
      <div class="row">
        <div  class="col-lg-12">
           <ol  class="breadcrumb">
                <li>
                    <i class="fa fa-bullhorn"></i>  <a href="index.php">Home</a>
                </li>
                <li class="active">
                   Statistik
                </li>
            </ol>
        </div>
        </div>
    </section>



    <!-- Main content -->
    <section class="content">
        <?php   
        if(isset($_GET["view"])){
          $view = $_GET["view"];
        }

          $sql  = mysqli_query($koneksi, "SELECT * FROM statistik WHERE id = '$view' ");
          $row = mysqli_fetch_array($sql);
        ?>


        <section class="content">
          <div class="col-md-12">

            <!-- Header Table -->
            <div style="background-color: #e6e8ed" class="box box-primary">
              <div style="background-color: #615eb2; color: white " class="box-header with-border">
                <h2 align="center"><b>Statistik</b></h2>
              </div>

            <!-- Isi Statistik -->
            <div class="" style="padding:40px 50px;">
            <form class="form-horizontal" >

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
                <textarea rows="6" class="form-control" readonly value=""><?php echo $row['keterangan']; ?>
                </textarea>
              </div>
    
            </form>
            </div>  
             
            </div>
          </div>
        </section> 
  </section>
  </div><!-- /#page-wrapper -->
        
   
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="plugins/fastclick/fastclick.js"></script>
<script src="dist/js/app.min.js"></script>
<script src="dist/js/demo.js"></script>
<script src="../user/js/jquery.min.js"></script> 
<script src="../user/js/bootstrap.min.js"></script>
<script src="../user/js/bootstrapValidator.js"></script>
<script src="../user/js/jquery.min.js"></script>    
 
 <?php include("komponen/footer.php")  ?>

</body>
</html>

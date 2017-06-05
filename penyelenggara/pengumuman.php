<?php include("komponen/header.php")  ?>
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
         <li class="active treeview">
          <a href="pengumuman.php">
            <i class="fa fa-bullhorn"></i>
            <span>Pengumuman</span>
            
          </a>
        </li>
       <li class="treeview">
          <a href="statistik.php">
            <i class="fa  fa-line-chart"></i>
            <span>Statistik Tim</span>
            
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div style="background-color: white" class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section  class="content-header">
      <div class="row">
                    <div  class="col-lg-12">
                       <ol  class="breadcrumb">
                            <li>
                                <i class="fa fa-bullhorn"></i>  <a href="index.php">Home</a>
                            </li>
                            <li class="active">
                               Pengumuman
                            </li>
                        </ol>
                    </div>
                </div>
    </section>

    <!-- Main content -->
    <section class="content">
      
   
      <div style="left :70px"  class="col-lg-10">
      
              <table class="table table-bordered table-striped">
                <thead style="text-align: center; background: black;color: white">
                    <td style=" width: 50px">No</td>
                    <td style=" width: 200px" >Tanggal Pengumuman</td>
                    <td >Judul pengumuman</td>
                    <td style=" width: 100px">Detail</td>
                </thead>
                <tbody>
                <?php
                  $id_penyelenggara=$_SESSION['id_penyelenggara'];
                    $sql = mysqli_query($koneksi, "SELECT * FROM pengumuman WHERE id_penyelenggara='$id_penyelenggara'");
                  if(mysqli_num_rows($sql) == 0){
                    echo '<tr style="text-align:center;"><td colspan="4">Empty</td></tr>';
                  }
                  else{

                  $no = 1;
                  while($row = mysqli_fetch_assoc($sql)){
                      
                       echo '
                    <tr>
                      <td style="text-align: center">'.$no.'</td>
                      <td style="text-align:center;">'.$row['tgl_pengumuman'].'</td>
                      <td style="text-align:center;">'.$row['judul_pengumuman'].'</td>
                      <td style="text-align: center"> <a href="#" class="btn btn-sm btn-info"   data-id='.$row["id_pengumuman"].'><span  aria-hidden="true"></span> detail </a> </td> </tr>';
                      $no++;
                  }
                }
               
                ?>
              </tbody>
          </table>
           <div class=" col-xs-3">
          <button type="button" id="tambah-pengumuman"  class="btn btn-block btn-primary">Tambah Pengumuman</button>
          </div>

          
    </div><!-- /#page-wrapper -->
        </section>
      </div>
        
   

  

              <script src="../user/js/jquery.min.js"></script> 
              <script src="../user/js/bootstrap.min.js"></script>
              <script src="../user/js/bootstrapValidator.js"></script>

    
    

 <?php include("modal/tambah-pengumuman.php")  ?>


 

 <!---script tambah pengumuman-->
      <script>
      $(document).ready(function(){
          $("#tambah-pengumuman").click(function(){
              $("#Modal-pengumuman").modal();
          });
      });
      </script>
 <?php include("komponen/footer.php")  ?>

</body>
</html>

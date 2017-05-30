<?php include("header.php") ?>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li >
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Home</a>
                    </li>
                     <li>
                        <a href="pengumuman_peserta.php"><i class="fa fa-fw fa-list"></i> Pengumuman</a>
                    </li>
                    <li class="active">
                        <a href="myteam.php"><i class="fa fa-fw fa-plus"></i> Pemain</a>
                    </li>
                    <li>
                        <a href="jadwal.php"><i class="fa fa-fw fa-calendar"></i> Jadwal</a>
                    </li>
                    <li>
                        <a href="statisti_peserta.php"><i class="fa fa-fw fa-calendar"></i> Statistik</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Tambah Anggota tim
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <?php echo $_SESSION['nama_tim']; ?> </a>
                            </li>
                            <li class="active">
                                <i class="fa fa-plus"></i> Tambah Pemain Tim
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <!--isi-->
          <?php
          if(!isset($_GET['fail']))
          {
            echo""; 
          }
          else
          {?>
              <div class="alert alert-danger" role="alert"><b>Gagal Menambah pemain. Hanya dapat mendaftarkan 16 pemain per tim.<b></div> 
    <?php }
        ?>

            <button type="button" data-id_tim="<?=$id_tim;?>" class="btn btn-primary tambah-record pull-right" data-toggle="modal" data-target="#tambah"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambah Pemain</button>
        </div>

        <center>

        <?php if (!isset($_GET['order'])) {
          $kolom = 'id_pemain';
          $order = 'asc';
          }
          else if($_GET['order']=='desc')
          {
            $kolom = 'nama_pemain';
            $order = 'desc';
            } 
          else if($_GET['order']=='asc')
          {
            $kolom = 'nama_pemain';
            $order = 'asc';
            } ?>

          <!-- Table -->
        <table class="responstable">
          <tr>
          <th p align="center" ><b>NAMA</b>
        <?php
        if(!isset($_GET['order']) || $_GET['order']=='desc' )
          {?>
            <a class="pull-right" href="myteam.php?order=asc">
              <span class="glyphicon glyphicon-triangle-top" aria-hidden="true">
              </span></a>
        <?php
          }
          else if($_GET['order']=='asc')
            {?>
            <a class="pull-right" href="myteam.php?order=desc">
              <span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true">
            </a></span>
            <?php
            }
            ?>
          </th>
          <th p align="center" ><b>USIA</b></th>
          <th p align="center" ><b>ALAMAT</b></th>
          <th p align="center" ><b>ACTION</b></th>
          </tr>

          <?php
            $id_tim = $_SESSION['id_tim'];
            $result = mysqli_query($koneksi, "SELECT * FROM pemain WHERE id_tim = '$id_tim' ORDER BY $kolom $order");
            while($data = mysqli_fetch_array($result)){ 
          ?>
              <tr>
                <td p align="center" ><b><?php echo $data['nama_pemain'];?></b></td>
                <td p align="center" ><?php echo $data['usia_pemain']; ?></td>
                <td p align="center" ><?php echo $data['alamat_pemain']; ?></td>
                <td p align="center" >



               <a href="#" class="btn btn-success" role="button" data-foto_pemain="<?=$data['foto_pemain'];?>" data-id_pemain="<?=$data['id_pemain'];?>" data-id='.$data["id_pemain"].'><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>

                
                  <button type="button" class="btn btn-warning edit-record" data-nama="<?=$data['nama_pemain'];?>" data-usia="<?=$data['usia_pemain'];?>"  data-alamat="<?=$data['alamat_pemain'];?>" data-id_tim="<?=$data['id_tim'];?>" data-id_pemain="<?=$data['id_pemain'];?>" aria-label="Left Align" data-toggle="modal" data-target="#edit">
                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                  </button>
                  <button type="button" class="btn btn-danger hapus-record" data-nama="<?=$data['nama_pemain'];?>" data-id_pemain="<?=$data['id_pemain'];?>" aria-label="Left Align">
                    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                  </button>
              </tr>
          <?php
            }
          ?>
        </table>

      </div>
      </center>
  
            </div>

        </div>
            <!-- /.container-fluid -->


        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- Modal tambah -->
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Tambah Pemain</h4>
      </div>
      <div class="modal-body">
      </div>
    </div>
  </div>
</div>

<!-- Modal edit -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-warning">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Pemain</h4>
      </div>
      <div class="modal-body">
      </div>
    </div>
  </div>
</div>

<!-- Modal hapus -->
<div class="modal fade" id="hapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Hapus Pemain</h4>
      </div>
      <div class="modal-body">
      </div>
    </div>
  </div>
</div>


    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!--AJAX edit-->
     <script>
        $(function(){
            $(document).on('click','.edit-record',function(e){
                $("#edit").modal('show');
                $.post('modaledit.php',
                    {  id_pemain:$(this).attr('data-id_pemain'),
                      nama_pemain:$(this).attr('data-nama'),
                      usia_pemain:$(this).attr('data-usia'),
                      alamat_pemain:$(this).attr('data-alamat'),
                    }, 
                    function(html){
                        $(".modal-body").html(html);
                    }   
                );
            });
        });
    </script>
    <!--AJAX hapus-->
    <script>
        $(function(){
            $(document).on('click','.hapus-record',function(e){
                $("#hapus").modal('show');
                $.post('modalhapus.php',
                    { nama_pemain:$(this).attr('data-nama'),
                      id_pemain:$(this).attr('data-id_pemain')}, 
                    function(html){
                        $(".modal-body").html(html);
                    }   
                );
            });
        });
    </script>
    <!--AJAX tambah-->
    <script>
        $(function(){
            $(document).on('click','.tambah-record',function(e){
                $("#tambah").modal('show');
                $.post('modaltambah.php',
                    {id_tim:$(this).attr('data-id_tim')}, 
                    function(html){
                        $(".modal-body").html(html);
                    }   
                );
            });
        });
    </script>

<div class="modal fade" id="ModalDetail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-warning">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Detail Pemain </h4>
      </div>
      <div class="modal-body">
      </div>
    </div>
  </div>
</div>
<script>
        $(function(){
            $(document).on('click','.btn-success',function(e){
                $("#ModalDetail").modal('show');
                $.post('detailktp.php',
                    {  
                      id_pemain:$(this).attr('data-id_pemain'),
                      foto_pemain:$(this).attr('data-foto_pemain'),
                      
                    }, 
                    function(html){
                        $(".modal-body").html(html);
                    }   
                );
            });
        });
    </script>
 <!---script lihat detail-->

</body>

</html>

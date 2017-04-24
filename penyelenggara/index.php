
<?php
	include("koneksi.php");
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>E-Sport</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- Google Webfonts -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Theme Style -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<style>
  .modal-header, h5, .close {
      background-color: #5cb85c;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }
  </style>
	</head>
	<body>
		
	<header id="fh5co-header" role="banner">
		<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header"> 
				<!-- Mobile Toggle Menu Button -->
				<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#fh5co-navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
				<a class="navbar-brand" href="index.php">E-Sport</a>
				</div>
				<div id="fh5co-navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="active"><a href="index.php"><span>Home <span class="border"></span></span></a></li>
						<li><a href="instruksi.php"><span>Instruksi <span class="border"></span></span></a></li>
						<li><a href="#" id="daftar-penyelenggara"><span>Daftar Penyelenggara <span class="border"></span></span></a></li>
						<li><a href="#"><span>Daftar peserta <span class="border"></span></span></a></li>
						<li><a href="#" id="myBtn"><span>Log In <span class="border"></span></span></a></li>
						
						
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- END .header -->
	
	<div class="fh5co-slider">
		<div class="owl-carousel owl-carousel-fullwidth">
		    <div class="item" style="background-image:url(images/slide1.jpg)">
		    	<div class="fh5co-overlay"></div>
		    	<div class="container">
		    		<div class="row">
		    			<div class="col-md-8 col-md-offset-2">
			    			<div class="fh5co-owl-text-wrap">
						    	<div class="fh5co-owl-text text-center to-animate">
						    		<h1 class="fh5co-lead">SEPAK BOLA</h1>
									<h2 class="fh5co-sub-lead">cabang olahraga yang menggunakan bola yang umumnya terbuat dari bahan kulit dan dimainkan oleh dua tim yang masing-masing beranggotakan 11 (sebelas) orang pemain inti dan beberapa pemain cadangan</a></h2>
						    	</div>
						    </div>
					    </div>
		    		</div>
		    	</div>
		    </div>
		    <div class="item" style="background-image:url(images/slide2.jpg)">
		    	<div class="fh5co-overlay"></div>
		    	<div class="container">
		    		<div class="row">
		    			<div class="col-md-8 col-md-offset-2">
			    			<div class="fh5co-owl-text-wrap">
						    	<div class="fh5co-owl-text text-center to-animate">
						    		<h1 class="fh5co-lead">BOLA BASKET</h1>
									<h2 class="fh5co-sub-lead">olahraga bola berkelompok yang terdiri atas dua tim beranggotakan masing-masing lima orang yang saling bertanding mencetak poin dengan memasukkan bola ke dalam keranjang lawan. Bola basket sangat cocok untuk ditonton karena biasa dimainkan di ruang olahraga tertutup dan hanya memerlukan lapangan yang relatif kecil</a></h2>
						    	</div>
						    </div>
					    </div>
		    		</div>
		    	</div>
		    </div>
		    <div class="item" style="background-image:url(images/slide3.jpg)">
		    	<div class="fh5co-overlay"></div>
		    	<div class="container">
		    		<div class="row">
		    			<div class="col-md-8 col-md-offset-2">
			    			<div class="fh5co-owl-text-wrap">
						    	<div class="fh5co-owl-text text-center to-animate">
						    		<h1 class="fh5co-lead">BOLA VOLI</h1>
									<h2 class="fh5co-sub-lead">olahraga permainan yang dimainkan oleh dua grup berlawanan. Masing-masing grup memiliki enam orang pemain. Terdapat pula variasi permainan bola voli pantai yang masing-masing grup hanya memiliki dua orang pemain</a></h2>
						    	</div>
						    </div>
					    </div>
		    		</div>
		    	</div>
		    </div>
		    
		</div>
	</div>	
	<div id="fh5co-main">
		<!-- Features -->

		<div id="fh5co-features">
			<div class="container">
				<div class="row text-center">
					<div class="col-md-8 col-md-offset-2">
						<h2 class="fh5co-section-lead">SELAMAT DATANG DI E-SPORT</h2>
						<h3 class="fh5co-section-sub-lead">E-SPORT merupakan web menjembatani penyelenggara lomba dengan peserta lomba.</h3>
					</div>
				</div>


				</div>
			</div>
		</div>
		<!-- Features -->

		<div class="fh5co-spacer fh5co-spacer-lg"></div>		
		<!-- Products -->
		<div class="container" id="fh5co-products">
			<div class="row text-left">
				<div class="col-md-8">
					<h2 class="fh5co-section-lead">Galeri</h2>
				</div>

			</div>
			<div class="row">
				<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-mb30">
					<div class="fh5co-product">
						<img src="images/galeri1.jpg" alt="FREEHTML5.co Free HTML5 Template Bootstrap" class="img-responsive img-rounded to-animate">
						<h4>Kemenangan Timnas Indonesia</h4>
						<p>Foto kemenangan Timnas Indonesia saat melawan Malaysia.</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-mb30">
					<div class="fh5co-product">
						<img src="images/galeri2.jpg" alt="FREEHTML5.co Free HTML5 Template Bootstrap" class="img-responsive img-rounded to-animate">
						<h4>Foto Bersama Timnas</h4>
						<p>Foto ini adalah sesi foto bersama dari timnas Indonesia.</p>
					</div>
				</div>
				<div class="visible-sm-block visible-xs-block clearfix"></div>
				<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-mb30">
					<div class="fh5co-product">
						<img src="images/galeri3.jpg" alt="FREEHTML5.co Free HTML5 Template Bootstrap" class="img-responsive img-rounded to-animate">
						<h4>Bssket Putri</h4>
						<p>Foto ini adalah sesi foto bersama bola basket dari timnas Indonesia.</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-mb30">
					<div class="fh5co-product">
						<img src="images/galeri4.jpg" alt="FREEHTML5.co Free HTML5 Template Bootstrap" class="img-responsive img-rounded to-animate">
						<h4>Pertandingan Voli</h4>
						<p>Pertandingan bola voli Timnas Indonesia saat melawan singapore.</p>
					</div>
				</div>
				
			</div>
		</div>
		<!-- Products -->
		<div class="fh5co-spacer fh5co-spacer-lg"></div>

		<div id="fh5co-clients">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-client-logo text-center to-animate"><img src="images/client1.png" alt="FREEHTML5.co Free HTML5 Bootstrap Template" class="img-responsive"></div>
					<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-client-logo text-center to-animate"><img src="images/client2.png" alt="FREEHTML5.co Free HTML5 Bootstrap Template" class="img-responsive"></div>
					<div class="visible-sm-block visible-xs-block clearfix"></div>
					<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-client-logo text-center to-animate"><img src="images/client3.png" alt="FREEHTML5.co Free HTML5 Bootstrap Template" class="img-responsive"></div>
					<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-client-logo text-center to-animate"><img src="images/client4.png" alt="FREEHTML5.co Free HTML5 Bootstrap Template" class="img-responsive"></div>
				</div>
			</div>
		</div>

		<div class="fh5co-bg-section" style="background-image: url(images/slide_2.jpg); background-attachment: fixed;">
			<div class="fh5co-overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="fh5co-hero-wrap">
							<div class="fh5co-hero-intro text-center">
								<h1 class="fh5co-lead"><span class="quo">&ldquo;</span>Competition is always a good thing. It forces us to do our best. A monopoly renders people complacent and satisfied with mediocrity. <span class="quo">&rdquo;</span></h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

	<footer id="fh5co-footer">
		
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="fh5co-footer-widget">
						<h2 class="fh5co-footer-logo">E-Sport</h2>
						<p>Suatu media yang menjembatani antara penyelenggara lomba dan peserta lomba.</p>
					</div>
					<div class="fh5co-footer-widget">
						<ul class="fh5co-social">
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-instagram"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-youtube"></i></a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-3 col-sm-6">
					<div class="fh5co-footer-widget top-level">
						<h4 class="fh5co-footer-lead ">Contact Us</h4>
						<ul>
							<li><a href="#">Ketua(083123444355)</a></li>
							<li><a href="#">Sekretaris(085777888999)</a></li>
							<li><a href="#">Bukit Jimbaran</a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-3 col-sm-6">
					<div class="fh5co-footer-widget top-level">
						<h4 class="fh5co-footer-lead ">Pengembang</h4>
						<ul class="fh5co-list-check">
							<li><a href="#">Teja (CEO)</a></li>
							<li><a href="#">KIM (Programmer)</a></li>
							<li><a href="#">Rudi (Analyzer)</a></li>
							<li><a href="#">Wahyudi (Database Analyst)</a></li>
							<li><a href="#">Eddy (designer)</a></li>
						</ul>
					</div>
				</div>
				
				<div class="visible-sm-block clearfix"></div>
			</div>

			<div class="row fh5co-row-padded fh5co-copyright">

			</div>
		</div>

	</footer>


	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<!-- Main JS -->
	<script src="js/main.js"></script>


	<div class="container">
    <!-- Modal log in -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h5><span class="glyphicon glyphicon-lock"></span> Login</h5>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" id="psw" placeholder="Enter password">
            </div>
            
              <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>     
      </div>
    </div>
  </div> 

  <!-- Modal daftar penyelenggara -->
  <div class="modal fade" id="Modal-penelenggara" role="dialog">
    <div class="modal-dialog">
    
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h5> Pendaftaran Penyelenggara</h5>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" class="form-horizontal" action="proses-tambah-penyelenggara.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
              <label ><span class="glyphicon glyphicon-home"></span>  Nama Penyelenggara</label>
              <input type="text" class="form-control" name="nama_penyelenggara" placeholder="Masukan Nama Penyelenggara">
            </div>
            <div class="form-group">
              <label ><span class="glyphicon glyphicon-file"></span>  Nama Lomba</label>
              <input type="text" class="form-control" name="nama_lomba" placeholder="masukan nama lomba">
            </div>
            <div class="form-group">
              <label ><span class="glyphicon glyphicon-send"></span>  lokasi Kegiatan</label>
              <input type="text" class="form-control" name="lokasi" placeholder="masukan lokasi kegiatn">
            </div>
            <div class="form-group">
              <label ><span class="glyphicon glyphicon-calendar"></span>  Waktu Lomba</label>
              <input type="date" class="form-control" name="waktu_lomba" placeholder="masukan waktu">
            </div>
            <div class="form-group">
					<label ><span class="glyphicon glyphicon-calendar"></span>  Kategori Kegiatan</label>
					
					<select name="kategori_lomba" class="form-control" required>
					<?php 
						$sql = mysqli_query($koneksi, "SELECT * FROM kategori_lomba ORDER BY id_kategori_lomba ASC");
						if(mysqli_num_rows($sql) == 0)
						{
							echo '<tr><td colspan="8">Data Tidak Ditemukan.</td></tr>';
						}
						else
						{
							echo '<option value=""> Pilih </option>'; 
							while($row = mysqli_fetch_assoc($sql))
							{
								echo  '<option value='.$row['id_kategori_lomba'].'>'.$row['nama_kategori_lomba'].'</option>';
		 					}
		 				}
	 				?>
					</select>
					
				</div>

            <div class="form-group">
              <label ><span class="glyphicon glyphicon-envelope"></span> Email</label>
              <input type="text" class="form-control" name="email_penyelenggara" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-phone-alt"></span> No. Telepon</label>
              <input type="text" class="form-control" name="nohp" placeholder="masukan no hp">
            </div>
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" name="usrname_penyelenggara" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" name="psw_penyelenggara" placeholder="Enter password">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-picture"></span> Bukti Pembayaran</label>
              <input type="file" name="bukti_pembayaran_penyelenggara" class="form-control" placeholder="foto" required>
            </div>
            
						
					
            
              <button type="submit" href="index.php" type="submit" name="add" value="Simpan" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> daftar</button>
          </form>
        </div>     
      </div>
    </div>
  </div> 
</div>
 

<!---script daftar log in-->
<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
</script>


<!---script daftar penyelenggara-->
<script>
$(document).ready(function(){
    $("#daftar-penyelenggara").click(function(){
        $("#Modal-penelenggara").modal();
    });
});
</script>

	
	</body>
</html>

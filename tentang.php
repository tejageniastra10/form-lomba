<?php
	include("koneksi.php");
?>

<?php
session_start();


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

	</head>
	<body>
		
	<header id="fh5co-header" role="banner">
		<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header"> 
				<!-- Mobile Toggle Menu Button -->
				<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle visible-xs-block" data-toggle="collapse" data-target="#fh5co-navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
				<a class="navbar-brand" href="index.php">E-Sport</a>
				</div>
				<div id="fh5co-navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li ><a href="index.php"><span>Home <span class="border"></span></span></a></li>
						<li class="active"><a href="tentang.php"><span>Tentang <span class="border"></span></span></a></li>
						
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- END .header -->
	
	<aside class="fh5co-page-heading">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="fh5co-page-heading-lead">
						TENTANG E-SPORT

					</h1>
					
				</div>
			</div>
		</div>
	</aside>
	
	<div id="fh5co-main">
		
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<h2>E-SPORT</h2>
					<span align="justify"><p>Aplikasi Espot ini merupakan aplikasi yang berfungsi untuk menghubungakn penyelenggara event olahraga dengan tim atau peserta. Event olahraga yang dapat di daftarkan dalam sistem ini adalah sepak bola, futsal dan basket. Aplikasi ini berfungsi dalam proses pendaftaran, penjadwalan, pemberian pengumunan, dan statistic pertandingan.
					<p>Pengguna sistem ini terdiri atas penyelenggara event olahraga dan tim atau peserta event olahraga. Untuk membuat event olah raga penyelanggara event cukup membayar biaya penyelenggaraan event sebesar 20.000. Sedangkan untuk biaya pendftaran peserta kepada pihak penyelenggara ditetukan oleeh masing-masing penyelenggara. Dalam sistem ini, adapaun fitur-fitur yang dapat digunakan oleh penyelenggara dan peserta adalah sebagai berikut.</span>
					
					<ul>Penyelenggara.</ul>
					<ul>
					   <li>Membuat akun penyelenggara yang berisi identitas dari event lomba.</li>
					   <li>Membuat event olah raga dalam kategori oleh raga sepak bola, futsal dan basket.</li>
					   <li>Melakukan pembayaran kepada Admin sistem dengan mengirimkan foto bukti pembayaran.</li>
					   <li>Memberikan pengumuman kepada tim yang terdaftar dalam event olahraga tersebut.</li>
					   <li>Melakukan konfirmasi perubahan status tim dari tidak aktif menjadi aktif setelah dilakukan proses pembayaran.</li>
					   <li>Melihat tim yang terdaftar dalam event olahraga tersebut.</li>
					   <li>Melihat pemain pada setiap tim yang terdaftar.</li>
					   <li>Menghapus tim yang berstatus non aktif.</li>
					   <li>Melakukan proses pengelompokan tim menjadi beberapa grup.</li>
					   <li>Melakukan proses penjadwalan pertandingan.</li>
					   <li>Melakukan input ststisti pertandngan.</li>
					</ul>
					<br>
					<ul>Tim / Peserta.</ul>
					<ul>
					   <li>Membuat akun peserta yang berisi identitaas dari peserta.</li>
					   <li>Melakukan proses penambahan, edit, melihat dan hapus pemain.</li>
					   <li>Melakukan proses pembayaran kepada penyelenggara dengan mengirimkan foto bukti pembayaran.</li>
					   <li>Melihat pengumuman pada event tersebut.</li>
					   <li>Melihat seluruh tim dan para pemain setiap tim dalam event tersebut.</li>
					   <li>Melihat hasil undian grup.</li>
					   <li>Melihat penjadwalan pertandingan.</li>
					   <li>Melihat statistic pertandingan.</li>

					</ul>

					<div class="fh5co-spacer fh5co-spacer-xxs"></div>
					<div class="row">
					</div>
					
				</div>

				<div class="col-md-4">

					<div class="fh5co-sidebox">
						<h3 class="fh5co-sidebox-lead">Contact Us</h3>	
						<ul class="fh5co-list-check">
							<li>Ketua (083123444355)</li>
							<li>Sekretaris(085777888999)</li>
							<li>Bukit Jimbaran.</li>

						</ul>
					</div>

					<div class="fh5co-sidebox">
						<h3 class="fh5co-sidebox-lead">Pengembang</h3>	
						<ul class="fh5co-list-check">
							<li>Teja (CEO)</li>
							<li>KIM (Programmer)</li>
							<li>Rudi (Analyzer)</li>
							<li>Wahyudi (Database Analyst)</li>
							<li>Eddy (designer)</li>

						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</div>

	<div class="fh5co-spacer fh5co-spacer-lg"></div>

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

	
	</body>
</html>

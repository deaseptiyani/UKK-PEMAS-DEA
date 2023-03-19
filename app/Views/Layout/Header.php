<!doctype html>
<html lang="en">
  <head>
  	<title>APM Margamukti</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="/assets/css/style.css">

	</head>
	<body>
		<style>
			@media print {
				.form-group,
				.btn,
				.font-weight-bold{
					display: none;
				}
			}
			</style>
		<div class="container">
			<nav class="navbar navbar-expand-lg ftco_navbar ftco-navbar-light" id="ftco-navbar">
		    <div class="container">
		    	<a class="navbar-brand" href="/Dashboardpetugas">APM Margamukti</a>
	
		      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="fa fa-bars"></span> APM Margamukti </button>
		      <div class="collapse navbar-collapse" id="ftco-nav">
		        <ul class="navbar-nav ml-auto mr-md-3">
		        	<li class="nav-item active"><a href="/Dashboardpetugas" class="nav-link">Dashboard</a></li>
					<?php if(session()->get('level')=='admin'){?>
						<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"><i class="fas fa-database"> Master Data </i></a>
						<div class="dropdown-menu">
						<a class="dropdown-item" href="/petugas/masyarakat">Data Masyarakat</a>
						<a class="dropdown-item" href="/petugas/user">Data Petugas</a>
						</div>
						</li>
						<?php } ?>
						<!-- Dropdown -->
						<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#"
						id="navbardrop" data-toggle="dropdown"> Pengaduan Masyarakat </a>
						<div class="dropdown-menu">
						<a class="dropdown-item" href="/verifikasi">Verifikasi & Validasi</a>
						<a class="dropdown-item" href="/respon">Hasil Respon</a>
						</div>
						</li>
					<?php if(session()->get('level')=='admin'){?>
		        	<li class="nav-item"><a href="/laporan/pengaduan" class="nav-link">Laporan</a></li>
					<?php } ?>
		          <li class="nav-item"><a href="/masyarakat/logout" class="nav-link">Logout</a></li>

		        </ul>
		      </div>
		    </div>
		  </nav>
    <!-- END nav -->
  </div>

	</section>

	<script src="/assets/js/jquery.min.js"></script>
  <script src="/assets/js/popper.js"></script>
  <script src="/assets/js/bootstrap.min.js"></script>
  <script src="/assets/js/main.js"></script>

	</body>
</html>


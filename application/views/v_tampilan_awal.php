<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title><?php echo $title ?></title>
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/adminlte.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

	<style type="text/css">
		::selection {
			background-color: #E13300;
			color: white;
		}

		::-moz-selection {
			background-color: #E13300;
			color: white;
		}

		body {
			background-color: #fff;
			margin: 40px;
			font: 13px/20px normal Helvetica, Arial, sans-serif;
			color: #4F5155;
		}

		a {
			color: #003399;
			background-color: transparent;
			font-weight: normal;
		}

		h1 {
			color: #444;
			background-color: transparent;
			border-bottom: 1px solid #D0D0D0;
			font-size: 19px;
			font-weight: normal;
			margin: 0 0 14px 0;
			padding: 14px 15px 10px 15px;
		}

		code {
			font-family: Consolas, Monaco, Courier New, Courier, monospace;
			font-size: 12px;
			background-color: #f9f9f9;
			border: 1px solid #D0D0D0;
			color: #002166;
			display: block;
			margin: 14px 0 14px 0;
			padding: 12px 10px 12px 10px;
		}

		#body {
			margin: 0 15px 0 15px;

		}

		p.footer {
			text-align: right;
			font-size: 11px;
			border-top: 1px solid #D0D0D0;
			line-height: 32px;
			padding: 0 10px 0 10px;
			margin: 20px 0 0 0;
		}

		#container {
			margin: 10px;
			border: 1px solid #D0D0D0;
			box-shadow: 0 0 8px #D0D0D0;

		}

		#row {
			display: flex;
			justify-content: center;
			flex-direction: row-reverse;
		}

		img:hover {
			width: 400px;
			transition: all .3s ease-in-out;
		}
	</style>
</head>

<body>

	<div id="">
		<!-- <h1>PTSP Pengadilan Agama Bojonegoro</h1>
	<div align="center"><img src="<?php echo base_url(); ?>assets/img/zi.jpg" alt="Zona Integritas" width="1800" height="400"></div> -->


		<div id="body">
			<div class="container col-sm-12">
				<div class="card">
					<div class="card-header bg-danger">
						<h3 class="card-title">
							<i class="ion ion-clipboard mr-1"></i>
							A T M | P A | B O J O N E G O R O
						</h3>
					</div>
					<!-- /.card-header -->
					<div class="card-body">
						<!-- batas -->
						<div class="row" align="center" style="margin-top: 10px">
							<!-- CARD -->
							<div class="col-md-6">
								<div class="card card-primary card-outline">
									<div class="card-body box-profile">
										<div class="text-center">
											<a href="http://localhost/ptsp/welcome/dinamis/"><img src="<?php echo base_url(); ?>assets/img/syarat.png" alt="User profile picture" width="350"></a>
										</div>
										<!--  <div class="caption">
				              <h5 class="style3" style="margin-top: 20px"><strong>SYARAT PENDAFTARAN</strong></h5>
				            </div> -->
									</div>
								</div>
							</div>
							<!-- CARD -->

							<!-- CARD -->
							<div class="col-md-6">
								<div class="card card-primary card-outline">
									<div class="card-body box-profile">
										<div class="text-center">
											<a href="<?php echo base_url('welcome') ?>"><img src="<?php echo base_url(); ?>assets/img/info.png" alt="User profile picture" width="350"></a>
										</div>
										<!--  <div class="caption">
				              <h5 class="style3" style="margin-top: 20px"><strong>INFORMASI PERKARA</strong></h5>
				            </div> -->
									</div>
								</div>
							</div>
							<!-- CARD -->


						</div>
						<!-- batas -->
					</div>
					<!-- /.card-body -->
					<div class="card-footer clearfix">
						<marquee>
							<h2>PENGADILAN AGAMA BOJONEGORO : Visi "Terwujudnya Pengadilan Agama Bojonegoro Yang Agung"</h2>
						</marquee>
					</div>
				</div>
				<!-- /.card -->
				<!-- batas bawah -->
			</div>

		</div>


	</div>


</body>

</html><!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>
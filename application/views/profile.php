
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Profil Mahasiswa</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/profile/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/profile/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/profile/css/bootstrap.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/profile/css/style.css">

	<!-- Modernizr JS -->
	<script src="<?= base_url(); ?>assets/profile/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="<?= base_url(); ?>assets/profile/js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body style="background-image: url(<?= base_url(); ?>assets/profile/images/bg.jpg);">
	
	<div id="t-main">
		<div class="t-tab-wrap">
			<ul class="t-tab-menu">
				<li class="active"><a href="#" data-tab="1"><span class="icon icon-user"></span><span class="menu-text">Profil</span></a></li>
				<li><a href="#" data-tab="2"><span class="icon icon-heart"></span><span class="menu-text">Hobi</span></a></li>
				<li><a href="#" data-tab="3"><span class="icon icon-graduation-cap"></span><span class="menu-text">Pendidikan</span></a></li>
				<li onclick="document.location='<?= base_url('menu/logout') ?>'"><a href="#"><span class="icon icon-sign-out"></span><span class="menu-text">Keluar</span></a></li>
			</ul>
			<div class="t-tab-content active" data-content="1">
				<div class="t-content-inner text-center">
					<div class="row row-bottom-padded-sm">
						<div class="col-md-12">
							<figure>
								<i class="icon-smile-o" style="color: white; font-size: 128px"></i>
							</figure>
							<h1> <?= $data['nama_mahasiswa'] ?></h1>
							<div style="text-align: left;">
								<p>
									NPM: <?= $data['npm'] ?> <br>
									Kelas: <?= $data['kelas'] ?> <br>
									Jenis Kelamin: <?= $data['jenis_kelamin'] == 'L' ? 'Laki-laki' : 'Perempuan' ?> <br>
									Agama: <?= $data['agama'] ?> <br>
									Tempat Tanggal Lahir: <?= $data['tempat_lahir'] ?>, <?= $data['tgl_lahir'] ?> <br>
									Alamat: <?= $data['alamat'] ?> <br>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="t-tab-content" data-content="2">
				<div class="t-content-inner">
					<div class="row">
						<div class="col-md-12">
							<figure class="text-center">
								<i class="icon-heart" style="color: white; font-size: 128px"></i>
							</figure>
							<p>Dari banyak kegiatan yang saya lakukan, saya memiliki beberapa hobi diantaranya</p>

							<?php
								$hobbies = explode(';', $data['hobi']);
								foreach ($hobbies as $hobi) {
							?>
							<div class="t-feature">
								<div class="t-icon">
									<i class="icon-check-square-o"></i>
								</div>
								<div class="t-text">
									<h2 style="margin-top: 16px"><?= $hobi ?></h2>
								</div>
							</div>
							<?php } ?>

						</div>
						
					</div>
				</div>
			</div>
			<div class="t-tab-content" data-content="3">
				<div class="t-content-inner">
					<div class="row">
						<div class="col-md-12">

							<p>Sebelum saya dapat menginjak perkuliahan, tentunya saya harus lulus dari jenjang pendidikan yang sebelumnya. Maka inilah jenjang pendidikan saya sebelumnya</p>

							<?php
								$educations = explode(';', $data['pendidikan']);
								foreach ($educations as $pendidikan) {
							?>
							<div class="t-feature">
								<div class="t-icon">
									<i class="icon-check-square-o"></i>
								</div>
								<div class="t-text">
									<h2 style="margin-top: 16px"><?= $pendidikan ?></h2>
								</div>
							</div>
						<?php } ?>

						</div>
						
					</div>
				</div>
			</div>
		</div>
		<footer id="t-footer">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center">
					<small>
						&copy;2020 Profil Mahasiswa.
						<span class="t-author">
							<a href="#">Tessa Tiara Ningtias</a>
						</span>
					</small>
				</div>
			</div>
		</footer>
	</div>
	
	<!-- jQuery -->
	<script src="<?= base_url(); ?>assets/profile/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="<?= base_url(); ?>assets/profile/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="<?= base_url(); ?>assets/profile/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="<?= base_url(); ?>assets/profile/js/jquery.waypoints.min.js"></script>
	<!-- Easy PieChart -->
	<script src="<?= base_url(); ?>assets/profile/js/jquery.easypiechart.min.js"></script>
	<!-- MAIN JS -->
	<script src="<?= base_url(); ?>assets/profile/js/main.js"></script>

	</body>
</html>


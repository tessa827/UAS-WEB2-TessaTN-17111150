<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>UAS Web Programming 2 - <?= $title; ?></title>

	<!-- Custom fonts for this template-->
	<link href="<?= base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="<?= base_url(); ?>assets/css/sb-admin-2.min.css" rel="stylesheet">

	<!-- DataTables -->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendor/datatables/datatables.min.css">

</head>

<body id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">

		<!-- Sidebar -->
		<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

			<!-- Sidebar - Brand -->
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url() ?>">
				<div class="sidebar-brand-icon">
					<i class="fas fa-chalkboard-teacher"></i>
				</div>
				<div class="sidebar-brand-text mx-3">Admin</div>
			</a>

			<div class="sidebar-heading">
				Menu
			</div>
			<li class="nav-item <?php echo !$this->uri->segment(2) ? 'active' : null; ?>">
				<a class="nav-link" href="<?= base_url(); ?>">
					<i class="fas fa-fw fa-home"></i>
					<span>Home</span>
				</a>
			</li>
			<?php if ($this->session->userdata('level') == 'admin') { ?>
			<li class="nav-item <?php echo $this->uri->segment(2) == 'mahasiswa' || $this->uri->segment(2) == 'detailMahasiswa' ? 'active' : null; ?>">
				<a class="nav-link" href="<?= base_url('menu/mahasiswa'); ?>">
					<i class="fas fa-fw fa-user-graduate"></i>
					<span>Mahasiswa</span>
				</a>
			</li>
			<?php } ?>

			<!-- Divider -->
			<hr class="sidebar-divider d-none d-md-block">

			<!-- Sidebar Toggler (Sidebar) -->
			<div class="text-center d-none d-md-inline">
				<button class="rounded-circle border-0" id="sidebarToggle"></button>
			</div>

		</ul>
		<!-- End of Sidebar -->

		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- Main Content -->
			<div id="content">

				<!-- Topbar -->
				<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

					<!-- Sidebar Toggle (Topbar) -->
					<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
						<i class="fa fa-bars"></i>
					</button>

					<!-- Topbar Navbar -->
					<ul class="navbar-nav ml-auto">

						<!-- Nav Item - Search Dropdown (Visible Only XS) -->
						<li class="nav-item dropdown no-arrow d-sm-none">
							<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="mr-2 d-inline text-gray-600 small"><?= $this->session->userdata('username') ?></span>
								<!-- <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60"> -->
								<i class="fas fa-angle-down fa-lg"></i>
							</a>
							<!-- Dropdown - User Information -->
							<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
								<a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#logoutModal">Logout</a>
							</div>
						</li>

						<li class="nav-item dropdown no-arrow d-none d-sm-block">
							<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $this->session->userdata('username') ?></span>
								<!-- <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60"> -->
								<i class="fas fa-angle-down fa-lg"></i>
							</a>
							<!-- Dropdown - User Information -->
							<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
								<a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#logoutModal">Logout</a>
							</div>
						</li>

					</ul>

				</nav>
				<!-- End of Topbar -->

				<!-- Begin Page Content -->
				<div class="container-fluid">

					<!-- Page Heading -->
					<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
					<?php include 'pages/' . $page; ?>

				</div>
				<!-- /.container-fluid -->

			</div>
			<!-- End of Main Content -->

			<!-- Footer -->
			<footer class="sticky-footer bg-white">
				<div class="container my-auto">
					<div class="copyright text-center my-auto">
						<span>Template by <a href="https://startbootstrap.com">StartBootstrap</a></span>
					</div>
				</div>
			</footer>
			<!-- End of Footer -->

		</div>
		<!-- End of Content Wrapper -->

	</div>
	<!-- End of Page Wrapper -->

	<!-- Scroll to Top Button-->
	<a class="scroll-to-top rounded" href="#page-top">
		<i class="fas fa-angle-up"></i>
	</a>

	<!-- Logout Modal-->
	<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Yakin ingin keluar?</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">Klik tombol "Logout" dibawah untuk mengakhiri sesi sekarang.</div>
				<div class="modal-footer">
					<button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
					<a class="btn btn-primary" href="<?= base_url('menu/logout'); ?>">Logout</a>
				</div>
			</div>
		</div>
	</div>

	<!-- Bootstrap core JavaScript-->
	<script src="<?= base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
	<script src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Core plugin JavaScript-->
	<script src="<?= base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

	<!-- DataTables -->
	<script src="<?= base_url(); ?>assets/vendor/datatables/datatables.min.js"></script>

	<!-- Custom scripts for all pages-->
	<script src="<?= base_url(); ?>assets/js/sb-admin-2.min.js"></script>

</body>

</html>

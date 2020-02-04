<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Tessa Tiara Ningtias">

	<title>UAS Web Programming 2 - Login</title>

	<!-- Custom fonts for this template-->
	<link href="<?= base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="<?= base_url(); ?>assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

	<div class="container">

		<!-- Outer Row -->
		<div class="row justify-content-center">

			<div class="col-xl-4 col-lg-6 col-md-9">

				<div class="card o-hidden border-0 shadow-lg" style="margin-top: 18vh">
					<div class="card-body p-0">
						<!-- Nested Row within Card Body -->
						<div class="row">
							<div class="col">
								<div class="p-5">
									<div class="text-center">
										<h1 class="h4 text-gray-900 mb-4">Login</h1>
									</div>
									<?php if ($this->session->flashdata('failed')) { ?>
										<div class="alert alert-danger fade show">
											<?= $this->session->flashdata('failed'); ?>
											<button class="close" data-dismiss="alert">&times;</button>
										</div>
									<?php } else if ($this->session->flashdata('success')) { ?>
										<div class="alert alert-success fade show">
											<?= $this->session->flashdata('success'); ?>
											<button class="close" data-dismiss="alert">&times;</button>
										</div>
									<?php } ?>
									<form class="user" method="POST" action="<?= base_url('login/proceed'); ?>">
										<div class="form-group">
											<input type="text" name="username" class="form-control form-control-user" placeholder="Username" autofocus>
										</div>
										<div class="form-group">
											<input type="password" name="password" class="form-control form-control-user" placeholder="Password">
										</div>
										<button class="btn btn-primary btn-user btn-block">
											Login
										</button>
										<div class="text-center mt-3">
											<a class="small" href="javascript:void(0)" data-target="#register-modal" data-toggle="modal">Belum Punya Akun? Daftar!</a>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

		</div>

	</div>

	<div class="modal fade" id="register-modal">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Register</h5>
					<button class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<form class="user" method="POST" action="<?= base_url('menu/register'); ?>">
						<div class="form-group">
							<input type="text" name="username" class="form-control form-control-user" placeholder="Username (NPM)" autofocus>
						</div>
						<div class="form-group">
							<input type="password" name="password" class="form-control form-control-user" placeholder="Password">
						</div>
						<button class="btn btn-primary btn-user btn-block">
							Register
						</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- Bootstrap core JavaScript-->
	<script src="<?= base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
	<script src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Core plugin JavaScript-->
	<script src="<?= base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

	<!-- Custom scripts for all pages-->
	<script src="<?= base_url(); ?>assets/js/sb-admin-2.min.js"></script>

</body>

</html>

<div class="row">
	<div class="col-6 mx-auto">
		<div class="card">
			<div class="card-body">
				<h5 class="card-title font-weight-bold text-primary">Selamat Datang <?= $this->session->userdata('level') == 'admin' ? $this->session->userdata('username') : $data['nama_mahasiswa']; ?>!</h5>
			</div>
		</div>
	</div>
</div>
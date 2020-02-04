<div class="row">
	<div class="col-12">
		<div class="card border-left-primary mb-5">
			<div class="card-body">
				<div class="row col justify-content-between mb-3">
					<h5 class="card-title text-primary font-weight-bold my-auto">Data Mahasiswa</h5>
					<button class="btn btn-outline-primary" data-toggle="modal" data-target="#modal-add-mahasiswa">Tambah Mahasiswa</button>
				</div>
				<?php if ($this->session->flashdata('success')) { ?>
					<div class="alert alert-success fade show">
						<?= $this->session->flashdata('success'); ?>
						<button class="close" data-dismiss="alert">&times;</button>
					</div>
				<?php } else if ($this->session->flashdata('failed')) { ?>
					<div class="alert alert-danger fade show">
						<?= $this->session->flashdata('failed'); ?>
						<button class="close" data-dismiss="alert">&times;</button>
					</div>
				<?php } ?>
				<div class="table-responsive">
					<table class="table table-striped table-hover datatables">
						<thead>
							<tr>
								<th>No.</th>
								<th>NPM</th>
								<th style="min-width: 160px">Nama Mahasiswa</th>
								<th style="min-width: 100px">Kelas</th>
								<th>Jenis Kelamin</th>
								<th>Agama</th>
								<th>Alamat</th>
								<th>TTL</th>
								<th class="text-center" style="min-width: 60px">Pilihan</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; foreach ($mahasiswa as $data) { ?>
							<tr>
								<td><?= $no++; ?>.</td>
								<td><?= $data->npm ?></td>
								<td><?= $data->nama_mahasiswa ?></td>
								<td><?= $data->kelas ?></td>
								<td><?= $data->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' ?></td>
								<td><?= $data->agama ?></td>
								<td><?= $data->alamat ?></td>
								<td><?= $data->tempat_lahir . ', ' . $data->tgl_lahir ?></td>
								<td class="text-center">
									<a href="<?= base_url('menu/detailMahasiswa/' . $data->npm); ?>"><i class="fas fa-info-circle mr-2 text-info"></i></a>
									<a href="<?= base_url('menu/editMahasiswa/' . $data->npm) ?>"><i class="fas fa-edit mr-2 text-primary"></i></a>
									<a href="<?= base_url('menu/deleteMahasiswa/' . $data->npm); ?>" onclick="return confirm('Anda yakin ingin menghapus mahasiswa ini')"><i class="fas fa-trash text-danger"></i></a>
								</td>
							</tr>
						<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="modal-add-mahasiswa">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Tambah Mahasiswa</h5>
				<button class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<form action="<?= base_url('menu/insertMahasiswa'); ?>" method="POST">
					<div class="form-group">
						<!-- <label class="control-label">NPM</label> -->
						<input type="text" name="npm" class="form-control" placeholder="NPM" autofocus>
					</div>
					<div class="form-group">
						<input type="text" name="nama" class="form-control" placeholder="Nama Mahasiswa">
					</div>
					<div class="form-group">
						<input type="text" name="kelas" class="form-control" placeholder="Kelas">
					</div>
					<div class="form-group">
						<select name="jenis_kelamin" class="form-control">
							<option selected disabled>--- Pilih Jenis Kelamin ---</option>
							<option value="L">Laki-laki</option>
							<option value="P">Perempuan</option>
						</select>
					</div>
					<div class="form-group">
						<input type="text" name="agama" class="form-control" placeholder="Agama">
					</div>
					<div class="form-group">
						<textarea class="form-control" name="alamat" placeholder="Alamat"></textarea>
					</div>
					<div class="form-group">
						<input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir">
					</div>
					<div class="form-group">
						<input type="date" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir">
					</div>
					<div class="form-group">
						<textarea class="form-control" name="pendidikan" placeholder="Pendidikan"></textarea>
						<small class="form-text text-muted">Gunakan ; (titik koma) sebagai pemisah. Contoh: SD X;SMP X;SMK X</small>
					</div>
					<div class="form-group">
						<textarea class="form-control" name="hobi" placeholder="Hobi"></textarea>
						<small class="form-text text-muted">Gunakan ; (titik koma) sebagai pemisah. Contoh: Berenang;Makan;Tidur</small>
					</div>
					<div class="form-group">
						<button class="btn btn-primary float-right">Simpan</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
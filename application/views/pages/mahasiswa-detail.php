<div class="row">
	<div class="col-7 mx-auto">
		<div class="card mb-5">
			<div class="card-body">
				<div class="form-group">
					<label class="control-label">NPM</label>
					<input type="text" class="form-control" value="<?= $data['npm'] ?>" readonly>
				</div>
				<div class="form-group">
					<label class="control-label">Nama Mahasiswa</label>
					<input type="text" class="form-control" value="<?= $data['nama_mahasiswa'] ?>" readonly>
				</div>
				<div class="form-group">
					<label class="control-label">Kelas</label>
					<input type="text" class="form-control" value="<?= $data['kelas'] ?>" readonly>
				</div>
				<div class="form-group">
					<label class="control-label">Jenis Kelamin</label>
					<input type="text" class="form-control" value="<?= $data['jenis_kelamin'] == 'P' ? 'Perempuan' : 'Laki-laki' ?>" readonly>
				</div>
				<div class="form-group">
					<label class="control-label">Agama</label>
					<input type="text" class="form-control" value="<?= $data['agama'] ?>" readonly>
				</div>
				<div class="form-group">
					<label class="control-label">Alamat</label>
					<textarea class="form-control" readonly><?= $data['alamat'] ?></textarea>
				</div>
				<div class="form-group">
					<label class="control-label">Tempat Tanggal Lahir</label>
					<input type="text" class="form-control" value="<?= $data['tempat_lahir'].', '.$data['tgl_lahir'] ?>" readonly>
				</div>
				<div class="form-group">
					<label class="control-label">Hobi</label>
					<textarea class="form-control" readonly><?= preg_replace('/\s+/', ' ', str_replace(';', ', ', $data['hobi'])) ?></textarea>
				</div>
				<div class="form-group">
					<label class="control-label">Pendidikan</label>
					<textarea class="form-control" readonly><?= preg_replace('/\s+/', ' ', str_replace(';', ', ', $data['pendidikan'])) ?></textarea>
				</div>
			</div>
		</div>
	</div>
</div>
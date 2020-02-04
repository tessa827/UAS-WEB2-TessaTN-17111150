<div class="row">
	<div class="col-7 mx-auto">
		<div class="card mb-5">
			<div class="card-body">
				<form action="<?= base_url('menu/updateMahasiswa/' . $data['npm']) ?>" method="POST">
					<div class="form-group">
						<label class="control-label">NPM</label>
						<input type="text" class="form-control" value="<?= $data['npm'] ?>" name="npm">
					</div>
					<div class="form-group">
						<label class="control-label">Nama Mahasiswa</label>
						<input type="text" class="form-control" value="<?= $data['nama_mahasiswa'] ?>" name="nama">
					</div>
					<div class="form-group">
						<label class="control-label">Kelas</label>
						<input type="text" class="form-control" value="<?= $data['kelas'] ?>" name="kelas">
					</div>
					<div class="form-group">
						<label class="control-label">Jenis Kelamin</label>
						<select name="jenis_kelamin" class="form-control">
							<option value="L" <?= $data['jenis_kelamin'] == 'L' ? 'selected' : null ?>>Laki-Laki</option>
							<option value="P" <?= $data['jenis_kelamin'] == 'P' ? 'selected' : null ?>>Perempuan</option>
						</select>
					</div>
					<div class="form-group">
						<label class="control-label">Agama</label>
						<input type="text" class="form-control" value="<?= $data['agama'] ?>" name="agama">
					</div>
					<div class="form-group">
						<label class="control-label">Alamat</label>
						<textarea class="form-control" name="alamat"><?= $data['alamat'] ?></textarea>
					</div>
					<div class="form-group">
						<label class="control-label">Tempat Lahir</label>
						<input type="text" class="form-control" value="<?= $data['tempat_lahir'] ?>" name="tempat_lahir">
					</div>
					<div class="form-group">
						<label class="control-label">Tanggal Lahir</label>
						<?php
							$tgl_lahir = str_replace('/', '-', $data['tgl_lahir']);
							$tgl_lahir = date_format(date_create($tgl_lahir), "Y-m-d");
						?>
						<input type="date" class="form-control" value="<?= $tgl_lahir ?>" name="tgl_lahir">
					</div>
					<div class="form-group">
						<label class="control-label">Pendidikan</label>
						<textarea class="form-control" name="pendidikan"><?= $data['pendidikan'] ?></textarea>
						<small class="form-text text-muted">Gunakan ; (titik koma) sebagai pemisah. Contoh: SD X;SMP X;SMK X</small>
					</div>
					<div class="form-group">
						<label class="control-label">Hobi</label>
						<textarea class="form-control" name="hobi"><?= $data['hobi'] ?></textarea>
						<small class="form-text text-muted">Gunakan ; (titik koma) sebagai pemisah. Contoh: Berenang;Makan;Tidur</small>
					</div>
					<div class="form-group">
						<button class="btn btn-success float-right">Simpan</button>
						<a href="<?= base_url('menu/mahasiswa') ?>" class="btn btn-danger float-right mr-3">Batal</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
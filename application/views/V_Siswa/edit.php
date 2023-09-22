<!-- <?php var_dump($data) ?> -->
<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">

			<div class="card">
				<div class="card-header">
					Form Edit Siswa
				</div>
				<div class="card-body">
					<form action="" method="post">
						<input type="hidden" name="id" value="<?= $siswa['id']; ?>">
						<div class="form-group">
							<label for="nama">Nama Siswa</label>
							<input type="text" class="form-control" name="nama" id="nama" value="<?= $siswa['nama']; ?>">
							<small class="form-text text-danger"><?= form_error('nama'); ?></small>
						</div>
						<div class="form-group">
							<label for="nis">NIS</label>
							<input type="text" class="form-control" name="nis" id="nis" value="<?= $siswa['nis']; ?>">
							<small class="form-text text-danger"><?= form_error('nis'); ?></small>
						</div>
						<div class="form-group">
							<label for="tanggal_lahir">Tanggal Lahir</label>
							<input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" value="<?= $siswa['tanggal_lahir']; ?>">
							<small class="form-text text-danger"><?= form_error('tanggal_lahir'); ?></small>
						</div>
						<div class="form-group">
							<label for="tempat_lahir">Tempat Lahir</label>
							<input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" value="<?= $siswa['tempat_lahir']; ?>">
							<small class="form-text text-danger"><?= form_error('tempat_lahir'); ?></small>
						</div>
						<div class="form-group">
							<label for="telepon">Telepon</label>
							<input type="text" class="form-control" name="telepon" id="telepon" value="<?= $siswa['telepon']; ?>">
							<small class="form-text text-danger"><?= form_error('telepon'); ?></small>
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="text" class="form-control" name="email" id="email" value="<?= $siswa['email']; ?>">
							<small class="form-text text-danger"><?= form_error('email'); ?></small>
						</div>
						<button type="submit" name="edit" class="btn btn-primary float-right">Edit Data</button>
					</form>

				</div>
			</div>

		</div>
	</div>
</div>
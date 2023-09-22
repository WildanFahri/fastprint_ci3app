<!-- <?php var_dump($data) ?> -->
<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">

			<div class="card">
				<div class="card-header">
					Form Tambah Siswa
				</div>
				<div class="card-body">
					<form action="" method="post">
						<div class="form-group">
							<label for="nama">Nama Siswa</label>
							<input type="text" class="form-control" name="nama" id="nama">
							<small class="form-text text-danger"><?= form_error('nama'); ?></small>
						</div>
						<div class="form-group">
							<label for="nis">NIS</label>
							<input type="text" class="form-control" name="nis" id="nis">
							<small class="form-text text-danger"><?= form_error('nis'); ?></small>
						</div>
						<div class="form-group">
							<label for="tanggal_lahir">Tanggal Lahir</label>
							<input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir">
							<small class="form-text text-danger"><?= form_error('tanggal_lahir'); ?></small>
						</div>
						<div class="form-group">
							<label for="tempat_lahir">Tempat Lahir</label>
							<input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir">
							<small class="form-text text-danger"><?= form_error('tempat_lahir'); ?></small>
						</div>
						<div class="form-group">
							<label for="telepon">Telepon</label>
							<input type="text" class="form-control" name="telepon" id="telepon">
							<small class="form-text text-danger"><?= form_error('telepon'); ?></small>
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="text" class="form-control" name="email" id="email">
							<small class="form-text text-danger"><?= form_error('email'); ?></small>
						</div>
						<button type="submit" name="tambah" class="btn btn-primary float-right">Simpan Data</button>
					</form>

				</div>
			</div>

		</div>
	</div>
</div>
<!-- <?php var_dump($data) ?> -->
<div class="container">
	<div class="row mt-3">
		<div class="col-md-6 mx-auto">

			<div class="card">
				<div class="card-header">
					Form Tambah Kategori
				</div>
				<div class="card-body">
					<form action="" method="post">
						<div class="form-group">
							<label for="namakategori">Nama Kategori</label>
							<input type="text" class="form-control" name="namakategori" id="namakategori">
							<small class="form-text text-danger"><?= form_error('namakategori'); ?></small>
						</div>
						<button type="submit" name="tambah" class="btn btn-primary float-right">Simpan Data</button>
						<a href="<?= base_url(); ?>/C_Category" class="btn btn-secondary float-right mr-3">Kembali</a>
					</form>

				</div>
			</div>

		</div>
	</div>
</div>
<!-- <?php var_dump($data) ?> -->
<div class="container">
	<div class="row mt-3">
		<div class="col-md-6 mx-auto">

			<div class="card">
				<div class="card-header">
					Form Tambah Produk
				</div>
				<div class="card-body">
					<form action="" method="post">
						<!-- <div class="form-group">
							<label for="no">Nomor Produk</label>
							<input type="text" class="form-control" name="no" id="no">
							<small class="form-text text-danger"><?= form_error('no'); ?></small>
						</div> -->
						<div class="form-group">
							<label for="namaproduk">Nama Produk</label>
							<input type="text" class="form-control" name="namaproduk" id="namaproduk">
							<small class="form-text text-danger"><?= form_error('namaproduk'); ?></small>
						</div>
						<div class="form-group">
							<label for="harga">Harga Produk</label>
							<input type="text" class="form-control" name="harga" id="harga">
							<small class="form-text text-danger"><?= form_error('harga'); ?></small>
						</div>
						<div class="form-group">
							<label for="kategori">Kategori Produk</label>
							<select class="form-control" id="kategori" name="kategori">
								<?php foreach ($kategori as $kat) : ?>
									<option value="<?= $kat['id_satuan']; ?>"><?= $kat['nama_satuan']; ?></option>
								<?php endforeach ?>
							</select>
						</div>
						<div class="form-group">
							<label for="status">Status Produk</label>
							<select class="form-control" id="status" name="status">
								<?php foreach ($status as $stat) : ?>
									<option value="<?= $stat['id_status']; ?>"><?= $stat['nama_status']; ?></option>
								<?php endforeach ?>
							</select>
						</div>
						<button type="submit" name="tambah" class="btn btn-primary float-right">Simpan Data</button>
						<a href="<?= base_url(); ?>/C_Product" class="btn btn-secondary float-right mr-3">Kembali</a>
					</form>

				</div>
			</div>

		</div>
	</div>
</div>
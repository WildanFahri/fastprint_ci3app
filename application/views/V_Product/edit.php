<!-- <?php var_dump($data) ?> -->
<div class="container">
	<div class="row mt-3">
		<div class="col-md-6 mx-auto">

			<div class="card">
				<div class="card-header">
					Form Edit Produk
				</div>
				<div class="card-body">
					<form action="" method="post">
						<input type="hidden" name="id" value="<?= $produk['id_produk']; ?>">
						<!-- <div class="form-group">
							<label for="no">Nomor Produk</label>
							<input type="text" class="form-control" name="no" id="no" value="<?= $produk['no']; ?>">
							<small class="form-text text-danger"><?= form_error('no'); ?></small>
						</div> -->
						<div class="form-group">
							<label for="namaproduk">Nama Produk</label>
							<input type="text" class="form-control" name="namaproduk" id="namaproduk" value="<?= $produk['nama_produk']; ?>">
							<small class="form-text text-danger"><?= form_error('namaproduk'); ?></small>
						</div>
						<div class="form-group">
							<label for="harga">Harga Produk</label>
							<input type="text" class="form-control" name="harga" id="harga" value="<?= $produk['harga']; ?>">
							<small class="form-text text-danger"><?= form_error('harga'); ?></small>
						</div>
						<div class="form-group">
							<label for="kategori">Kategori Produk</label>
							<select class="form-control" id="kategori" name="kategori">
								<?php foreach ($kategori as $kat) : ?>
									<?php if ($kat['id_satuan'] == $produk['kategori_id']) : ?>
										<option value="<?= $kat['id_satuan']; ?>" selected><?= $kat['nama_satuan']; ?></option>
									<?php else : ?>
										<option value="<?= $kat['id_satuan']; ?>"><?= $kat['nama_satuan']; ?></option>
									<?php endif ?>
								<?php endforeach ?>
							</select>
						</div>
						<div class="form-group">
							<label for="status">Status Produk</label>
							<select class="form-control" id="status" name="status">
								<?php foreach ($status as $stat) : ?>
									<?php if ($stat['id_status'] == $produk['status_id']) : ?>
										<option value="<?= $stat['id_status']; ?>" selected><?= $stat['nama_status']; ?></option>
									<?php else : ?>
										<option value="<?= $stat['id_status']; ?>"><?= $stat['nama_status']; ?></option>
									<?php endif ?>
								<?php endforeach ?>
							</select>
						</div>
						<button type="submit" name="edit" class="btn btn-primary float-right">Edit Data</button>
						<a href="<?= base_url(); ?>/C_Product" class="btn btn-secondary float-right mr-3">Kembali</a>
					</form>

				</div>
			</div>

		</div>
	</div>
</div>
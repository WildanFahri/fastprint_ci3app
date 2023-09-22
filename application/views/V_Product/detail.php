<!-- <?php var_dump($produk['nama_produk']) ?> -->
<div class="container">
	<div class="row mt-3">
		<div class="col-md-6 mx-auto">

			<div class="card">
				<div class="card-header">
					Detail Produk
				</div>
				<div class="card-body">
					<form>
						<div class="form-group">
							<h5 class="card-title" for="namaproduk">Nama Produk : </h5>
							<p class="card-text"><?= $produk['nama_produk']; ?></p>
						</div>
						<div class="form-group">
							<h5 class="card-title" for="harga">Harga Produk : </h5>
							<p class="card-text">Rp. <?= $produk['harga']; ?></p>
						</div>
						<div class="form-group">
							<h5 class="card-title" for="kategori">kategori Produk : </h5>
							<p class="card-text"><?= $produk['nama_satuan']; ?></p>
						</div>
						<a href="<?= base_url(); ?>/C_Home" class="btn btn-secondary float-right">Kembali</a>
					</form>
				</div>
			</div>

		</div>
	</div>
</div>
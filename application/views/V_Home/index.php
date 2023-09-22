<div class="container">
	<div class="row mt-4 mx-auto">
		<?php $i = 0;
		foreach ($produk as $prd) : $i++ ?>
			<div class="card mb-3 ml-3 mr-3" style="width: 30%">
				<div class="card-header">
					Produk <?= $i ?>
				</div>
				<div class="card-body">
					<h5 class="card-title"><?= $prd['nama_produk'] ?></h5>
					<p class="card-text">Rp. <?= $prd['harga'] ?></p>
					<a href="<?= base_url(); ?>C_Product/show/<?= $prd['id_produk']; ?>" class="btn btn-primary">Lihat Detail</a>
				</div>
			</div>
		<?php endforeach ?>
	</div>
</div>
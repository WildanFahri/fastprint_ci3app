<!-- <?php var_dump($insert) ?> -->
<div class="container">
	<?php if ($this->session->flashdata('flash')) : ?>
		<div class="row">
			<div class="col-md-12 mt-3">
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					Data Produk<strong> Berhasil </strong><?= $this->session->flashdata('flash'); ?>.
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			</div>
		</div>
	<?php endif ?>

	<div class="row">
		<div class="col-md-12">
			<div class="row mt-2">
				<div class="col-md-12 ">
					<a href="<?php base_url(); ?>C_Product/create" class="btn btn-success float-right">Tambah Data</a>
				</div>
			</div>
			<table class="table mt-2">
				<thead class="thead-light">
					<tr>
						<th scope="col">#</th>
						<th scope="col">Nama Produk</th>
						<th scope="col">Harga</th>
						<th scope="col">Kategori</th>
						<th scope="col">Status</th>
						<th scope="col">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $i = 0;
					foreach ($produk as $prd) : $i++ ?>
						<tr>
							<td><?= $i; ?></td>
							<td style="word-wrap: break-word;max-width: 400px;"><?= $prd['nama_produk']; ?></td>
							<td><?= $prd['harga']; ?></td>
							<td><?= $prd['nama_satuan']; ?></td>
							<td><?= $prd['nama_status']; ?></td>
							<td>
								<a href="<?= base_url(); ?>C_Product/edit/<?= $prd['id_produk']; ?>" class="badge badge-primary">Edit</a>
								<a href="<?= base_url(); ?>C_Product/delete/<?= $prd['id_produk']; ?>" class="badge badge-danger" onclick="return confirm('Apakah anda yakin?');">Hapus</a>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
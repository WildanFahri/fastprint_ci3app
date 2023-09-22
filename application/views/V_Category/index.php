<div class="container">
	<?php if ($this->session->flashdata('flash')) : ?>
		<div class="row">
			<div class="col-md-12 mt-3">
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					Data Kategori<strong> Berhasil </strong><?= $this->session->flashdata('flash'); ?>.
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			</div>
		</div>
	<?php endif ?>
	<?php if ($this->session->flashdata('hapus')) : ?>
		<div class="row">
			<div class="col-md-12 mt-3">
				<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong> Error! </strong><?= $this->session->flashdata('hapus'); ?>.
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
					<a href="<?php base_url(); ?>C_Category/create" class="btn btn-success float-right">Tambah Data</a>
				</div>
			</div>
			<table class="table mt-2">
				<thead class="thead-light">
					<tr>
						<th scope="col">#</th>
						<th scope="col">Nama Kategori</th>
						<th scope="col">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $i = 0;
					foreach ($kategori as $kat) : $i++ ?>
						<tr>
							<td><?= $i ?></td>
							<td><?= $kat['nama_satuan']; ?></td>
							<td>
								<a href="<?= base_url(); ?>C_Category/edit/<?= $kat['id_satuan']; ?>" class="badge badge-primary">Edit</a>
								<a href="<?= base_url(); ?>C_Category/delete/<?= $kat['id_satuan']; ?>" class="badge badge-danger" onclick="return confirm('Apakah anda yakin?');">Hapus</a>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
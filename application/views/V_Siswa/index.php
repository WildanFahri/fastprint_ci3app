<div class="container">
	<?php if ($this->session->flashdata('flash')) : ?>
		<div class="row">
			<div class="col-md-12">
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					Data Siswa<strong> Berhasil </strong><?= $this->session->flashdata('flash'); ?>.
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			</div>
		</div>
	<?php endif ?>

	<div class="row">
		<div class="col-md-12">
			<div class="row mt-5">
				<div class="col-md-12 ">
					<a href="<?php base_url(); ?>C_Siswa/create" class="btn btn-success float-right">Tambah Data</a>
				</div>
			</div>
			<table class="table mt-2">
				<thead class="thead-light">
					<tr>
						<th scope="col">#</th>
						<th scope="col">Nama Siswa</th>
						<th scope="col">NIS</th>
						<th scope="col">Tanggal Lahir</th>
						<th scope="col">Tempat Lahir</th>
						<th scope="col">Telepon</th>
						<th scope="col">Email</th>
						<th scope="col">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $i = 0;
					foreach ($siswa as $s) : $i++ ?>
						<tr>
							<td><?= $i; ?></td>
							<td><?= $s['nama']; ?></td>
							<td><?= $s['nis']; ?></td>
							<td><?= $s['tanggal_lahir']; ?></td>
							<td><?= $s['tempat_lahir']; ?></td>
							<td><?= $s['telepon']; ?></td>
							<td><?= $s['email']; ?></td>
							<td>
								<a href="<?= base_url(); ?>C_Siswa/edit/<?= $s['id']; ?>" class="badge badge-primary">Edit</a>
								<a href="<?= base_url(); ?>C_Siswa/delete/<?= $s['id']; ?>" class="badge badge-danger" onclick="return confirm('Apakah anda yakin?');">Hapus</a>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
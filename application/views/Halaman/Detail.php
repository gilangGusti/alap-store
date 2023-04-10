<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="card">
				<div class="card-header">
					<h3 class="card-title">Data Detail Produk</h3>
				</div>
				<!-- /.card-header -->
				<div class="card-body">
					<table id="table_detail" class="table table-bordered table-striped">
						<thead>
							<tr>
								<td colspan="7">
									<a href="<?php echo site_url('Admin/FormAddDetail') ?>" class="btn btn-sm btn-primary">
										<i class="fas fa-user"></i> Tambah
									</a>
								</td>
							</tr>
							<tr>
								<th>No</th>
								<th>No. Produk</th>
								<th>Nama Produk</th>
								<th>Gambar 1</th>
								<th>Gambar 2</th>
								<th>Gambar 3</th>
								<th>Gambar 4</th>
								<th>Harga</th>
								<th>Deskripsi</th>
								<th>URL</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no = 1;
							foreach ($DataDetail as $row) : ?>
								<tr>
									<td><?= $no++; ?></td>
									<td><?= $row->no_produk; ?></td>
									<td><?= $row->nama_produk; ?></td>
									<td>
										<?= "<img src='" . base_url("upload/detail_produk/" . $row->gambar1) . "' style='width: 30%; height: auto;' alt='user-avatar' class='img-fluid' "; ?>
									</td>
									<td>
										<?= "<img src='" . base_url("upload/detail_produk/" . $row->gambar2) . "' style='width: 30%; height: auto;' alt='user-avatar' class='img-fluid' "; ?>
									</td>
									<td>
										<?= "<img src='" . base_url("upload/detail_produk/" . $row->gambar3) . "' style='width: 30%; height: auto;' alt='user-avatar' class='img-fluid' "; ?>
									</td>
									<td>
										<?= "<img src='" . base_url("upload/detail_produk/" . $row->gambar4) . "' style='width: 30%; height: auto;' alt='user-avatar' class='img-fluid' "; ?>
									</td>
									<td>Rp. <?= $row->harga; ?></td>
									<td><textarea class="form-control" rows="4" style="width: 200px;" readonly><?= $row->deskripsi; ?></textarea></td>
									<td><textarea class="form-control" rows="4" style="width: 150px;" readonly><?= $row->url; ?></textarea></td>
									<td>
										<a href="<?php echo site_url('Admin/DataDetail/' . $row->no_produk . '/view') ?>" class="btn btn-sm bg-teal">
											<i class="fas fa-edit"></i> Edit
										</a>
										<a href="<?php echo site_url('Admin/DeleteDetail/' . $row->no_produk) ?>" class="btn btn-sm btn-danger">
											<i class="fas fa-trash-alt"></i> Delete
										</a>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
				<!-- /.card-body -->
			</div>
		</div>
	</div>
</section>

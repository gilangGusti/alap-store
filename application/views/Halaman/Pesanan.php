<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="card">
				<div class="card-header">
					<h3 class="card-title">Daftar Pesanan</h3>
				</div>
				<!-- /.card-header -->
				<div class="card-body">
					<table id="table_produk" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>No</th>
								<th>ID Transaksi</th>
								<th>Nama Pembeli</th>
								<th>Email</th>
								<th>No. Handphone</th>
								<th>Alamat</th>
								<th>Nama Produk</th>
								<th>Harga</th>
								<th>Jumlah</th>
								<th>Total Harga</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no = 1;
							foreach ($DaftarPesanan as $row) : ?>
								<tr>
									<td><?= $no++; ?></td>
									<td><?= $row->id_transaksi; ?></td>
									<td><?= $row->nama_pembeli; ?></td>
									<td><?= $row->email; ?></td>
									<td><?= $row->no_hp; ?></td>
									<td><?= $row->alamat; ?></td>
									<td><?= $row->nama_produk; ?></td>
									<td>Rp. <?= $row->harga; ?></td>
									<td><?= $row->jumlah; ?></td>
									<td><?= $row->total_harga; ?></td>
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

<div class="col-md-6">
	<!-- general form elements -->
	<div class="card card-primary">
		<div class="card-header">
			<h3 class="card-title">Edit Data Detail Produk</h3>
		</div>
		<!-- /.card-header -->
		<!-- form start -->
		<form action="<?= site_url('Admin/UpdateDetail'); ?>" method="POST" enctype="multipart/form-data">
			<div class="card-body">
				<div class="form-group">
					<label>No. Produk</label>
					<input type="text" class="form-control" name="no_produk" placeholder="Nomor Produk" value="<?= $detail['no_produk']; ?>" readonly>
				</div>
				<div class="form-group">
					<label>Nama Produk</label>
					<input type="text" class="form-control" name="nama_produk" placeholder="Nama Produk" value="<?= $detail['nama_produk']; ?>">
				</div>
				<div class="form-group">
					<label for="exampleInputFile">Gambar 1</label>
					<div class="input-group">
						<div class="custom-file">
							<input type="file" class="custom-file-input" name="gambar1" id="exampleInputFile" value="<?= $detail['gambar1']; ?>">
							<input type="hidden" name="old_image1" value="<?= $detail['gambar1']; ?>">
							<label class="custom-file-label" for="exampleInputFile">Pilih Gambar</label>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="exampleInputFile">Gambar 2</label>
					<div class="input-group">
						<div class="custom-file">
							<input type="file" class="custom-file-input" name="gambar2" id="exampleInputFile" value="<?= $detail['gambar2']; ?>">
							<input type="hidden" name="old_image2" value="<?= $detail['gambar2']; ?>">
							<label class="custom-file-label" for="exampleInputFile">Pilih Gambar</label>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="exampleInputFile">Gambar 3</label>
					<div class="input-group">
						<div class="custom-file">
							<input type="file" class="custom-file-input" name="gambar3" id="exampleInputFile" value="<?= $detail['gambar3']; ?>">
							<input type="hidden" name="old_image3" value="<?= $detail['gambar3']; ?>">
							<label class="custom-file-label" for="exampleInputFile">Pilih Gambar</label>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="exampleInputFile">Gambar 4</label>
					<div class="input-group">
						<div class="custom-file">
							<input type="file" class="custom-file-input" name="gambar4" id="exampleInputFile" value="<?= $detail['gambar4']; ?>">
							<input type="hidden" name="old_image4" value="<?= $detail['gambar4']; ?>">
							<label class="custom-file-label" for="exampleInputFile">Pilih Gambar</label>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label>Harga</label>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text">Rp.</span>
						</div>
						<input type="text" class="form-control" name="harga" placeholder="Harga" value="<?= $detail['harga']; ?>">
					</div>
				</div>
				<div class="form-group">
					<label>Deskripsi</label>
					<textarea class="form-control" rows="3" placeholder="Deskripsi" name="deskripsi"><?= $detail['deskripsi']; ?></textarea>
				</div>
				<div class="form-group">
					<label>Link Produk</label>
					<input type="text" class="form-control" name="url" placeholder="Contoh : https://www.shopee.co.id/" value="<?= $detail['url']; ?>">
				</div>
			</div>
			<!-- /.card-body -->

			<div class="card-footer">
				<button type="submit" name="btn_update" class="btn btn-primary">Simpan</button>
				<a href="<?= site_url('Admin/DataDetail'); ?>" class="btn btn-warning">Kembali</a>
			</div>
		</form>
	</div>
	<!-- /.card -->

</div>

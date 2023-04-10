<script src="<?= base_url(); ?>assets/js/ajax.js"></script>
<div class="col-md-6">
	<!-- general form elements -->
	<div class="card card-primary">
		<div class="card-header">
			<h3 class="card-title">Tambah Data Detail Produk</h3>
		</div>
		<!-- /.card-header -->
		<!-- form start -->
		<form action="<?= site_url('Admin/AddDetail'); ?>" method="POST" autocomplete="off" enctype="multipart/form-data">
			<div class="card-body">
				<div class="form-group">
					<label>No. Produk</label>
					<select class="form-control" name="no_produk" id="no_produk" onchange="return autofill();">
						<option disabled selected>- No. Produk -</option>
						<?php foreach ($AddProduk as $produk) : ?>
							<option value="<?php echo $produk->no_produk; ?>"><?php echo $produk->no_produk; ?></option>
						<?php endforeach; ?>
					</select>
				</div>
				<div class="form-group">
					<label>Nama Produk</label>
					<input type="text" class="form-control" name="nama_produk" id="nama_produk" placeholder="Nama Produk" readonly>
				</div>
				<div class="form-group">
					<label>Harga</label>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text">Rp.</span>
						</div>
						<input type="text" class="form-control" name="harga" id="harga" placeholder="Harga">
					</div>
				</div>
				<div class="form-group">
					<label>Deskripsi</label>
					<textarea class="form-control" rows="3" placeholder="Deskripsi" name="deskripsi"></textarea>
				</div>
				<div class="form-group">
					<label for="exampleInputFile">Gambar 1</label>
					<div class="input-group">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="customFile" name="gambar1">
							<label class="custom-file-label" for="exampleInputFile">Pilih file</label>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="exampleInputFile">Gambar 2</label>
					<div class="input-group">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="customFile" name="gambar2">
							<label class="custom-file-label" for="exampleInputFile">Pilih file</label>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="exampleInputFile">Gambar 3</label>
					<div class="input-group">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="customFile" name="gambar3">
							<label class="custom-file-label" for="exampleInputFile">Pilih file</label>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="exampleInputFile">Gambar 4</label>
					<div class="input-group">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="customFile" name="gambar4">
							<label class="custom-file-label" for="exampleInputFile">Pilih file</label>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label>Link Produk</label>
					<input type="text" class="form-control" name="url" id="url" placeholder="Contoh : https://www.shopee.co.id/">
				</div>
			</div>
			<!-- /.card-body -->

			<div class="card-footer">
				<button type="submit" name="btn_tambah" class="btn btn-primary">Tambah</button>
				<a href="<?= site_url('Admin/DataDetail'); ?>" class="btn btn-warning">Kembali</a>
			</div>
		</form>
	</div>
	<!-- /.card -->

</div>



<script>
	function autofill() {
		var no_produk = document.getElementById('no_produk').value;
		$.ajax({
			url: "<?php echo base_url(); ?>index.php/Admin/cari",
			data: '&no_produk=' + no_produk,
			success: function(data) {
				var hasil = JSON.parse(data);

				$.each(hasil, function(key, val) {
					document.getElementById('no_produk').value = val.no_produk;
					document.getElementById('nama_produk').value = val.nama_produk;
					document.getElementById('harga').value = val.harga;
					document.getElementById('deskripsi').value = val.deskripsi;
					document.getElementById('url').value = val.url;
				});
			}
		});
	}
</script>

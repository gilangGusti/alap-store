<!doctype html>
<html lang="zxx">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>ALAP Store</title>
	<!-- Template CSS -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/style-liberty.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/style-starter.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/fontawesome.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/mdb.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/animations-extended.min.css">
	<!-- Template CSS -->
	<link href="//fonts.googleapis.com/css?family=Oswald:300,400,500,600&display=swap" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900&display=swap" rel="stylesheet">

	<!-- Template CSS -->
</head>

<body>

	<section class="w3l-banner-slider-main inner-pagehny">
		<div class="breadcrumb-infhny">
			<div class="top-header-content">
				<header class="tophny-header">
					<!--/nav-->
					<nav class="navbar navbar-expand-lg navbar-light">
						<div class="container-fluid serarc-fluid">
							<a class="navbar-brand" href="<?= base_url(); ?>">
								ALAP<span class="lohny"> S</span>tore</a>
							<!-- if logo is image enable this   
	<a class="navbar-brand" href="#index.html">
	  <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
	</a> -->

							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon fa fa-bars"> </span>
							</button>
							<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<ul class="navbar-nav ml-auto">
									<li class="nav-item">
										<a class="nav-link" href="<?= base_url(); ?>" style="color: white;" onmouseover="this.style.color='orange';" onmouseout="this.style.color='white';">
											Home
										</a>
									</li>

									<li class="nav-item">
										<a class="nav-link" href="<?= site_url('Page/katalog'); ?>" style="color: white;" onmouseover="this.style.color='orange';" onmouseout="this.style.color='white';">
											Catalog
										</a>
									</li>

									<li class="nav-item">
										<a class="nav-link" href="<?= site_url('Page/tentang'); ?>" style="color: white;" onmouseover="this.style.color='orange';" onmouseout="this.style.color='white';">
											About
										</a>
									</li>
								</ul>

							</div>
						</div>
					</nav>
					<!--//nav-->
				</header>
				<div class="breadcrumb-contentnhy">
					<div class="container">
						<nav aria-label="breadcrumb">
							<h2 class="hny-title text-center">Detail Produk</h2>
						</nav>
					</div>
				</div>
			</div>
	</section>
	<section class="w3l-ecommerce-main-inn">
		<!--/ecommerce-single-->
		<div class="ecomrhny-content-inf py-5">
			<div class="container py-lg-5">
				<!--/row1-->
				<div class="sp-store-single-page row">
					<div class="col-lg-5 single-right-left">
						<div class="flexslider1">
							<ul class="slides">
								<li data-thumb="<?= base_url("upload/detail_produk/" . $detail['gambar1']); ?>">
									<div class="thumb-image">
										<img src="<?= base_url("upload/detail_produk/" . $detail['gambar1']); ?>" data-imagezoom="true" class="img-fluid" alt=" ">
									</div>
								</li>
								<li data-thumb="<?= base_url("upload/detail_produk/" . $detail['gambar2']); ?>">
									<div class="thumb-image">
										<img src="<?= base_url("upload/detail_produk/" . $detail['gambar2']); ?>" data-imagezoom="true" class="img-fluid" alt=" ">
									</div>
								</li>
								<li data-thumb="<?= base_url("upload/detail_produk/" . $detail['gambar3']); ?>">
									<div class="thumb-image">
										<img src="<?= base_url("upload/detail_produk/" . $detail['gambar3']); ?>" data-imagezoom="true" class="img-fluid" alt=" ">
									</div>
								</li>
								<li data-thumb="<?= base_url("upload/detail_produk/" . $detail['gambar4']); ?>">
									<div class="thumb-image">
										<img src="<?= base_url("upload/detail_produk/" . $detail['gambar4']); ?>" data-imagezoom="true" class="img-fluid" alt=" ">
									</div>
								</li>
							</ul>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="col-lg-7 single-right-left pl-lg-4">
						<h3><?= $detail['nama_produk']; ?></h3>
						<div class="desc_single">
							<h6>
								<?php
								$angka = $detail['harga'];

								echo "<span class='item_price'>Rp. " . number_format($angka, 0, '', '.') . "</span>";
								?>
							</h6>
						</div>
						<div class="desc_single mb-4 my-4">
							<h5>Deskripsi :</h5>
							<p style="width: 700px; word-wrap:break-word;"><?= $detail['deskripsi']; ?></p>
						</div>
						<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header text-center">
										<h4 class="modal-title w-100 font-weight-bold">Silahkan Isi Formulir nya!</h4>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body mx-3">
										<form action="<?= site_url('Page/Pesan'); ?>" method="POST" name="autoSumForm">
											<div class="md-form mb-5">
												<i class="fa fa-user prefix grey-text"></i>
												<input type="text" id="orangeForm-name" class="form-control validate" name="nama_pembeli">
												<label for="orangeForm-name">Nama</label>
											</div>
											<div class="md-form mb-5">
												<i class="fa fa-envelope prefix grey-text"></i>
												<input type="email" id="orangeForm-email" class="form-control validate" name="email">
												<label for="orangeForm-email">Email</label>
											</div>
											<div class="md-form mb-5">
												<i class="fa fa-mobile prefix grey-text"></i>
												<input type="text" id="orangeForm-pass" class="form-control validate" name="no_hp">
												<label for="orangeForm-pass">No. Handphone</label>
											</div>
											<div class="md-form mb-5">
												<i class="fa fa-map-marker prefix grey-text"></i>
												<input type="text" id="orangeForm-pass" class="form-control validate" name="alamat">
												<label for="orangeForm-pass">Alamat</label>
											</div>
											<div class="md-form mb-5">
												<i class="fa fa-product-hunt prefix grey-text"></i>
												<input type="text" id="orangeForm-pass" class="form-control validate" name="nama_produk" value="<?= $detail['nama_produk']; ?>" readonly>
												<label for="orangeForm-pass">Produk</label>
											</div>
											<div class="md-form mb-5">
												<i class="fa fa-tags prefix grey-text"></i>
												<input type="text" id="orangeForm-pass" class="form-control validate" name="harga" value="<?= $detail['harga']; ?>" onfocus="startCalc();" onblur="stopCalc();" readonly>
												<label for="orangeForm-pass">Harga</label>
											</div>
											<div class="md-form mb-5">
												<i class="fa fa-plus-circle prefix grey-text"></i>
												<input type="number" id="orangeForm-pass" class="form-control validate" name="jumlah" onfocus="startCalc();" onblur="stopCalc();">
												<label for="orangeForm-pass">Jumlah</label>
											</div>
											<div class="md-form mb-5">
												<i class="fa fa-price prefix grey-text"></i>
												<input type="text" id="orangeForm-pass" class="form-control validate" value="0" name="total_harga" readonly>
												<label for="orangeForm-pass">Total Harga :</label>
											</div>
											<div class="modal-footer d-flex justify-content-center">
												<button type="submit" class="action btn second">
													Pesan
												</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
						<div class="eco-buttons">
							<div class="buyhny-now">
								<a href="" class="action btn" data-toggle="modal" data-target="#modalRegisterForm" target="_blank" style="background: firebrick; border: 2px solid firebrick;" onmouseover="this.style.background='black'; this.style.border='2px solid black';" onmouseout="this.style.background='firebrick'; this.style.border='2px solid firebrick';">
									Pesan Sekarang
								</a>
							</div>
							<br>
							<h5>Atau Beli Sekarang di :</h5>
							<br>
							<div class="buyhny-now"><a href="<?= $detail['url']; ?>" class="action btn" target="_blank"><i class="fa fa-shopping-bag"></i> Shopee</a></div>
							<div class="buyhny-now">
								<a href="https://wa.link/5eu4vh" class="action btn" target="_blank" style="background: green; border: 2px solid green;" onmouseover="this.style.background='black'; this.style.border='2px solid black';" onmouseout="this.style.background='green'; this.style.border='2px solid green';">
									<i class="fa fa-whatsapp"></i> WhatsApp
								</a>
							</div>
						</div>

					</div>
				</div>
			</div>
			<!--//row1-->
		</div>
		<!--//ecommerce-single-->
	</section>
	<!-- //content-6-section -->

	<section class="w3l-ecommerce-main">
		<!-- /products-->
		<div class="ecom-contenthny py-5">
			<hr>
			<div class="container py-lg-5">
				<h3 class="hny-title mb-0 text-center">Rekomendasi <span>Produk</span></h3>
				<!-- /row-->
				<div class="ecom-products-grids row mt-lg-5 mt-3" id="produk">

				</div>
				<div class="row">
					<div class="container" style="text-align: center">
						<div class="read">
							<a href="" class="read-more btn" id="load_more" data-val="0">More Product</a>
						</div>
					</div>
				</div>
				<!-- //row-->
			</div>
		</div>
	</section>

	<section class="w3l-footer-22">
		<!-- footer-22 -->
		<div class="footer-hny py-5">
			<div class="container py-lg-0">
				<div class="text-txt row">
					<div class="left-side col-lg-4">
						<h3><a class="logo-footer" href="index.html">
								ALAP<span class="lohny"> S</span>tore</a></h3>
						<!-- if logo is image enable this   
                                    <a class="navbar-brand" href="#index.html">
                                        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
                                    </a> -->
						<p>Selamat Datang di Toko ALAP Store. Kami toko yang menjual baju dengan bahan dan kualitas terbaik dan ternyaman.
							Kami disini bukan hanya menjual baju tapi juga menjual kualitas dan kenyamanan.
							Kenyamanan pembeli merupakan prioritas no. 1 bagi toko kami.
						</p>
						<ul class="social-footerhny mt-lg-5 mt-4">
							<li><a class="google" href="https://shopee.co.id/alap_store91?smtt=0.0.9"><span class="fa fa-shopping-bag" aria-hidden="true"></span></a>
							</li>
							<li><a class="instagram" href="https://www.instagram.com/alap.store/"><span class="fa fa-instagram" aria-hidden="true"></span></a>
							</li>
						</ul>
					</div>

					<div class="right-side col-lg-6 px-lg-5">
						<h3>Alamat</h3>
						<p>Jl. Berlian No.20, RT.06/09, Ciluar, Kec. Bogor Utara, Kota Bogor, Jawa Barat 16156, Indonesia</p>
					</div>
				</div>
				<div class="below-section row">
					<div class="columns col-lg-12 text-lg-right">
						<p>© 2021 ALAP Store. All rights reserved. Design by <a href="https://w3layouts.com/" target="_blank">
								W3Layouts</a>
						</p>
					</div>
					<button onclick="topFunction()" id="movetop" title="Go to top">
						<span class="fa fa-angle-double-up"></span>
					</button>
				</div>
			</div>
		</div>
		<!-- //titels-5 -->
		<!-- move top -->

		<script>
			// When the user scrolls down 20px from the top of the document, show the button
			window.onscroll = function() {
				scrollFunction()
			};

			function scrollFunction() {
				if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
					document.getElementById("movetop").style.display = "block";
				} else {
					document.getElementById("movetop").style.display = "none";
				}
			}

			// When the user clicks on the button, scroll to the top of the document
			function topFunction() {
				document.body.scrollTop = 0;
				document.documentElement.scrollTop = 0;
			}
		</script>
		<!-- /move top -->
	</section>
</body>

</html>
<script src="<?= base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery-2.1.4.min.js"></script>
<script src="<?= base_url(); ?>assets/js/mdb.min.js"></script>
<script src="<?= base_url(); ?>assets/js/animations-extended.min.js"></script>
<!--/login-->
<script>
	$(document).ready(function() {
		$(".button-log a").click(function() {
			$(".overlay-login").fadeToggle(200);
			$(this).toggleClass('btn-open').toggleClass('btn-close');
		});
	});
	$('.overlay-close1').on('click', function() {
		$(".overlay-login").fadeToggle(200);
		$(".button-log a").toggleClass('btn-open').toggleClass('btn-close');
		open = false;
	});
</script>
<!--//login-->
<!-- FlexSlider -->
<script src="<?= base_url(); ?>assets/js/jquery.flexslider.js"></script>
<!-- single -->
<script src="<?= base_url(); ?>assets/js/imagezoom.js"></script>
<!-- single -->
<script>
	// Can also be used with $(document).ready()
	$(window).load(function() {
		$('.flexslider1').flexslider({
			animation: "slide",
			controlNav: "thumbnails"
		});
	});
</script>
<script>
	transmitv.render();

	transmitv.cart.on('transmitv_checkout', function(evt) {
		var items, len, i;

		if (this.subtotal() > 0) {
			items = this.items();

			for (i = 0, len = items.length; i < len; i++) {}
		}
	});
</script>
<!-- //cart-js -->
<!-- price range (top products) -->
<script src="<?= base_url(); ?>assets/js/jquery-ui.js"></script>
<script>
	//<![CDATA[ 
	$(window).load(function() {
		$("#slider-range").slider({
			range: true,
			min: 0,
			max: 9000,
			values: [50, 6000],
			slide: function(event, ui) {
				$("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
			}
		});
		$("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

	}); //]]>
</script>
<!-- //price range (top products) -->
<!-- disable body scroll which navbar is in active -->

<script>
	$(function() {
		$('.navbar-toggler').click(function() {
			$('body').toggleClass('noscroll');
		})
	});
</script>
<!-- disable body scroll which navbar is in active -->
<script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>

<script>
	$(document).ready(function() {
		produk(0);

		$("#load_more").click(function(e) {
			e.preventDefault();
			var page = $(this).data('val');
			produk(page);

		});
		//video_baru();
	});

	var produk = function(page) {
		$("#loader").show();
		$("#load_more").show();
		$.ajax({
			url: "<?= base_url('Page/get_rekomendasi'); ?>",
			type: 'GET',
			data: {
				page: page
			}
		}).done(function(response) {
			$("#produk").append(response);
			$("#loader").hide();
			$('#load_more').data('val', ($('#load_more').data('val') + 1));
			//scroll();
			if (response == "") {
				$("#load_more").hide();
			}
		});

	};
</script>

<script>
	function startCalc() {
		interval = setInterval("calc()", 1)
	}

	function calc() {
		harga = document.autoSumForm.harga.value;
		jumlah = document.autoSumForm.jumlah.value;

		document.autoSumForm.total_harga.value = (harga * 1) * (jumlah * 1);
	}

	function stopCalc() {
		clearInterval(interval);
	}
</script>


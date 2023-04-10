<!doctype html>
<html lang="zxx">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>ALAP Store</title>
	<link rel="icon" href="<?= base_url(); ?>assets/images/alap-icon.png">
	<!-- Template CSS -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/style-starter.css">
	<!-- Template CSS -->
	<link href="//fonts.googleapis.com/css?family=Oswald:300,400,500,600&display=swap" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900&display=swap" rel="stylesheet">
	<!-- Template CSS -->

</head>

<body>
	<!--w3l-banner-slider-main-->
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
										<a class="nav-link" href="<?= base_url(); ?>">Home</a>
									</li>

									<li class="nav-item active">
										<a class="nav-link" href="<?= site_url('Page/katalog'); ?>">Catalog</a>
									</li>

									<li class="nav-item">
										<a class="nav-link" href="<?= site_url('Page/tentang'); ?>">About</a>
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
							<h2 class="hny-title text-center">Catalog</h2>
							<ol class="breadcrumb mb-0">
								<li><a href="<?= base_url(); ?>">Home</a>
									<span class="fa fa-angle-double-right"></span>
								</li>
								<li class="active">Catalog</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- //w3l-banner-slider-main -->

	<section class="w3l-ecommerce-main">
		<!-- /products-->
		<div class="ecom-contenthny py-5">
			<div class="container py-lg-5">
				<h3 class="hny-title mb-0 text-center">Semua <span>Produk</span></h3>
				<p class="text-center"></p>
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
			</div>
			<!-- //row-->
		</div>
		</div>
	</section>
	<!-- //products-->

	<section class="w3l-subscription-6">
		<!--/customers -->
		<div class="subscription-infhny">

	</section>
	<!-- //customers-6-->

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
<script>
	// optional
	$('#customerhnyCarousel').carousel({
		interval: 5000
	});
</script>
<!-- cart-js -->
<script src="<?= base_url(); ?>assets/js/minicart.js"></script>
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
<!--pop-up-box-->
<script src="<?= base_url(); ?>assets/js/jquery.magnific-popup.js"></script>
<!--//pop-up-box-->
<script>
	$(document).ready(function() {
		$('.popup-with-zoom-anim').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});

	});
</script>
<!--//search-bar-->
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
			url: "<?= base_url('Page/get_rekomendasi/') ?>",
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

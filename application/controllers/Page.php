<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MSudi');
	}

	public function index()
	{
		if ($this->uri->segment(4) == 'view') {
			$no_produk = $this->uri->segment(3);
			$tampil = $this->MSudi->GetDataWhere('tb_promo', 'no_produk', $no_produk)->row();
			$data['detail']['no_produk'] = $tampil->no_produk;
			$data['detail']['nama_produk'] = $tampil->nama_produk;
			$data['detail']['harga_awal'] = $tampil->harga_awal;
			$data['detail']['harga_promo'] = $tampil->harga_promo;
			$data['detail']['gambar'] = $tampil->gambar;
			$data['detail']['url'] = $tampil->url;
		} else {
			$data['DataPromo'] = $this->MSudi->GetData('tb_promo');
		}

		$this->load->view('Page/home', $data);
	}

	public function tentang()
	{
		$this->load->view('Page/about');
	}

	public function contact()
	{
		$this->load->view('Page/contact');
	}

	public function katalog()
	{
		if ($this->uri->segment(4) == 'view') {
			$no_produk = $this->uri->segment(3);
			$tampil = $this->MSudi->GetDataWhere('tb_produk', 'no_produk', $no_produk)->row();
			$data['detail']['no_produk'] = $tampil->no_produk;
			$data['detail']['nama_produk'] = $tampil->nama_produk;
			$data['detail']['harga'] = $tampil->harga;
			$data['detail']['gambar'] = $tampil->gambar;
			$data['detail']['url'] = $tampil->url;
		} else {
			$data['DataProduk'] = $this->MSudi->GetData('tb_produk');
		}

		$this->load->view('Page/katalog', $data);
	}

	public function product_detail()
	{
		if ($this->uri->segment(4) == 'view') {
			$no_produk = $this->uri->segment(3);
			$tampil = $this->MSudi->GetDataWhere('tb_detail_produk', 'no_produk', $no_produk)->row();
			$data['detail']['no_produk'] = $tampil->no_produk;
			$data['detail']['nama_produk'] = $tampil->nama_produk;
			$data['detail']['gambar1'] = $tampil->gambar1;
			$data['detail']['gambar2'] = $tampil->gambar2;
			$data['detail']['gambar3'] = $tampil->gambar3;
			$data['detail']['gambar4'] = $tampil->gambar4;
			$data['detail']['harga'] = $tampil->harga;
			$data['detail']['deskripsi'] = $tampil->deskripsi;
			$data['detail']['url'] = $tampil->url;
			$this->load->view('Page/product_detail', $data);
		}
	}
	
	public function Pesan()
	{
		$add['nama_pembeli'] = $this->input->post('nama_pembeli');
		$add['email'] = $this->input->post('email');
		$add['no_hp'] = $this->input->post('no_hp');
		$add['alamat'] = $this->input->post('alamat');
		$add['nama_produk'] = $this->input->post('nama_produk');
		$add['harga'] = $this->input->post('harga');
		$add['jumlah'] = $this->input->post('jumlah');
		$add['total_harga'] = $this->input->post('total_harga');

		$this->MSudi->AddData('tb_transaksi', $add);
		redirect($_SERVER['HTTP_REFERER']);
	}

	function get_rekomendasi()
	{
		$page   =  $_GET['page'];
		$rekomendasi = $this->MSudi->get_product($page);
		foreach ($rekomendasi as $hasil) {
			echo '<div class="col-lg-3 col-6 product-incfhny mt-4">
					<div class="product-grid2 transmitv">
						<div class="product-image2">
							<a href="' . site_url('Page/product_detail/' . $hasil->no_produk . '/view') . '">
								<img src="' . base_url('upload/' . $hasil->gambar) . '"  class="img-fluid" alt=" ">
							</a>
							<div class="transmitv single-item">
								<a href="' . $hasil->url . '" class="transmitv-cart ptransmitv-cart add-to-cart">
									Beli Sekarang
								</a>
							</div>
						</div>
						<div class="product-content">
							<h3 class="title">' . $hasil->nama_produk . '</h3>
							<span class="price" style="color : #575757;">Rp. ' . number_format($hasil->harga, 0, '', '.') . '</span>
						</div>
					</div>
				</div>';
		}
		exit;
	}

	function get_rekomendasi_home()
	{
		$page   =  $_GET['page'];
		$rekomendasi = $this->MSudi->get_product_home($page);
		foreach ($rekomendasi as $hasil) {
			echo '<div class="col-lg-3 col-6 product-incfhny mt-4">
					<div class="product-grid2 transmitv">
						<div class="product-image2">
							<a href="' . site_url('Page/product_detail/' . $hasil->no_produk . '/view') . '">
								<img src="' . base_url('upload/' . $hasil->gambar) . '"  class="img-fluid" alt=" ">
							</a>
							<div class="transmitv single-item">
								<a href="' . $hasil->url . '" class="transmitv-cart ptransmitv-cart add-to-cart">
									Beli Sekarang
								</a>
							</div>
						</div>
						<div class="product-content">
							<h3 class="title">' . $hasil->nama_produk . '</h3>
							<span class="price" style="color : #575757; text-align: center;"><del>Rp. ' . number_format($hasil->harga_awal, 0, '', '.') . '</del><p>Rp. ' . number_format($hasil->harga_promo, 0, '', '.') . '</p></span>
						</div>
					</div>
				</div>';
		}
		exit;
	}
}

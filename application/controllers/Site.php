<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Site extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		error_reporting(0);
		$this->load->library("session");
		$this->load->helper('url');
	}
	public function index()
	{
		$where = array(
			"status" => 'aktif'
		);
		$whereProduk = array("status_publikasi" => "publik", "a.status" => "aktif");
		$whereGallery = array("status_publikasi" => "publik", "a.status" => "aktif");
		$data['slider_data'] = $this->ays_model->getDataSliderWhere($where)->result();
		$data['product_data'] = $this->ays_model->getDataProdukWhere($whereProduk);
		$data['gallery_data'] = $this->ays_model->getDataGalleryWhere($whereGallery)->result_array();
		// echo var_dump($data['gallery_data'][0]);die();
		$data['about_data'] = $this->ays_model->getDataAbout()->row();
		$data['merek_data'] = $this->ays_model->getDataMerek()->result();
		// echo var_dump($data['about_data']);die();
		$data['setting_data'] = $this->ays_model->getDataSetting()->row();
		$this->load->view('fe/homeContent', $data);
	}
	public function search(){
		$brand = $this->input->post('brand');
		$search = $this->input->post('search');
		if(isset($brand) && isset($search)){
			$whereGallery = array("status_publikasi" => "publik", "a.status" => "aktif");
			$data['merek_data'] = $this->ays_model->getDataMerek()->result();
			$data['product_data'] = $this->ays_model->getDataProdukWhereSearch($brand,$search);
			$data['gallery_data'] = $this->ays_model->getDataGalleryWhere($whereGallery);
			$data['about_data'] = $this->ays_model->getDataAbout()->row();
			$data['setting_data'] = $this->ays_model->getDataSetting()->row();
			$this->load->view('fe/katalogContent', $data);

		}else{
			$whereGallery = array("status_publikasi" => "publik", "a.status" => "aktif");
			$data['merek_data'] = $this->ays_model->getDataMerek()->result();
			$data['product_data'] = $this->ays_model->getDataProdukWhereSearch($brand,$search);
			$data['gallery_data'] = $this->ays_model->getDataGalleryWhere($whereGallery);
			$data['about_data'] = $this->ays_model->getDataAbout()->row();
			$data['setting_data'] = $this->ays_model->getDataSetting()->row();
			$this->load->view('fe/katalogContent', $data);
		}
		
		

	}
	public function katalog()
	{
		if(!isset($_GET['page'])){
			$page = 1;
		}else{
			$page = $_GET['page'];
		}
		$whereProduk = array("status_publikasi" => "publik", "a.status" => "aktif");
		$whereGallery = array("status_publikasi" => "publik", "a.status" => "aktif");
		$data['merek_data'] = $this->ays_model->getDataMerek()->result();
		$data['product_data'] = $this->ays_model->getDataProdukWhere($whereProduk);
		$data['product_data_p1'] = $this->ays_model->getDataProdukWherePage($page, null);
		$data['gallery_data'] = $this->ays_model->getDataGalleryWhere($whereGallery);
		$data['about_data'] = $this->ays_model->getDataAbout()->row();
		$data['setting_data'] = $this->ays_model->getDataSetting()->row();
		$data['pages_data'] = $this->ays_model->getDataPagesOnly(9)->row();
		$this->load->view('fe/katalogContent', $data);
	}
	public function forklift()
	{
		if(!isset($_GET['page'])){
			$page = 1;
		}else{
			$page = $_GET['page'];
		}
		$whereProduk = array("status_publikasi" => "publik", "a.status" => "aktif", "a.id_jenis_produk" => "1");
		$whereGallery = array("status_publikasi" => "publik", "a.status" => "aktif");
		$data['merek_data'] = $this->ays_model->getDataMerek()->result();
		$data['product_data'] = $this->ays_model->getDataProdukWhere($whereProduk);
		$data['product_data_p1'] = $this->ays_model->getDataProdukWherePage($page, 1);
		$data['gallery_data'] = $this->ays_model->getDataGalleryWhere($whereGallery);
		$data['about_data'] = $this->ays_model->getDataAbout()->row();
		$data['setting_data'] = $this->ays_model->getDataSetting()->row();
		$data['pages_data'] = $this->ays_model->getDataPagesOnly(1)->row();
		// echo var_dump($data['pages_data']);die();
		$this->load->view('fe/forkliftContent',$data);
	}
	public function loader()
	{
		if(!isset($_GET['page'])){
			$page = 1;
		}else{
			$page = $_GET['page'];
		}
		$whereProduk = array("status_publikasi" => "publik", "a.status" => "aktif", "a.id_jenis_produk" => "2");
		$whereGallery = array("status_publikasi" => "publik", "a.status" => "aktif");
		$data['merek_data'] = $this->ays_model->getDataMerek()->result();
		$data['product_data'] = $this->ays_model->getDataProdukWhere($whereProduk);
		$data['product_data_p1'] = $this->ays_model->getDataProdukWherePage($page, 2);
		$data['gallery_data'] = $this->ays_model->getDataGalleryWhere($whereGallery);
		$data['about_data'] = $this->ays_model->getDataAbout()->row();
		$data['setting_data'] = $this->ays_model->getDataSetting()->row();
		$data['pages_data'] = $this->ays_model->getDataPagesOnly(2)->row();
		$this->load->view('fe/loaderContent',$data);
	}
	public function truck()
	{
		if(!isset($_GET['page'])){
			$page = 1;
		}else{
			$page = $_GET['page'];
		}
		$whereProduk = array("status_publikasi" => "publik", "a.status" => "aktif", "a.id_jenis_produk" => "3");
		$whereGallery = array("status_publikasi" => "publik", "a.status" => "aktif");
		$data['merek_data'] = $this->ays_model->getDataMerek()->result();
		$data['product_data'] = $this->ays_model->getDataProdukWhere($whereProduk);
		$data['product_data_p1'] = $this->ays_model->getDataProdukWherePage($page, 3);
		$data['gallery_data'] = $this->ays_model->getDataGalleryWhere($whereGallery);
		$data['about_data'] = $this->ays_model->getDataAbout()->row();
		$data['setting_data'] = $this->ays_model->getDataSetting()->row();
		$data['pages_data'] = $this->ays_model->getDataPagesOnly(3)->row();
		$this->load->view('fe/truckContent',$data);
	}
	public function press()
	{
		$whereProduk = array("status_publikasi" => "publik", "a.status" => "aktif");
		$whereGallery = array("status_publikasi" => "publik", "a.status" => "aktif");
		$data['product_data'] = $this->ays_model->getDataProdukWhere($whereProduk);
		$data['gallery_data'] = $this->ays_model->getDataGalleryWhere($whereGallery);
		$data['about_data'] = $this->ays_model->getDataAbout()->row();
		$data['setting_data'] = $this->ays_model->getDataSetting()->row();
		$data['pages_data'] = $this->ays_model->getDataPagesOnly(4)->row();
		$data['pages_data_content'] = $this->ays_model->getDataPagesOnly(5)->row();
		$this->load->view('fe/pressContent',$data);
	}
	public function produkDetail($id)
	{
		$where = array(
			"id_produk" => $id
		);
		$data['data_produk'] = $this->ays_model->getDataProdukWhere($where)->row();
		$whereGallery = array("status_publikasi" => "publik", "a.status" => "aktif");
		$data['gallery_data'] = $this->ays_model->getDataGalleryWhere($whereGallery);
		$data['about_data'] = $this->ays_model->getDataAbout()->row();
		$data['setting_data'] = $this->ays_model->getDataSetting()->row();
		$data['pages_data'] = $this->ays_model->getDataPagesOnly(10)->row();
		$this->load->view('fe/produkDetailContent',$data);
	}
	public function cekHarga($id)
	{
		$where = array(
			"id_produk" => $id
		);
		$data['data_produk'] = $this->ays_model->getDataProdukWhere($where)->row();
		$whereGallery = array("status_publikasi" => "publik", "a.status" => "aktif");
		$data['gallery_data'] = $this->ays_model->getDataGalleryWhere($whereGallery);
		$data['about_data'] = $this->ays_model->getDataAbout()->row();
		$data['setting_data'] = $this->ays_model->getDataSetting()->row();
		$data['pages_data'] = $this->ays_model->getDataPagesOnly(11)->row();
		$this->load->view('fe/cekHargaContent',$data);
	}
	public function artikel()
	{
		$whereProduk = array("status_publikasi" => "publik", "a.status" => "aktif");
		$whereGallery = array("status_publikasi" => "publik", "a.status" => "aktif");
		$data['product_data'] = $this->ays_model->getDataProdukWhere($whereProduk);
		$data['gallery_data'] = $this->ays_model->getDataGalleryWhere($whereGallery);
		$data['about_data'] = $this->ays_model->getDataAbout()->row();
		$data['setting_data'] = $this->ays_model->getDataSetting()->row();
		$data['pages_data'] = $this->ays_model->getDataPagesOnly(6)->row();
		$this->load->view('fe/artikelContent',$data);
	}
	public function artikelDetail($id)
	{
		$whereProduk = array("status_publikasi" => "publik", "a.status" => "aktif");
		$whereGallery = array("id_gallery" => $id);
		$data['product_data'] = $this->ays_model->getDataProdukWhere($whereProduk);
		$data['gallery_data'] = $this->ays_model->getDataGalleryWhere($whereGallery)->row();
		$data['about_data'] = $this->ays_model->getDataAbout()->row();
		$data['setting_data'] = $this->ays_model->getDataSetting()->row();
		$this->load->view('fe/artikelDetailContent',$data);
	}
	public function hubungi()
	{
		$whereProduk = array("status_publikasi" => "publik", "a.status" => "aktif");
		$whereGallery = array("status_publikasi" => "publik", "a.status" => "aktif");
		$data['product_data'] = $this->ays_model->getDataProdukWhere($whereProduk);
		$data['gallery_data'] = $this->ays_model->getDataGalleryWhere($whereGallery);
		$data['about_data'] = $this->ays_model->getDataAbout()->row();
		$data['setting_data'] = $this->ays_model->getDataSetting()->row();
		$data['pages_data'] = $this->ays_model->getDataPagesOnly(7)->row();
		$this->load->view('fe/hubungiContent',$data);
	}


	public function detail($id = null)
	{
		if ($id) {

			// echo "idnya : ".$id."";die;
			$where = array(
				"status" => 'aktif'
			);
			$whereProduk = array("status_publikasi" => "publik", "a.status" => "aktif", "id_produk" => $id);
			$data['slider_data'] = $this->ays_model->getDataSliderWhere($where)->result();
			$data['product_data'] = $this->ays_model->getDataProdukWhere($whereProduk)->row();
			$data['setting_data'] = $this->ays_model->getDataSetting()->row();
			// echo var_dump($data['product_data']);die;
			$this->load->view('fe/detail', $data);
		} else {
			redirect('site');
		}
	}

	public function saveFeedback()
	{
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$no_telp = $this->input->post('no_telp');
		$nama_perusahaan = $this->input->post('nama_perusahaan');
		$message = $this->input->post('message');
		$minat = $this->input->post('minat');
		$data = array(
			"nama_visitor" => $name,
			"email_visitor" => $email,
			"no_telp_visitor" => $no_telp,
			"nama_perusahaan" => $nama_perusahaan,
			"message_visitor" => $message,
			"created" => date('Y-m-d H:i:s'),
			"status_read" => 'pending',
			"minat_id_produk" => $minat,
		);
		$save = $this->ays_model->saveData('feedback', $data);
		if ($save) {
			echo "<script>alert('Pesan Berhasil Dikirimkan!');javascript:history.go(-1);</script>";
		} else {
			echo "<script>alert('Terjadi Kesalahan Saat Mengirimkan Pesan!');javascript:history.go(-1);</script>";
		}
	}

	public function visit_produk()
	{
		$id_produk = $this->input->post('id_produk');
		$datas = array(
			"id_produk" => $id_produk,
			"year" => date('Y'),
			"month" => date('Mon')
		);
		$this->ays_model->saveData('visitor', $datas);
		$response = array(
			"response" => "success"
		);
		echo json_encode($response);
	}
}

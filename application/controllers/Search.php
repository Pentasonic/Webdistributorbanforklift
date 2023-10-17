<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Search extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		error_reporting(0);
		$this->load->library("session");
		$this->load->helper('url');
	}
	public function index(){
		$brand = $this->input->post('brand');
		$search = $this->input->post('search');
		if(!isset($_GET['page'])){
			$page = 1;
		}else{
			$page = $_GET['page'];
		}
		if(isset($brand) && isset($search)){
			$whereGallery = array("status_publikasi" => "publik", "a.status" => "aktif");
			$data['merek_data'] = $this->ays_model->getDataMerek()->result();
			$data['product_data'] = $this->ays_model->getDataProdukWhereSearch($brand, $search);
			// $data['product_data_p1'] = $this->ays_model->getDataProdukWherePage($page, null);
			$data['gallery_data'] = $this->ays_model->getDataGalleryWhere($whereGallery);
			$data['about_data'] = $this->ays_model->getDataAbout()->row();
			$data['setting_data'] = $this->ays_model->getDataSetting()->row();
			$data['pages_data'] = $this->ays_model->getDataPagesOnly(12)->row();
			$this->load->view('fe/katalogContent', $data);

		}else{
			$whereGallery = array("status_publikasi" => "publik", "a.status" => "aktif");
			$data['merek_data'] = $this->ays_model->getDataMerek()->result();
			$data['product_data'] = $this->ays_model->getDataProdukWhereSearch($brand, $search);
			// $data['product_data_p1'] = $this->ays_model->getDataProdukWherePage($page, null);
			$data['gallery_data'] = $this->ays_model->getDataGalleryWhere($whereGallery);
			$data['about_data'] = $this->ays_model->getDataAbout()->row();
			$data['setting_data'] = $this->ays_model->getDataSetting()->row();
			$data['pages_data'] = $this->ays_model->getDataPagesOnly(12)->row();
			$this->load->view('fe/katalogContent', $data);
		}
		
		

	}
}

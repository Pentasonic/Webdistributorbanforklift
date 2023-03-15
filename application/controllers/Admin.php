<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
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
		if ($this->session->userdata('logged_in')) {
			$whereProduk = array("status_publikasi" => "publik", "a.status" => "aktif");
			$whereGallery = array("status_publikasi" => "publik", "a.status" => "aktif");
			$data['product_data'] = $this->ays_model->getDataProdukWhere($whereProduk)->num_rows();
			$data['prd'] = $this->ays_model->getDataProdukWhere($whereProduk)->result();
			$data['gallery_data'] = $this->ays_model->getDataGalleryWhere($whereGallery)->num_rows();
			$data['feedback_data'] = $this->ays_model->getDataFeedback()->num_rows();
			$data['visitor_data'] = $this->ays_model->getDataVisitor()->num_rows();

			$data['pie_colour'] = array();
			$generate_color = count($data['prd']);
			for ($ic = 0; $ic < $generate_color; $ic++) {
				$rand = str_pad(dechex(rand(0x000000, 0xFFFFFF)), 6, 0, STR_PAD_LEFT);

				array_push($data['pie_colour'], '#' . $rand);
			}
			$this->load->view('be/index', $data);
		} else {
			redirect('login');
		}
	}

	public function save_image_crop(){
		if(!empty($this->input->post('imageCrop'))){
			$data = $this->input->post('imageCrop');
			$imgArr1 = explode(";",$data);
			$imgArr2 = explode(",",$imgArr1[1]);
			$decodeImg = base64_decode($imgArr2[1]);
			$filename = "assets/uploads/".time().".jpg";
			$prosess = file_put_contents($filename,$decodeImg);
			if($prosess){

				$respose_crop = array(
					"status" => "suskes",
					"message" => "suskes",
					"img_url" => $filename
				);
			}else{
				$respose_crop = array(
					"status" => "gagal",
					"message" => "terjadi Kesalahan saat Proses Upload",
					"img_url" => ""
				);

			}

		}else{
			$respose_crop = array(
				"status" => "gagal",
				"message" => "file kosong",
				"img_url" => "alamat"
			);

		}
		echo json_encode($respose_crop);
	}

	public function setting_brand()
	{
		if ($this->session->userdata('logged_in')) {
			$data['setting_data'] = $this->ays_model->getDataSetting()->row();
			$data['about_data'] = $this->ays_model->getDataAbout()->row();
			$this->load->view('be/setting_brand', $data);
		} else {
			redirect('login');
		}
	}

	public function saveBrand()
	{
		if ($this->session->userdata('logged_in')) {
			$nama_tab = $this->input->post('brand-tab');
			$nama_web = $this->input->post('brand-tiitle');
			$logo = $this->input->post('brand-logo-image-url');
			$footerImg = $this->input->post('brand-about-image-url');
			$id = $this->session->userdata('id');

			$data = array(
				"judul_tab" => $nama_tab,
				"judul_website" => $nama_web,
				"id_creator" => $this->session->userdata('id')
			);
			$about = array();
			if ($logo != '') {
					$datalogo = array(
						"nama_asset" => "Logo Website",
						"lokasi" => $logo,
						"id_creator" => $id,
						"created" => date('Y-m-d H:i:s'),
						"updated" => date('Y-m-d H:i:s'),
					);
				$id_asset = $this->ays_model->saveDataId('asset', $datalogo);
				$data["gambar_ico"] = $id_asset;
			} else {
				echo "logo kosong!";
			}
			if ($footerImg != '') {
					$dataabout = array(
						"nama_asset" => "Image About Website",
						"lokasi" => $footerImg,
						"id_creator" => $id,
						"created" => date('Y-m-d H:i:s'),
						"updated" => date('Y-m-d H:i:s'),
					);
				$id_asset = $this->ays_model->saveDataId('asset', $dataabout);
				$about["gambar_about"] = $id_asset;
				$about["updated"] = date('Y-m-d H:i:s');
				$about["id_creator"] = $this->session->userdata('id');
				$whereabout = array("id_about" => 1);
				$update_about = $this->ays_model->updateData('about', $about, $whereabout);
			} else {
				echo "image footer kosong!";
			}

			$where = array("id_setting" => 3);
			$update_brand = $this->ays_model->updateData('global_setting', $data, $where);



			echo "<script>alert('Setting Brand Berhasil Disimpan!');javascript:history.go(-1);</script>";
		} else {
			redirect('login');
		}
	}
	public function setting_info()
	{
		if ($this->session->userdata('logged_in')) {

			$data['about_data'] = $this->ays_model->getDataAbout()->row();
			$data['setting_data'] = $this->ays_model->getDataSetting()->row();
			$this->load->view('be/setting_info', $data);
		} else {
			redirect('login');
		}
	}

	public function saveInfo()
	{
		if ($this->session->userdata('logged_in')) {
			$nama_judul = $this->input->post('info-judul');
			$nama_deskripsi = $this->input->post('info-deskripsi');
			$nama_telephone = $this->input->post('info-telephone');
			$nama_wa = $this->input->post('info-wa');
			$nama_email = $this->input->post('info-email');
			$nama_website = $this->input->post('info-website');
			$nama_lokasi = $this->input->post('info-lokasi');
			$nama_wt = $this->input->post('info-wt');
			$nama_maps = $this->input->post('info-maps');
			$id = $this->session->userdata('id');

			$countProcess = 0;
			$whereAbout = array(
				"id_about" => 1
			);
			$whereInfo = array(
				"id_setting" => 3
			);
			$dataAbout = array(
				"judul" => $nama_judul,
				"deksripsi" => $nama_deskripsi,
				"id_creator" => $id
			);
			$about = $this->ays_model->updateData('about', $dataAbout, $whereAbout);
			if ($about) {
				$countProcess++;
			}
			$dataInfo = array(
				"contact_setting_phone" => $nama_telephone,
				"contact_setting_wa" => $nama_wa,
				"contact_setting_email" => $nama_email,
				"contact_setting_website" => $nama_website,
				"contact_setting_lokasi_string" => $nama_lokasi,
				"contact_setting_work_time" => $nama_wt,
				"contact_setting_maps_lat_lag" => $nama_maps,
				"id_creator" => $id
			);
			$info = $this->ays_model->updateData('global_setting', $dataInfo, $whereInfo);

			if ($info) {
				$countProcess++;
			}
			echo "<script>alert('Setting Info Berhasil Disimpan!');javascript:history.go(-1);</script>";
		} else {
			redirect('login');
		}
	}

	public function aboutList()
	{
		if ($this->session->userdata('logged_in')) {

			$list = $this->input->post('dataList');
			$data = array(
				"child_array" => $list,
				"id_creator" => $this->session->userdata('id')
			);
			$where = array(
				"id_about" => 1
			);
			$this->ays_model->updateData('about', $data, $where);
			$response = array(
				"response" => "success",
				"dataDiterima" => $list
			);
			echo json_encode($response);
		} else {
			redirect('login');
		}
	}
	public function setting_social()
	{
		if ($this->session->userdata('logged_in')) {

			$data['setting_data'] = $this->ays_model->getDataSetting()->row();
			$this->load->view('be/setting_social', $data);
		} else {
			redirect('login');
		}
	}
	public function igList()
	{
		if ($this->session->userdata('logged_in')) {

			$list = $this->input->post('igList');
			$data = array(
				"footer_setting_global_asset_ig_image_array" => $list,
				"id_creator" => $this->session->userdata('id')
			);
			$where = array(
				"id_setting" => 3
			);
			$this->ays_model->updateData('global_setting', $data, $where);
			$response = array(
				"response" => "success",
				"dataDiterima" => $data
			);
			echo json_encode($response);
		} else {
			redirect('login');
		}
	}
	public function setting_public()
	{
		if ($this->session->userdata('logged_in')) {

			$data['slider_data'] = $this->ays_model->getDataSlider()->result();
			$this->load->view('be/setting_public', $data);
		} else {
			redirect('login');
		}
	}
	public function setting_pages()
	{
		if ($this->session->userdata('logged_in')) {

			$data['pages_data'] = $this->ays_model->getDataPages()->result();
			$this->load->view('be/setting_pages', $data);
		} else {
			redirect('login');
		}
	}
	public function new_slider()
	{
		if ($this->session->userdata('logged_in')) {

			$this->load->view('be/new_slider');
		} else {
			redirect('login');
		}
	}
	public function new_produk()
	{
		if ($this->session->userdata('logged_in')) {
			$data['merek_data'] = $this->ays_model->getDataMerek()->result();
			$data['kategori_data'] = $this->ays_model->getDataKategori()->result();
			$data['jenis_produk_data'] = $this->ays_model->getDataJenis()->result();
			$this->load->view('be/new_produk',$data);
		} else {
			redirect('login');
		}
	}
	public function new_artikel()
	{
		if ($this->session->userdata('logged_in')) {
			$this->load->view('be/new_artikel');
		} else {
			redirect('login');
		}
	}
	public function new_merek()
	{
		if ($this->session->userdata('logged_in')) {
			$this->load->view('be/new_merek');
		} else {
			redirect('login');
		}
	}
	public function edit_merek($id)
	{
		if ($this->session->userdata('logged_in')) {
			$whereMerek = array("id_merek" => $id);
			$data['merek_data'] = $this->ays_model->getDataMerekWhere($whereMerek)->row();
			$this->load->view('be/edit_merek', $data);
		} else {
			redirect('login');
		}
	}
	public function edit_artikel($id)
	{
		if ($this->session->userdata('logged_in')) {
			$whereGallery = array("id_gallery" => $id);
			$data['gallery_data'] = $this->ays_model->getDataGalleryWhere($whereGallery)->row();
			$this->load->view('be/edit_artikel',$data);
		} else {
			redirect('login');
		}
	}
	public function edit_produk($id)
	{
		if ($this->session->userdata('logged_in')) {
			$where = array(
				"id_produk" => $id
			);
			$data['data_produk'] = $this->ays_model->getDataProdukWhere($where)->row();
			$data['merek_data'] = $this->ays_model->getDataMerek()->result();
			$data['kategori_data'] = $this->ays_model->getDataKategori()->result();
			$data['jenis_produk_data'] = $this->ays_model->getDataJenis()->result();
			$this->load->view('be/edit_produk',$data);
		} else {
			redirect('login');
		}
	}
	public function edit_slider($id)
	{
		if ($this->session->userdata('logged_in')) {
			$where = array(
				"a.id_slider" => $id
			);
			$data['data_slider'] = $this->ays_model->getDataSliderWhere($where)->row();
			$this->load->view('be/edit_slider', $data);
		} else {
			redirect('login');
		}
	}
	public function edit_pages($id)
	{
		if ($this->session->userdata('logged_in')) {
			$where = array(
				"a.id_pages" => $id
			);
			$data['data_pages'] = $this->ays_model->getDataPagesWhere($where)->row();
			$this->load->view('be/edit_pages', $data);
		} else {
			redirect('login');
		}
	}
	public function user_data()
	{
		if ($this->session->userdata('logged_in')) {

			$data['user_data'] = $this->ays_model->getDataUser()->result();
			$this->load->view('be/user_data', $data);
		} else {
			redirect('login');
		}
	}
	public function product_data()
	{
		if ($this->session->userdata('logged_in')) {

			$data['produk_data'] = $this->ays_model->getDataProduk()->result();
			$this->load->view('be/product_data', $data);
		} else {
			redirect('login');
		}
	}
	public function kategori_data()
	{
		if ($this->session->userdata('logged_in')) {

			$data['kategori_data'] = $this->ays_model->getDataKategori()->result();
			$this->load->view('be/kategori_data', $data);
		} else {
			redirect('login');
		}
	}
	public function jenis_data()
	{
		if ($this->session->userdata('logged_in')) {

			$data['jenis_data'] = $this->ays_model->getDataJenis()->result();
			$this->load->view('be/jenis_data', $data);
		} else {
			redirect('login');
		}
	}
	public function artikel_data()
	{
		if ($this->session->userdata('logged_in')) {

			$data['artikel_data'] = $this->ays_model->getDataGallery()->result();
			// echo var_dump($data['artikel_data']);die();
			$this->load->view('be/artikel_data', $data);
		} else {
			redirect('login');
		}
	}
	public function setting_merek()
	{
		if ($this->session->userdata('logged_in')) {

			$data['merek_data'] = $this->ays_model->getDataMerek()->result();
			// echo var_dump($data['artikel_data']);die();
			$this->load->view('be/setting_merek', $data);
		} else {
			redirect('login');
		}
	}
	public function image()
	{
		if ($this->session->userdata('logged_in')) {

			$data['image'] = $this->ays_model->getDataImage()->result();
			$this->load->view('be/image', $data);
		} else {
			redirect('login');
		}
	}

	public function AddGambarProcess()
	{
		if ($this->session->userdata('logged_in')) {
			$image = $_FILES['image-upload']['tmp_name'];
			$desc = $this->input->post('image-desc');
			$id = $this->session->userdata('id');
			if (!empty($image)) {
				// configurasi asset
				$file_n = str_replace(' ', '-', date('Y-m-d H:i:s') . '-' . $id);
				$file_name = str_replace(':', '-', $file_n);
				$config['upload_path']          = './assets/uploads/';
				$config['file_name']            = $file_name;
				$config['allowed_types']        = 'gif|jpg|jpeg|png';
				$config['overwrite']            = true;
				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('image-upload')) {
					$e = $this->upload->display_errors();
					echo "Terjadi Kesalahan Saat Upload Data Logo";
				} else {
					$uploaded_data = $this->upload->data();
					// echo var_dump($uploaded_data['file_ext']);die;
					$datalogo = array(
						"nama_asset" => $desc,
						"lokasi" => 'assets/uploads/' . $file_name . $uploaded_data['file_ext'],
						"id_creator" => $id,
						"created" => date('Y-m-d H:i:s'),
						"updated" => date('Y-m-d H:i:s'),
					);
					$id_asset = $this->ays_model->saveDataId('asset', $datalogo);
				}
			} else {

				echo "logo kosong!";
			}
			echo "<script>alert('Gambar Berhasil Disimpan!');javascript:history.go(-1);</script>";
		} else {
			redirect('login');
		}
	}
	public function AddSliderProcess()
	{
		if ($this->session->userdata('logged_in')) {
			$image = $this->input->post('brand-logo-image-url');
			$judul = $this->input->post('public-judul');
			$pintasan = $this->input->post('public-pintasan');
			$url = $this->input->post('public-url');
			$public_desc = $this->input->post('public-desc');
			$id = $this->session->userdata('id');
			if (!empty($image)) {
				
					$datalogo = array(
						"nama_asset" => $judul . ' Slider',
						"lokasi" => $image,
						"id_creator" => $id,
						"created" => date('Y-m-d H:i:s'),
						"updated" => date('Y-m-d H:i:s'),
					);
					$id_asset = $this->ays_model->saveDataId('asset', $datalogo);
					$data = array(
						"gambar_slider" => $id_asset,
						"judul_slider" => $judul,
						"deskripsi_slider" => $public_desc,
						"link_pintasan" => $pintasan,
						"url_link_pintasan" => $url,
						"id_creator" => $id,
						"created" => date('Y-m-d H:i:s'),
						"updated" => date('Y-m-d H:i:s'),
					);
					$saved = $this->ays_model->saveData('slider', $data);
					if($saved){
						echo "<script>alert('Slider Berhasil Ditambahkan!');</script>";
						redirect('admin/setting_public');
					}else{

					}
				
			} else {

				echo "logo kosong!";
			}
			// echo "<script>alert('Slider Berhasil Disimpan!');javascript:history.go(-1);</script>";
		} else {
			redirect('login');
		}
	}
	public function EditSliderProcess()
	{
		if ($this->session->userdata('logged_in')) {
			$image = $this->input->post('brand-logo-image-url');
			$judul = $this->input->post('Epublic-judul');
			$pintasan = $this->input->post('Epublic-pintasan');
			$url = $this->input->post('Epublic-url');
			$public_desc = $this->input->post('Epublic-desc');
			$id_slider = $this->input->post('id_slider_edit');
			$id = $this->session->userdata('id');
			if (!empty($image)) {
				
				$datalogo = array(
					"nama_asset" => $judul . ' Slider',
					"lokasi" => $image,
					"id_creator" => $id,
					"created" => date('Y-m-d H:i:s'),
					"updated" => date('Y-m-d H:i:s'),
				);
				$id_asset = $this->ays_model->saveDataId('asset', $datalogo);
				$data = array(
					"gambar_slider" => $id_asset,
					"judul_slider" => $judul,
					"deskripsi_slider" => $public_desc,
					"link_pintasan" => $pintasan,
					"url_link_pintasan" => $url,
					"id_creator" => $id
				);
			}else{

				$data = array(
					"judul_slider" => $judul,
					"deskripsi_slider" => $public_desc,
					"link_pintasan" => $pintasan,
					"url_link_pintasan" => $url,
					"id_creator" => $id
				);
			}
			$where = array(
				"id_slider" => $id_slider
			);
			$this->ays_model->updateData('slider', $data, $where);

			echo "<script>alert('Slider Berhasil Disimpan!');javascript:history.go(-2);</script>";
		} else {
			redirect('login');
		}
	}
	public function EditPagesProcess()
	{
		if ($this->session->userdata('logged_in')) {
			$image = $this->input->post('brand-logo-image-url');
			$judul = $this->input->post('Epublic-judul');
			$public_desc = $this->input->post('Epublic-desc');
			$id_pages = $this->input->post('id_pages_edit');
			$id = $this->session->userdata('id');
			if (!empty($image)) {
				
				$datalogo = array(
					"nama_asset" => $judul . ' Slider',
					"lokasi" => $image,
					"id_creator" => $id,
					"created" => date('Y-m-d H:i:s'),
					"updated" => date('Y-m-d H:i:s'),
				);
				$id_asset = $this->ays_model->saveDataId('asset', $datalogo);
				$data = array(
					"gambar_pages" => $id_asset,
					"judul_pages" => $judul,
					"deskripsi_pages" => $public_desc,
					"id_creator" => $id
				);
			}else{

				$data = array(
					"judul_pages" => $judul,
					"deskripsi_pages" => $public_desc,
					"id_creator" => $id
				);
			}
			$where = array(
				"id_pages" => $id_pages
			);
			$this->ays_model->updateData('pages', $data, $where);

			echo "<script>alert('Pages Berhasil Disimpan!');javascript:history.go(-2);</script>";
		} else {
			redirect('login');
		}
	}

	public function AddProdukProcess()
	{
		if ($this->session->userdata('logged_in')) {
			$image = $this->input->post('brand-logo-image-url');
			$kode = $this->input->post('produk-kode');
			$merek = $this->input->post('merek');
			$kategori = $this->input->post('kategori');
			$jenis = $this->input->post('jenis');
			$nama = $this->input->post('produk-nama');
			$summary = $this->input->post('produk-summary');
			$full = $this->input->post('produk-full');
			$harga = $this->input->post('produk-harga');
			$satuan = $this->input->post('produk-satuan');
			$id = $this->session->userdata('id');
			if (!empty($image)) {
				
					$datalogo = array(
						"nama_asset" => $nama . ' Produk',
						"lokasi" => $image,
						"id_creator" => $id,
						"created" => date('Y-m-d H:i:s'),
						"updated" => date('Y-m-d H:i:s'),
					);
					$id_asset = $this->ays_model->saveDataId('asset', $datalogo);
					$data = array(
						"id_gambar" => $id_asset,
						"id_creator" => $id,
						"kode_produk" => $kode,
						"id_merek" => $merek,
						"id_kategori" => $kategori,
						"id_jenis_produk" => $jenis,
						"nama_produk" => $nama,
						"summary_deskripsi" => $full,
						"full_deskripsi" => $full,
						"harga_produk" => $harga,
						"jenis_satuan" => $satuan,
						"created" => date('Y-m-d H:i:s'),
						"updated" => date('Y-m-d H:i:s'),
					);
					$this->ays_model->saveData('produk', $data);
				
			} else {

				echo "logo kosong!";
			}
			echo "<script>alert('Produk Berhasil Disimpan!');javascript:history.go(-2);</script>";
		} else {
			redirect('login');
		}
	}
	public function EditProdukProcess()
	{
		if ($this->session->userdata('logged_in')) {
			$image = $this->input->post('brand-logo-image-url');
			$kode = $this->input->post('produk-kode');
			$merek = $this->input->post('merek');
			$kategori = $this->input->post('kategori');
			$jenis = $this->input->post('jenis');
			$nama = $this->input->post('produk-nama');
			$summary = $this->input->post('produk-summary');
			$full = $this->input->post('produk-full');
			$harga = $this->input->post('produk-harga');
			$satuan = $this->input->post('produk-satuan');
			$id_produk = $this->input->post('id_produk_edit');
			$id = $this->session->userdata('id');

			if (!empty($image)) {
					$datalogo = array(
						"nama_asset" => $nama . ' Produk',
						"lokasi" => $image,
						"id_creator" => $id,
						"created" => date('Y-m-d H:i:s'),
						"updated" => date('Y-m-d H:i:s'),
					);
					$id_asset = $this->ays_model->saveDataId('asset', $datalogo);
					$data = array(
						"id_gambar" => $id_asset,
						"id_creator" => $id,
						"kode_produk" => $kode,
						"id_merek" => $merek,
						"id_kategori" => $kategori,
						"id_jenis_produk" => $jenis,
						"nama_produk" => $nama,
						"summary_deskripsi" => $summary,
						"full_deskripsi" => $full,
						"harga_produk" => $harga,
						"jenis_satuan" => $satuan,
						"created" => date('Y-m-d H:i:s'),
						"updated" => date('Y-m-d H:i:s'),
					);
					$where = array(
						"id_produk" => $id_produk
					);
					$this->ays_model->updateData('produk', $data, $where);
				
			} else {
				$data = array(
					"id_creator" => $id,
					"kode_produk" => $kode,
					"id_merek" => $merek,
					"id_kategori" => $kategori,
					"id_jenis_produk" => $jenis,
					"nama_produk" => $nama,
					"summary_deskripsi" => $summary,
					"full_deskripsi" => $full,
					"harga_produk" => $harga,
					"jenis_satuan" => $satuan,
				);
				$where = array(
					"id_produk" => $id_produk
				);
				$this->ays_model->updateData('produk', $data, $where);

				echo "logo kosong!";
			}
			echo "<script>alert('Produk Berhasil Disimpan!');javascript:history.go(-2);</script>";
		} else {
			redirect('login');
		}
	}
	public function AddGalleryProcess()
	{
		if ($this->session->userdata('logged_in')) {
			$image = $this->input->post('brand-logo-image-url');
			$judul = $this->input->post('judul');
			$summary = $this->input->post('summary');
			$desc = $this->input->post('artikel-full');

			$id = $this->session->userdata('id');
			if (!empty($image)) {
					$datalogo = array(
						"nama_asset" => $judul . ' gallery',
						"lokasi" => $image,
						"id_creator" => $id,
						"created" => date('Y-m-d H:i:s'),
						"updated" => date('Y-m-d H:i:s'),
					);
					$id_asset = $this->ays_model->saveDataId('asset', $datalogo);
					$data = array(
						"id_asset" => $id_asset,
						"id_creator" => $id,
						"judul" => $judul,
						"summary" => $summary,
						"deskripsi_gallery" => $desc,
						"created" => date('Y-m-d H:i:s'),
						"updated" => date('Y-m-d H:i:s'),
					);
					$this->ays_model->saveData('gallery', $data);
				
			} else {

				echo "logo kosong!";
			}
			echo "<script>alert('Artikel Berhasil Disimpan!');javascript:history.go(-2);</script>";
		} else {
			redirect('login');
		}
	}
	public function AddMerekProcess()
	{
		if ($this->session->userdata('logged_in')) {
			$image = $this->input->post('brand-logo-image-url');
			$nama = $this->input->post('nama');

			$id = $this->session->userdata('id');
			if (!empty($image)) {
					$datalogo = array(
						"nama_asset" => $nama . ' merek',
						"lokasi" => $image,
						"id_creator" => $id,
						"created" => date('Y-m-d H:i:s'),
						"updated" => date('Y-m-d H:i:s'),
					);
					$id_asset = $this->ays_model->saveDataId('asset', $datalogo);
					$data = array(
						"id_gambar" => $id_asset,
						"id_creator" => $id,
						"nama_merek" => $nama,
						"created" => date('Y-m-d H:i:s'),
						"updated" => date('Y-m-d H:i:s'),
					);
					$this->ays_model->saveData('merek', $data);
				
			} else {

				echo "logo kosong!";
			}
			echo "<script>alert('Merek Berhasil Disimpan!');javascript:history.go(-2);</script>";
		} else {
			redirect('login');
		}
	}
	public function EditMerekProcess()
	{
		if ($this->session->userdata('logged_in')) {
			$image = $this->input->post('brand-logo-image-url');
			$nama = $this->input->post('nama');
			$id_merek = $this->input->post('id_merek');

			$id = $this->session->userdata('id');
			$where = array(
				"id_merek" => $id_merek
			);
			if (!empty($image)) {
					$datalogo = array(
						"nama_asset" => $nama . ' merek',
						"lokasi" => $image,
						"id_creator" => $id,
						"created" => date('Y-m-d H:i:s'),
						"updated" => date('Y-m-d H:i:s'),
					);
					$id_asset = $this->ays_model->saveDataId('asset', $datalogo);
					$data = array(
						"id_gambar" => $id_asset,
						"id_creator" => $id,
						"nama_merek" => $nama,
						"created" => date('Y-m-d H:i:s'),
						"updated" => date('Y-m-d H:i:s'),
					);
					$this->ays_model->updateData('merek', $data, $where);
					
				} else {
					$data = array(
						"id_creator" => $id,
						"nama_merek" => $nama,
						"created" => date('Y-m-d H:i:s'),
						"updated" => date('Y-m-d H:i:s'),
					);
					$this->ays_model->updateData('merek', $data, $where);

				echo "logo kosong!";
			}
			echo "<script>alert('Merek Berhasil Disimpan!');javascript:history.go(-2);</script>";
		} else {
			redirect('login');
		}
	}
	public function editGalleryProcess()
	{
		if ($this->session->userdata('logged_in')) {
			$image = $this->input->post('brand-logo-image-url');
			$judul = $this->input->post('judul');
			$summary = $this->input->post('summary');
			$desc = $this->input->post('artikel-full');
			$id_gallery = $this->input->post('id_gallery');

			$id = $this->session->userdata('id');
			$where = array(
				"id_gallery" => $id_gallery
			);
			if (!empty($image)) {
					$datalogo = array(
						"nama_asset" => $judul . ' gallery',
						"lokasi" => $image,
						"id_creator" => $id,
						"created" => date('Y-m-d H:i:s'),
						"updated" => date('Y-m-d H:i:s'),
					);
					$id_asset = $this->ays_model->saveDataId('asset', $datalogo);
					$data = array(
						"id_asset" => $id_asset,
						"id_creator" => $id,
						"judul" => $judul,
						"summary" => $summary,
						"deskripsi_gallery" => $desc,
						"created" => date('Y-m-d H:i:s'),
						"updated" => date('Y-m-d H:i:s'),
					);
					$this->ays_model->updateData('gallery', $data, $where);
				
			} else {
				$data = array(
					"id_creator" => $id,
					"judul" => $judul,
					"summary" => $summary,
					"deskripsi_gallery" => $desc,
					"created" => date('Y-m-d H:i:s'),
					"updated" => date('Y-m-d H:i:s'),
				);
				$this->ays_model->updateData('gallery', $data, $where);

				echo "logo kosong!";
			}
			echo "<script>alert('Artikel Berhasil Disimpan!');javascript:history.go(-2);</script>";
		} else {
			redirect('login');
		}
	}

	public function pintasanSlider()
	{
		if ($this->session->userdata('logged_in')) {

			$id = $this->input->post('id');
			$status = $this->input->post('status');
			$data = array(
				"status_link_pintasan" => $status,
				"updated" => date('Y-m-d H:i:s'),
				"id_creator" => $this->session->userdata('id')

			);
			$where = array(
				"id_slider" => $id,
			);
			$this->ays_model->updateData('slider', $data, $where);
			$response = array(
				"response" => "success",
				"dataDiterima" => 'status pintasan id ' . $id . ' diset menjadi ' . $status
			);
			echo json_encode($response);
		} else {
			redirect('login');
		}
	}
	public function statusSlider()
	{
		if ($this->session->userdata('logged_in')) {

			$id = $this->input->post('id');
			$status = $this->input->post('status');
			$data = array(
				"status" => $status,
				"updated" => date('Y-m-d H:i:s'),
				"id_creator" => $this->session->userdata('id')

			);
			$where = array(
				"id_slider" => $id
			);
			$this->ays_model->updateData('slider', $data, $where);
			$response = array(
				"response" => "success",
				"dataDiterima" => 'status slider id ' . $id . ' diset menjadi ' . $status
			);
			echo json_encode($response);
		} else {
			redirect('login');
		}
	}
	public function statusPages()
	{
		if ($this->session->userdata('logged_in')) {

			$id = $this->input->post('id');
			$status = $this->input->post('status');
			$data = array(
				"status" => $status,
				"updated" => date('Y-m-d H:i:s'),
				"id_creator" => $this->session->userdata('id')

			);
			$where = array(
				"id_pages" => $id
			);
			$this->ays_model->updateData('pages', $data, $where);
			$response = array(
				"response" => "success",
				"dataDiterima" => 'status pages id ' . $id . ' diset menjadi ' . $status
			);
			echo json_encode($response);
		} else {
			redirect('login');
		}
	}
	public function AddUserProcess()
	{
		if ($this->session->userdata('logged_in')) {
			$nama = $this->input->post('user-nama');
			$jk = $this->input->post('user-jk');
			$email = $this->input->post('user-email');
			$pass = $this->input->post('user-password');
			$level = $this->input->post('user-level');
			// $id = $this->session->userdata('id');
			$data = array(
				"nama_user" => $nama,
				"jenis_kelamin" => $jk,
				"username" => $email,
				"password" => sha1($pass),
				"level" => $level,
				"created" => date('Y-m-d H:i:s'),
				"updated" => date('Y-m-d H:i:s'),
			);
			$this->ays_model->saveData('user', $data);

			echo "<script>alert('User Berhasil Disimpan!');javascript:history.go(-1);</script>";
		} else {
			redirect('login');
		}
	}
	public function AddKategoriProcess()
	{
		if ($this->session->userdata('logged_in')) {
			$nama = $this->input->post('nama');
			$id = $this->session->userdata('id');
			$data = array(
				"nama_kategori" => $nama,
				"id_creator" => $id,
				"created" => date('Y-m-d H:i:s'),
				"updated" => date('Y-m-d H:i:s'),
			);
			$this->ays_model->saveData('kategori', $data);

			echo "<script>alert('Kategori Berhasil Disimpan!');javascript:history.go(-1);</script>";
		} else {
			redirect('login');
		}
	}
	public function EditKategoriProcess()
	{
		if ($this->session->userdata('logged_in')) {
			$id = $this->input->post('id');
$where = array(
				"id_kategori" => $id
			);
			$nama = $this->input->post('nama');
			$id = $this->session->userdata('id');
			$data = array(
				"nama_kategori" => $nama,
				"id_creator" => $id,
				"created" => date('Y-m-d H:i:s'),
				"updated" => date('Y-m-d H:i:s'),
			);
			$this->ays_model->updateData('kategori', $data, $where);

			echo "<script>alert('Kategori Berhasil Disimpan!');javascript:history.go(-1);</script>";
		} else {
			redirect('login');
		}
	}
	public function EditJenisProcess()
	{
		if ($this->session->userdata('logged_in')) {
			$id = $this->input->post('idjenis');
$where = array(
				"id_jenis_produk" => $id
			);
			$nama = $this->input->post('namajenis');
			$id = $this->session->userdata('id');
			$data = array(
				"nama_jenis_produk" => $nama,
				"id_creator" => $id,
				"created" => date('Y-m-d H:i:s'),
				"updated" => date('Y-m-d H:i:s'),
			);
			$this->ays_model->updateData('jenis_produk', $data, $where);

			echo "<script>alert('Jenis Produk Berhasil Disimpan!');javascript:history.go(-1);</script>";
		} else {
			redirect('login');
		}
	}
	public function AddJenisProcess()
	{
		if ($this->session->userdata('logged_in')) {
			$nama = $this->input->post('nama');
			$id = $this->session->userdata('id');
			$data = array(
				"nama_jenis_produk" => $nama,
				"id_creator" => $id,
				"created" => date('Y-m-d H:i:s'),
				"updated" => date('Y-m-d H:i:s'),
			);
			$this->ays_model->saveData('jenis_produk', $data);

			echo "<script>alert('Jenis Berhasil Disimpan!');javascript:history.go(-1);</script>";
		} else {
			redirect('login');
		}
	}
	public function saveProfile()
	{
		if ($this->session->userdata('logged_in')) {
			$nama = $this->input->post('user-nama');
			$jk = $this->input->post('user-jk');
			$email = $this->input->post('user-email');
			$pass = $this->input->post('user-password');
			$id = $this->session->userdata('id');
			$data = array(
				"nama_user" => $nama,
				"jenis_kelamin" => $jk,
				"username" => $email,
				"password" => sha1($pass),
				"updated" => date('Y-m-d H:i:s'),
				"id_creator" => $this->session->userdata('id')
			);
			$where = array(
				"id_user" => $id
			);
			$this->ays_model->updateData('user', $data, $where);
			$this->session->set_userdata(array('nama'  => $nama));

			echo "<script>alert('Data Berhasil Disimpan!');javascript:history.go(-1);</script>";
		} else {
			redirect('login');
		}
	}
	public function statusUser()
	{
		if ($this->session->userdata('logged_in')) {

			$id = $this->input->post('id');
			$status = $this->input->post('status');
			$data = array(
				"status" => $status,
				"updated" => date('Y-m-d H:i:s'),
				"id_creator" => $this->session->userdata('id')

			);
			$where = array(
				"id_user" => $id
			);
			$this->ays_model->updateData('user', $data, $where);
			$response = array(
				"response" => "success",
				"dataDiterima" => 'status user id ' . $id . ' diset menjadi ' . $status
			);
			echo json_encode($response);
		} else {
			redirect('login');
		}
	}
	public function statusProduk()
	{
		if ($this->session->userdata('logged_in')) {

			$id = $this->input->post('id');
			$status = $this->input->post('status');
			$data = array(
				"status" => $status,
				"updated" => date('Y-m-d H:i:s'),
				"id_creator" => $this->session->userdata('id')

			);
			$where = array(
				"id_produk" => $id
			);
			$this->ays_model->updateData('produk', $data, $where);
			$response = array(
				"response" => "success",
				"dataDiterima" => 'status user id ' . $id . ' diset menjadi ' . $status
			);
			echo json_encode($response);
		} else {
			redirect('login');
		}
	}
	public function statusPublicProduk()
	{
		if ($this->session->userdata('logged_in')) {

			$id = $this->input->post('id');
			$status = $this->input->post('status');
			$data = array(
				"status_publikasi" => $status,
				"updated" => date('Y-m-d H:i:s'),
				"id_creator" => $this->session->userdata('id')

			);
			$where = array(
				"id_produk" => $id
			);
			$this->ays_model->updateData('produk', $data, $where);
			$response = array(
				"response" => "success",
				"dataDiterima" => 'status user id ' . $id . ' diset menjadi ' . $status
			);
			echo json_encode($response);
		} else {
			redirect('login');
		}
	}
	public function statusGallery()
	{
		if ($this->session->userdata('logged_in')) {

			$id = $this->input->post('id');
			$status = $this->input->post('status');
			$data = array(
				"status" => $status,
				"updated" => date('Y-m-d H:i:s'),
				"id_creator" => $this->session->userdata('id')

			);
			$where = array(
				"id_gallery" => $id
			);
			$this->ays_model->updateData('gallery', $data, $where);
			$response = array(
				"response" => "success",
				"dataDiterima" => 'status gallery id ' . $id . ' diset menjadi ' . $status
			);
			echo json_encode($response);
		} else {
			redirect('login');
		}
	}
	public function statusPublicGallery()
	{
		if ($this->session->userdata('logged_in')) {

			$id = $this->input->post('id');
			$status = $this->input->post('status');
			$data = array(
				"status_publikasi" => $status,
				"updated" => date('Y-m-d H:i:s'),
				"id_creator" => $this->session->userdata('id')

			);
			$where = array(
				"id_gallery" => $id
			);
			$this->ays_model->updateData('gallery', $data, $where);
			$response = array(
				"response" => "success",
				"dataDiterima" => 'status publikasi gallery id ' . $id . ' diset menjadi ' . $status
			);
			echo json_encode($response);
		} else {
			redirect('login');
		}
	}
	public function transaction()
	{
		if ($this->session->userdata('logged_in')) {

			$this->load->view('be/tables');
		} else {
			redirect('login');
		}
	}
	public function getDataSlider()
	{
		$id_slider = $this->input->post('id_slider');
		$where = array(
			"a.id_slider" => $id_slider
		);
		$data = $this->ays_model->getDataSliderWhere($where)->row();
		$response = array(
			"response" => "success",
			"data" => $data
		);
		echo json_encode($response);
	}
	public function getDataProduk()
	{
		$id_produk = $this->input->post('id_produk');
		$where = array(
			"id_produk" => $id_produk
		);
		$data = $this->ays_model->getDataProdukWhere($where)->row();
		$response = array(
			"response" => "success",
			"data" => $data
		);
		echo json_encode($response);
	}
	public function getDataKategori()
	{
		$id_kategori = $this->input->post('id_kategori');
		$where = array(
			"id_kategori" => $id_kategori
		);
		$data = $this->ays_model->getDataKategoriWhere($where)->row();
		$response = array(
			"response" => "success",
			"data" => $data
		);
		echo json_encode($response);
	}
	public function getDataJenis()
	{
		$id_jenis = $this->input->post('id_jenis');
		$where = array(
			"id_jenis_produk" => $id_jenis
		);
		$data = $this->ays_model->getDataJenisWhere($where)->row();
		$response = array(
			"response" => "success",
			"data" => $data
		);
		echo json_encode($response);
	}
	public function profile()
	{
		if ($this->session->userdata('logged_in')) {
			$id = $this->session->userdata('id');
			$where = array(
				"id_user" => $id
			);
			$data['user_data'] = $this->ays_model->getDataUserWhere($where)->row();
			$this->load->view('be/profile', $data);
		} else {
			redirect('login');
		}
	}
	public function feedback_data()
	{
		if ($this->session->userdata('logged_in')) {
			$data['feedback_data'] = $this->ays_model->getDataFeedback()->result();
			$this->load->view('be/feedback_data', $data);
		} else {
			redirect('login');
		}
	}
	public function getChartVisitor()
	{
		if ($this->session->userdata('logged_in')) {
			$where = array(
				"year" => date('Y')
			);
			$visitor_data = $this->ays_model->getDataVisitorWhere($where)->result();
			// $visitor_data_group = $this->ays_model->getDataVisitorWhere($where)->groupBy('year')->result();
			$arr_bulan = array();
			$arr_value = array();
			foreach ($visitor_data as $visit) {
				array_push($arr_bulan, $visit->month);
				array_push($arr_value, $visit->sum_val);
			}
			// $data = '{"bulan":["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],"value":[10000, 100, 500, 25,10,210,400,540,23,43,5,20]}';
			// array_push($arr->bulan,"ok");
			$response = array(
				"message" => "success",
				"bulan" => $arr_bulan,
				"value" => $arr_value
			);
			echo json_encode($response);
		} else {
			redirect('login');
		}
	}
	public function getChartMinat()
	{
		if ($this->session->userdata('logged_in')) {
			$where = array(
				"year" => date('Y')
			);
			$minat_data = $this->ays_model->getDataMinatWhere($where)->result();
			// $visitor_data_group = $this->ays_model->getDataVisitorWhere($where)->groupBy('year')->result();
			$arr_produk = array();
			$arr_value = array();
			foreach ($minat_data as $minat) {
				array_push($arr_produk, $minat->nama_produk);
				array_push($arr_value, $minat->sum_val);
			}
			// $data = '{"bulan":["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],"value":[10000, 100, 500, 25,10,210,400,540,23,43,5,20]}';
			// array_push($arr->bulan,"ok");
			$response = array(
				"message" => "success",
				"produk" => $arr_produk,
				"value" => $arr_value
			);
			echo json_encode($response);
		} else {
			redirect('login');
		}
	}
}

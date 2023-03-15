<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
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
		$data['pages_data'] = $this->ays_model->getDataPagesOnly(8)->row();
		$this->load->view('be/login',$data);
	}

	public function loginProcess()
	{
		$login['username'] = $this->input->post('username');
		$login['password'] = $this->input->post('password');

		$where = array(
			"username" => $login['username'],
			"password" => sha1($login['password']),
			"status" => "aktif"
		);
		$get_data = $this->ays_model->getDataUserWhere($where)->row();

		if (!empty($get_data)) {
			$newdata = array(
				'id'  => $get_data->id_user,
				'username'  => $get_data->username,
				'nama'  => $get_data->nama_user,
				'logged_in' => TRUE
			);

			$store = $this->session->set_userdata($newdata);


			redirect('admin');
		} else {
			redirect('login');
		}
	}
	public function logoutProcess()
	{
		$this->session->sess_destroy();
		redirect('login');

	}
	public function loginForgotPassword()
	{
		echo "ini beda method di kontroller login";
	}
	public function loginForgotProcess()
	{
		echo "ini beda method di kontroller login";
	}
}

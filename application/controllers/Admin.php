<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct(); // you have missed this line.
		$this->load->library('session');
		if (!$this->session->userdata('email')) {
			redirect('home');
		}

		$session_data = $this->session->userdata('id_grup');
		if ($session_data != 3) {
			redirect('home/redirecting');
		}
	}

	public function index()
	{
		$ro = array(
			'title' => 'Dashboard',
			'menu' => 'Dashboard',
			'sub_menu' => 'Admin'
		);

		$this->load->model('admin_model');
		$data = array(
			'total_absen'           => $this->admin_model->total_absen(),
			'total_terdaftar'       => $this->admin_model->total_terdaftar(),
			'total_beli'            => $this->admin_model->total_beli(),
			'total_panitia'         => $this->admin_model->total_panitia()
		);
		// var_dump($data); die;
		$this->load->view('template/admin/header');
		$this->load->view('template/admin/sidebar', $ro);
		$this->load->view('admin/index', $data);
		$this->load->view('template/admin/footer');
	}

	public function tambah_panitia()
	{
		$data = array(
			'title' => 'Tambah Panitia',
			'menu' => 'Panitia',
			'sub_menu' => 'Tambah Panitia',
		);

		$this->load->view('template/admin/header');
		$this->load->view('template/admin/sidebar', $data);
		$this->load->view('admin/tambah_panitia');
		$this->load->view('template/admin/footer');
	}

	public function tambah_aksi()
	{
		$this->load->helper(array('url', 'security'));
		$this->load->library(array('form_validation'));

		$this->form_validation->set_rules(
			'nama',
			'Nama',
			'trim|min_length[2]|max_length[128]|xss_clean|required'
		);
		$this->form_validation->set_rules(
			'email',
			'Email',
			'trim|valid_email|is_unique[users.email]|min_length[2]|max_length[128]|xss_clean|required',
			['is_unique' => 'This email has already registered!']
		);
		$this->form_validation->set_rules(
			'password',
			'Password',
			'trim|min_length[5]|max_length[128]|xss_clean|required'
		);

		$this->form_validation->set_rules(
			'confirm_password',
			'Confirm Password',
			'required|matches[password]'
		);

		if ($this->form_validation->run() == FALSE) {
			$this->tambah_panitia();
		} else {
			$nama			=	$this->input->post('nama');
			$email			=	$this->input->post('email');
			$password		=	$this->input->post('password');
			$id_grup		=	2;
			$data = array(
				'nama'	=>	$nama,
				'email'	=>	$email,
				'password'	=>	password_hash($password, PASSWORD_DEFAULT),
				'id_grup'	=>	$id_grup
			);

			$this->load->model('account');
			$this->account->insertNewUser($data);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Akun panitia berhasil ditambahkan!. <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</button></div>');
			$this->tambah_panitia();
		}
	}

	public function atur_ticket()
	{
		$this->load->model('admin_model');

		$ro = array(
			'title' => 'Admin',
			'menu' => 'Ticket',
			'sub_menu' => 'Data Ticket',
		);

		$data['ticket'] = $this->admin_model->get_ticket();
		$data['disk'] = $this->admin_model->get_disk();

		$this->load->view('template/admin/header');
		$this->load->view('template/admin/sidebar', $ro);
		$this->load->view('admin/atur_ticket', $data);
		$this->load->view('template/admin/footer');
	}

	public function edit_diskon()
	{
		//Update pada tabel diskon
		$data = array(
			'diskon'	=> $this->input->post('diskon'),
		);

		$where = array(
			'id_disk' => 1
		);

		$this->load->model('admin_model');
		$this->admin_model->update_ticket('disk', $data, $where);

		//Update ditabel kategori ticket
		$diskon = $this->input->post('diskon');
		$total = 30000 - ($diskon*2);

		$data2 = array(
			'harga_ticket'	=> $total,
		);

		$where2 = array(
			'sts_ticket' => 3
		);

		$this->load->model('admin_model');
		$this->admin_model->update_ticket('category_ticket', $data2, $where2);
		
		//Redirect ke halaman data ticket
		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data Diskon Ticket berhasil diperbarui!. <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</button></div>');
		$ro = array(
			'title' => 'Admin',
			'menu' => 'Ticket',
			'sub_menu' => 'Data Ticket',
		);

		$data['ticket'] = $this->admin_model->get_ticket();
		$data['disk'] = $this->admin_model->get_disk();
		$this->load->view('template/admin/header');
		$this->load->view('template/admin/sidebar', $ro);
		$this->load->view('admin/atur_ticket', $data);
		$this->load->view('template/admin/footer');
	}

	public function aksi_atur()
	{

		$data = array(
			'mulai_expo'	=> $this->input->post('mulai_expo'),
			'end_expo'		=> $this->input->post('end_expo'),
			'tgl_expo'		=> $this->input->post('tgl_expo'),
			'harga'			=> $this->input->post('harga'),
			'kapasitas'		=> $this->input->post('kapasitas')
		);

		$where = array(
			'id_sesi' => $this->input->post('id_sesi')
		);

		$this->load->model('admin_model');
		$this->admin_model->update_ticket('sesi_expo', $data, $where);

		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data Ticket berhasil diperbarui!. <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</button></div>');
		$ro = array(
			'title' => 'Admin',
			'menu' => 'Ticket',
			'sub_menu' => 'Data Ticket',
		);

		$data['ticket'] = $this->admin_model->get_ticket();
		$data['disk'] = $this->admin_model->get_disk();
		$this->load->view('template/admin/header');
		$this->load->view('template/admin/sidebar', $ro);
		$this->load->view('admin/atur_ticket', $data);
		$this->load->view('template/admin/footer');
	}

	function daftaruser()
	{
		$this->load->model('admin_model');
        $data['peserta'] = $this->admin_model->alluser();

        $ro = array(
			'title' => 'Peserta',
			'menu' => 'Daftar',
			'sub_menu' => 'Username Peserta',
        );

        $this->load->view('template/admin/header');
        $this->load->view('template/admin/sidebar', $ro);
        $this->load->view('admin/user_peserta', $data);
        $this->load->view('template/admin/footer');
	}

	function cetakdaftaruser()
	{
		$this->load->model('admin_model');
        $data['peserta'] = $this->admin_model->alluser();
		
        $this->load->view('admin/cetakdaftaruser', $data);
	}
}

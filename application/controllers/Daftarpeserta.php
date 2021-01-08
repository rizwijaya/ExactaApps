<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class daftarpeserta extends CI_Controller {

    public function __construct()
    {
        parent::__construct();// you have missed this line.
        $this->load->library('session');
        if (!$this->session->userdata('email')) {
			redirect('home');
        }
        
		$session_data = $this->session->userdata('id_grup');
		if ($session_data == 1) {
			redirect('home/redirecting');
		}
    }
    
	public function peserta_sesi1()
	{
        $this->load->model('daftar');
        $id_sesi = 1;
        $data['sesi'] = 1;
        $data['peserta'] = $this->daftar->peserta($id_sesi);
        
        $ro = array(
			'title' => 'Peserta',
			'menu' => 'Daftar',
			'sub_menu' => 'Peserta sesi 1',
        );
        
        $this->load->view('template/admin/header');
        $this->load->view('template/admin/sidebar', $ro);
        $this->load->view('admin/daftar_peserta', $data);
        $this->load->view('template/admin/footer');
    }

    public function peserta_sesi2()
	{
        $this->load->model('daftar');
        $id_sesi = 2;
        $data['sesi'] = 2;
        $data['peserta'] = $this->daftar->peserta($id_sesi);
     
        $ro = array(
			'title' => 'Peserta',
			'menu' => 'Daftar',
			'sub_menu' => 'Peserta sesi 2',
        );

        $this->load->view('template/admin/header');
        $this->load->view('template/admin/sidebar', $ro);
        $this->load->view('admin/daftar_peserta', $data);
        $this->load->view('template/admin/footer');
    }

    public function peserta_sesi3()
	{
        $this->load->model('daftar');
        $id_sesi = 3;
        $data['sesi'] = 3;
        $data['peserta'] = $this->daftar->peserta($id_sesi);
        
        $ro = array(
			'title' => 'Peserta',
			'menu' => 'Daftar',
			'sub_menu' => 'Peserta sesi 3',
        );

        $this->load->view('template/admin/header');
        $this->load->view('template/admin/sidebar', $ro);
        $this->load->view('admin/daftar_peserta', $data);
        $this->load->view('template/admin/footer');
    }

    public function peserta_sesi4()
	{
        $this->load->model('daftar');
        $id_sesi = 4;
        $data['sesi'] = 4;
        $data['peserta'] = $this->daftar->peserta($id_sesi);
        
        $ro = array(
			'title' => 'Peserta',
			'menu' => 'Daftar',
			'sub_menu' => 'Peserta sesi 4',
        );
        
        $this->load->view('template/admin/header');
        $this->load->view('template/admin/sidebar', $ro);
        $this->load->view('admin/daftar_peserta', $data);
        $this->load->view('template/admin/footer');
    }

    public function peserta_sesi5()
	{
        $this->load->model('daftar');
        $id_sesi = 5;
        $data['sesi'] = 5;
        $data['peserta'] = $this->daftar->peserta($id_sesi);
        
        $ro = array(
			'title' => 'Peserta',
			'menu' => 'Daftar',
			'sub_menu' => 'Peserta sesi 5',
        );

        $this->load->view('template/admin/header');
        $this->load->view('template/admin/sidebar', $ro);
        $this->load->view('admin/daftar_peserta', $data);
        $this->load->view('template/admin/footer');
    }

    public function peserta_sesi($id_sesi)
	{
        $this->load->model('daftar');
        //$id_sesi = 6;
        $data['sesi'] = $id_sesi;
        $data['peserta'] = $this->daftar->peserta($id_sesi);
        
        $ro = array(
			'title' => 'Peserta',
			'menu' => 'Daftar',
			'sub_menu' => "Peserta sesi $id_sesi",
        );

        $this->load->view('template/admin/header');
        $this->load->view('template/admin/sidebar', $ro);
        $this->load->view('admin/daftar_peserta', $data);
        $this->load->view('template/admin/footer');
    }

    public function semua_peserta()
	{
        $this->load->model('daftar');
        $data['peserta'] = $this->daftar->allpeserta();

        $ro = array(
			'title' => 'Peserta',
			'menu' => 'Daftar',
			'sub_menu' => 'Semua Peserta',
        );

        $this->load->view('template/admin/header');
        $this->load->view('template/admin/sidebar', $ro);
        $this->load->view('admin/semua_peserta', $data);
        $this->load->view('template/admin/footer');
    }

    public function peserta_hadir()
    {
        $this->load->model('daftar');

        $data['table'] = "Hadir";
        $data['peserta'] = $this->daftar->kehadiran();

        $ro = array(
			'title' => 'Peserta',
			'menu' => 'Daftar',
			'sub_menu' => 'Peserta Hadir',
        );

        $this->load->view('template/admin/header');
        $this->load->view('template/admin/sidebar', $ro);
        $this->load->view('admin/peserta_hadir', $data);
        $this->load->view('template/admin/footer');
    }

    public function peserta_tidakhadir()
    {
        $this->load->model('daftar');

        $data['table'] = "Tidak Hadir";
        $data['peserta'] = $this->daftar->tidak_hadir();

        $ro = array(
			'title' => 'Peserta',
			'menu' => 'Daftar',
			'sub_menu' => 'Peserta Tidak Hadir',
        );

        $this->load->view('template/admin/header');
        $this->load->view('template/admin/sidebar', $ro);
        $this->load->view('admin/peserta_tidakhadir', $data);
        $this->load->view('template/admin/footer');
    }

    public function detail_peserta($id_user)
    {
        $ro = array(
			'title' => 'Peserta',
			'menu' => 'Detail',
			'sub_menu' => 'Detail Peserta',
        );

        $this->load->model('daftar');
        $data['detail'] = $this->daftar->detailpeserta($id_user);
        $data['expo'] = $this->daftar->detailexpo($id_user);
        $this->load->view('template/admin/header');
        $this->load->view('template/admin/sidebar', $ro);
        $this->load->view('admin/detail_peserta', $data);
        $this->load->view('template/admin/footer');
    }

    public function pembayaran()
    {
        $stat = 2;
        $this->load->model('daftar');
        
        $ro = array(
			'title' => 'Peserta',
			'menu' => 'Daftar',
			'sub_menu' => 'Pembayaran Masuk',
        );

        $data['pembayaran'] = $this->daftar->getpembayaran($stat);
        $this->load->view('template/admin/header');
        $this->load->view('template/admin/sidebar', $ro);
        $this->load->view('admin/pembayaran', $data);
        $this->load->view('template/admin/footer');
    }

    public function cetak_sesi($id_sesi)
    {
        $this->load->model('daftar');
        $data['peserta'] = $this->daftar->peserta($id_sesi);
        $data['sesi'] = $id_sesi;
        $this->load->view('admin/cetak_sesi', $data);
    }

    public function cetak_semua()
    {
        $this->load->model('daftar');
        $data['peserta'] = $this->daftar->allpeserta();

        $this->load->view('admin/cetak_semua', $data);
    }

    public function cetak_hadir()
    {
        $this->load->model('daftar');
        $absen = 1;
        $data['peserta'] = $this->daftar->kehadiran($absen);

        $this->load->view('admin/cetak_hadir', $data);
    }

    public function cetak_tidakhadir()
    {
        $this->load->model('daftar');
        $data['peserta'] = $this->daftar->tidak_hadir();
        $this->load->view('admin/cetak_tidakhadir', $data);
    }
}

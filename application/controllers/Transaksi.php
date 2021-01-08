<?php
defined('BASEPATH') or exit('No direct script access allowed');

class transaksi extends CI_Controller
{

	public function index()
	{
		$this->load->view('welcome_message');
	}
	
	public function generate_qr($qr)
	{
		$this->load->model('admin_model');
		$this->load->library('ciqrcode');

		if (!empty($qr)) {
			$id_user = $qr['id_user'];
			$id_sesi = $qr['id_sesi'];
			$id_transaksi = $qr['id_transaksi'];
           
            $params['data'] = $id_user;
            $params['level'] = 'H';
            $params['size'] = 1024;
            $params['savename'] = FCPATH . "assets/qr_code/" . $id_user . $id_transaksi . 'code.png';
            $this->ciqrcode->generate($params);
            $data = array(
				'id_user' => $id_user,
				'id_sesi' => $id_sesi,
				'id_transaksi' => $id_transaksi,
			);
			$qr_name = $id_user . $id_transaksi . 'code.png';
			$this->admin_model->ticketinput($qr_name, $data);
        } else {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">QR Code gagal dibuat, silahkan hubungi administrator! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</button></div>');
        }
	} 

	public function selesai($id)
	{
		$this->load->model('daftar');
		$data = $this->daftar->sesibyid($id);
		
		if(!empty($data[1]['id_transaksi'])) {
			$this->generate_qr($data[1]);
		 }

		$this->generate_qr($data[0]);

		$data = array(
			'status'	=> 3
		);

		$where = array(
			'id_transaksi'	=> $id
		);

		$this->load->model('daftar');

		$this->daftar->cancel_bayar('transaksi', $data , $where);
		
		redirect('daftarpeserta/pembayaran');
	}

	public function cancel($id)
	{
		$data = array(
			'status'	=> 4
		);

		$where = array(
			'id_transaksi'	=> $id
		);

		$this->load->model('daftar');

		$this->daftar->cancel_bayar('transaksi', $data , $where);
		
		redirect('daftarpeserta/pembayaran');
	}
}

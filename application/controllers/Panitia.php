<?php
defined('BASEPATH') or exit('No direct script access allowed');

class panitia extends CI_Controller
{
        public function __construct()
        {
                parent::__construct(); // you have missed this line.
                $this->load->library('session');
                if (!$this->session->userdata('email')) {
                        redirect('home');
                }

                $session_data = $this->session->userdata('id_grup');
                if ($session_data != 2) {
                        redirect('home/redirecting');
                }
        }

        public function index()
        {
                $ro = array(
			'title' => 'Dashboard',
			'menu' => 'Dashboard',
			'sub_menu' => 'Panitia'
                );

                $this->load->model('admin_model');
                $data = array(  'total_absen'           => $this->admin_model->total_absen(),
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
}

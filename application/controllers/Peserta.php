<?php
defined('BASEPATH') or exit('No direct script access allowed');

class peserta extends CI_Controller
{
        public function __construct()
        {
                parent::__construct(); // you have missed this line.
                $this->load->library('session');
                if (!$this->session->userdata('email')) {
                        redirect('home');
                }

                $session_data = $this->session->userdata('id_grup');
                if ($session_data != 1) {
                        redirect('home/redirecting');
                }
        }

        public function index()
        {
                if ($this->session->userdata('id_user')) {
                        $this->load->model('peserta_model');
                        $id = $this->session->userdata('id_user');
                        $cekid = $this->peserta_model->getid_transaksi($this->session->userdata('id_user'));
                        $cekid['myprofile'] = $this->peserta_model->myprofile($id);
                        if (!empty($this->peserta_model->getexpo($id))) {
                                $cekid['getexpo'] = $this->peserta_model->getexpo($id);
                        }
                } else {
                        $cekid = NULL;
                }

                $this->load->view('template/dashboard/header', $cekid);
                $this->load->view('home');
                $this->load->view('template/dashboard/footer');
        }

        public function lengkap_profile()
        {
                $this->load->model('peserta_model');
                $cek = $this->peserta_model->getdata($this->session->userdata('id_user'));
                // var_dump($cek); die;
                if (isset($cek[0]['photo_identitas'])) {
                        redirect('home');
                } else {
                        if ($this->session->userdata('id_user')) {
                                $this->load->model('peserta_model');
                                $id = $this->session->userdata('id_user');
                                $cekid['transaksi'] = $this->peserta_model->getid_transaksi($this->session->userdata('id_user'));
                                $cekid['myprofile'] = $this->peserta_model->myprofile($id);
                                if (!empty($this->peserta_model->getexpo($id))) {
                                        $cekid['getexpo'] = $this->peserta_model->getexpo($id);
                                }
                        } else {
                                $cekid['transaksi'] = NULL;
                        }

                        $this->load->view('template/dashboard/header', $cekid);
                        $this->load->view('peserta/lengkap_profile');
                        $this->load->view('template/dashboard/footer');
                }
        }

        public function _rules_lengkap()
        {
                $this->load->library(array('form_validation'));

                $this->form_validation->set_rules(
                        'no_telp',
                        'Number',
                        'trim|min_length[12]|max_length[128]|xss_clean|required'
                );
                $this->form_validation->set_rules(
                        'asal_sekolah',
                        'Asal Sekolah',
                        'trim|min_length[2]|max_length[128]|xss_clean|required'
                );
                $this->form_validation->set_rules(
                        'riwayat',
                        'Riwayat',
                        'trim|min_length[2]|max_length[128]|xss_clean|required'
                );
        }

        public function aksi_lengkap()
        {

                $this->load->helper(array('form', 'url', 'security'));
                $this->load->library(array('form_validation'));
                $this->load->model('peserta_model');
                $this->_rules_lengkap();

                if ($this->form_validation->run() == FALSE) {
                        $this->lengkap_profile();
                } else {
                        $id_user        = $this->input->post('id_user');
                        $no_telp        = $this->input->post('no_telp');
                        $lahir          = $this->input->post('tempat_lahir');
                        $sekolah        = $this->input->post('asal_sekolah');
                        $riwayat        = $this->input->post('riwayat');
                        $nama           = $this->input->post('nama');
                        $gambar         = $_FILES['gambar']['name'];

                        if ($gambar = '') {
                        } else {
                                $config['upload_path']          = './assets/user_identitas';
                                $config['allowed_types']        = 'jpg|png|jpeg';
                                $config['max_size']             = 2048;

                                $this->load->library('upload', $config);
                                if (!$this->upload->do_upload('gambar')) {
                                        // return $this->upload->data('file_name');
                                        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">' . $this->upload->display_errors() . '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</button></div>');
                                        // // $error = array('error' => $this->upload->display_errors());
                                        $this->lengkap_profile();
                                } else {
                                        $gambar = $this->upload->data('file_name');
                                }
                        }

                        $data = array(
                                'id_user'               =>        $id_user,
                                'no_telp'               =>        $no_telp,
                                'asal_sekolah'          =>        $sekolah,
                                'riwayat'               =>        $riwayat,
                                'tempat_lahir'          =>        $lahir,
                                'photo_identitas'       =>        $gambar
                        );

                        $this->peserta_model->lengkap_profile($data, 'peserta');
                        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data telah berhasil ditambahkan </div>');
                        redirect('home');
                }
        }

        public function upload_bukti()
        {
                $id                     = $this->input->post('id_transaksi');
                $bukti_pembayaran       = $_FILES['bukti_pembayaran']['name'];

                if ($bukti_pembayaran = '') {
                } else {
                        $config['upload_path']          = './assets/bukti_bayar';
                        $config['allowed_types']        = 'pdf|jpg|png|jpeg';
                        $config['max_size']             = 2048;

                        $this->load->library('upload', $config);
                        if (!$this->upload->do_upload('bukti_pembayaran')) {
                                // return $this->upload->data('file_name');
                                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">' . $this->upload->display_errors() . '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</button></div>');
                                // // $error = array('error' => $this->upload->display_errors());
                                $this->lengkap_profile();
                        } else {
                                $bukti_pembayaran = $this->upload->data('file_name');
                        }
                }
                $status = 2; //Status menunggu konfirmasi
                $data = array(
                        'bukti_pembayaran' => $bukti_pembayaran,
                        'status'           => $status
                );

                $where = array(
                        'id_transaksi' => $id
                );

                $this->load->model('peserta_model');
                $this->peserta_model->upload_bukti('transaksi', $data, $where);
                $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Bukti Pembayaran berhasil diuploads! Silahkan tunggu konfirmasi maks 1x24jam.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</button></div>');
                redirect('home/invoice');
        }
}

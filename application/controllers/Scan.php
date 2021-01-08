<?php
defined('BASEPATH') or exit('No direct script access allowed');

class scan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct(); // you have missed this line.
        $this->load->library('session');
        if (!$this->session->userdata('email')) {
            redirect('home');
        }

        $session_data = $this->session->userdata('id_grup');
        if ($session_data == 1) {
            redirect('home/redirecting');
        }
    }

    public function index()
    {
        $this->load->model('admin_model');

        $ro = array(
            'title' => 'Panitia',
            'menu' => 'Absensi',
            'sub_menu' => 'Absensi Peserta',
        );

        $data['ticket'] = $this->admin_model->get_ticket();
        $this->load->view('template/admin/header');
        $this->load->view('template/admin/sidebar', $ro);
        $this->load->view('admin/absensi', $data);
        $this->load->view('template/admin/footer');
    }

    public function webcam($id)
    {
        $data['id_sesi'] = $id;
        $ro = array(
            'title' => 'Absensi',
            'menu' => 'Peserta',
            'sub_menu' => 'Absen Barcode',
        );

        $this->load->view('template/admin/header');
        $this->load->view('template/admin/sidebar', $ro);
        $this->load->view('admin/webcam', $data);
        $this->load->view('template/admin/footer');
    }

    public function proses_absen()
    {
        $this->load->model('admin_model');
        $id_user = $this->input->post('id');
        $id_sesi =  $this->input->post('sesi');

        date_default_timezone_set('Asia/Jakarta'); //Menggunakan zona waktu jakarta

        $tgl = date('Y-m-d');
        $jam = date('h:i:s');
        //Mengambil data user dari sesi dan id_user
        $cek_id = $this->admin_model->cek_id($id_user, $id_sesi);

        $cek_khd = $this->admin_model->cek_khd($id_user, $id_sesi);

        if (!$cek_id) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Tidak Ditemukan!</div>');
            $this->load->view('admin/webcam_empty');
        } else if ($cek_khd != FALSE) {
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Sudah Melakukan Presensi!</div>');
            $nama = $cek_id->nama;
            $id_user = $cek_id->id_user;
            $id_transaksi = $cek_id->id_transaksi;
            $asal_sekolah = $cek_id->asal_sekolah;
            $email = $cek_id->email;
            $no_telp = $cek_id->no_telp;
            $photo_identitas = $cek_id->photo_identitas;
            $row = array(
                'nama' => $nama,
                'tgl_khd' => $tgl,
                'jam_khd' => $jam,
                'id_user' => $id_user,
                'id_transaksi' => $id_transaksi,
                'asal_sekolah' => $asal_sekolah,
                'email' => $email,
                'no_telp' => $no_telp,
                'photo_identitas' => $photo_identitas
            );
            $this->load->view('admin/webcam_result', $row);
        } else {
            $nama = $cek_id->nama;
            $id_user = $cek_id->id_user;
            $id_transaksi = $cek_id->id_transaksi;
            $asal_sekolah = $cek_id->asal_sekolah;
            $email = $cek_id->email;
            $no_telp = $cek_id->no_telp;
            $photo_identitas = $cek_id->photo_identitas;

            $data = array(
                'id_user' => $id_user,
                'id_sesi' => $id_sesi,
                'tgl_khd' => $tgl,
                'jam_khd' => $jam,
                'absen' => 1
            );

            $row = array(
                'nama' => $nama,
                'tgl_khd' => $tgl,
                'jam_khd' => $jam,
                'id_user' => $id_user,
                'id_transaksi' => $id_transaksi,
                'asal_sekolah' => $asal_sekolah,
                'email' => $email,
                'no_telp' => $no_telp,
                'photo_identitas' => $photo_identitas
            );

            $this->admin_model->insert_data($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat Datang!</div>');
            $this->load->view('admin/webcam_result', $row);
        }
    }
}

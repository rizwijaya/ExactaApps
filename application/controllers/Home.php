<?php
defined('BASEPATH') or exit('No direct script access allowed');

class home extends CI_Controller
{

    public function index()
    {
        if ($this->session->userdata('id_user')) {
            $this->load->model('peserta_model');
            $id = $this->session->userdata('id_user');
            $cekid['transaksi'] = $this->peserta_model->getid_transaksi($id);
            $cekid['myprofile'] = $this->peserta_model->myprofile($id);
            if (!empty($this->peserta_model->getexpo($id))) {
                $cekid['getexpo'] = $this->peserta_model->getexpo($id);
            }
        } else {
            $cekid['transaksi'] = NULL;
        }

        $this->load->model('peserta_model');
        $data['ticket'] = $this->peserta_model->view_ticket();

        $this->load->view('template/dashboard/header', $cekid);
        $this->load->view('home', $data);
        $this->load->view('template/dashboard/footer');
    }

    public function login()
    {
        if ($this->session->userdata('email')) {
            redirect('home');
        }

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
        $this->load->view('login');
        $this->load->view('template/dashboard/footer');
    }

    public function register()
    {
        if ($this->session->userdata('email')) {
            redirect('home');
        }

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
        $this->load->view('register');
        $this->load->view('template/dashboard/footer');
    }

    public function redirecting()
    {
        if (!$this->session->userdata('email')) {
            redirect('home');
        }
        $session_data = $this->session->userdata('id_grup');

        switch ($session_data['id_grup']) {
            case 1:
                redirect('home');
                break;
            case 2:
                redirect('panitia');
                break;
            case 3:
                redirect('admin');
                break;
            default:
                redirect('home');
                break;
        }
        return;
    }

    public function view_ticket()
    {
        $this->load->model('peserta_model');
        $data['ticket'] = $this->peserta_model->view_ticket();

        if (!empty($this->session->userdata('id_user'))) {
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
        $this->load->view('peserta/ticket_sesi', $data);
        $this->load->view('template/dashboard/footer');
    }

    public function ticket_pertama()
    {
        $this->load->model('peserta_model');
        $data['ticket'] = $this->peserta_model->pilih_ticket(1);
        $data['disk'] = $this->peserta_model->getdiscount(1);

        if (!empty($this->session->userdata('id_user'))) {
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
        $this->load->view('peserta/pilih_pertama', $data);
        $this->load->view('template/dashboard/footer');
    }

    public function pilih_kedua($sesi)
    {
        $this->load->model('peserta_model');
        $data['ticket'] = $this->peserta_model->pilih_ticket(2);
        $data['disk'] = $this->peserta_model->getdiscount(1);
        $data['hari1'] = $sesi;

        if (!empty($this->session->userdata('id_user'))) {
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
        $this->load->view('peserta/pilih_kedua', $data);
        $this->load->view('template/dashboard/footer');
    }

    public function invoice()
    {
        if (!$this->session->userdata('email')) {
            redirect('home');
        }

        $this->load->model('peserta_model');
        $id_users = $this->session->userdata('id_user');

        $getid = $this->peserta_model->getid_transaksi($id_users);
        
        $data['invoice'] = $this->peserta_model->getinvoice($getid[0]['id_transaksi']);

        if ($this->session->userdata('id_user')) {

            $cekid['transaksi'] = $this->peserta_model->getid_transaksi($id_users);
            $cekid['myprofile'] = $this->peserta_model->myprofile($id_users);
            if (!empty($this->peserta_model->getexpo($id_users))) {
                $cekid['getexpo'] = $this->peserta_model->getexpo($id_users);
            }
        } else {
            $cekid['transaksi'] = NULL;
        }

        $data['barcode'] = $this->peserta_model->getbarcode($getid[0]['id_transaksi']);
        
        $this->load->view('template/dashboard/header', $cekid);
        $this->load->view('peserta/invoice2', $data);
        $this->load->view('template/dashboard/footer');
    }

    public function order_single($id_sesi)
    {
        if (!$this->session->userdata('email')) {
            redirect('home');
        }

        $this->load->model('peserta_model');
        $id_users = $this->session->userdata('id_user');
        $cek = $this->peserta_model->getdata($id_users);

        if (isset($cek[0]['photo_identitas'])) {
            $cekid = $this->peserta_model->getid_transaksi($id_users);

            if (empty($cekid)) { //Mengecek jika transaksi kosong maka input data
                $getsesi = $this->peserta_model->get_sesi($id_sesi);
                $sts = 1;
                $this->peserta_model->insert_transaksi($id_users, $sts, $getsesi[0]['harga']);

                $transaksi = $this->peserta_model->getid_transaksi($id_users); //Mengambil data transaksi

                $this->peserta_model->insert_checkout($transaksi[0]['id_transaksi'], $id_sesi);
            }
            $this->invoice();
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Silahkan lengkapi profil anda untuk membeli ticket. <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</button></div>');
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

    public function order_ticket($id_hari1, $id_hari2)
    {
        if (!$this->session->userdata('email')) {
            redirect('home');
        }

        $this->load->model('peserta_model');
        $id_users = $this->session->userdata('id_user');
        $cek = $this->peserta_model->getdata($id_users);

        if (isset($cek[0]['photo_identitas'])) {    //Bila foto identitas sudah dilengkapi
            $cekid = $this->peserta_model->getid_transaksi($id_users);

            if (empty($cekid)) { //Mengecek jika transaksi kosong maka input data
                //Mengambil data sesi hari pertama dan kedua
                 $data1 = $this->peserta_model->get_sesi($id_hari1);
                 $data2 = $this->peserta_model->get_sesi($id_hari2);

                $disk = $this->peserta_model->getdiscount(1);   //Mengambil diskon

                $hrg = ($data1[0]['harga'] + $data2[0]['harga'])- ($disk[0]['diskon']*2); //Menghitung harga dengan diskon
                //Melakukan insert data transaksi dan total pembayaran
                $sts = 1;
                $this->peserta_model->insert_transaksi($id_users, $sts, $hrg);
                $transaksi = $this->peserta_model->getid_transaksi($id_users); //Mengambil data transaksi

                //Menambahkan data checkout hari 1 dan hari 2
                $this->peserta_model->insert_checkout($transaksi[0]['id_transaksi'], $id_hari1);
                $this->peserta_model->insert_checkout($transaksi[0]['id_transaksi'], $id_hari2);
            }
            //echo 'data sukses diinputkan'; die;
            $this->invoice();   //Melakukan load ke halaman invoice

        } else { //Bila belum melengkapi foto Identitas
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Silahkan lengkapi profil anda untuk membeli ticket. <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</button></div>');
            
            if ($this->session->userdata('id_user')) {
                $this->load->model('peserta_model');
                $id = $this->session->userdata('id_user');

                $cekid['transaksi'] = $this->peserta_model->getid_transaksi($id);
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

    public function pilihan_ticket($id)
    {
        $this->load->model('peserta_model');
        if($id == 3) {
            redirect('home/ticket_pertama');
            //$this->ticket_pertama();    
        } 

        $data['ticket'] = $this->peserta_model->pilih_ticket($id);

        if (!empty($this->session->userdata('id_user'))) {
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
        $this->load->view('peserta/pilihan_ticket', $data);
        $this->load->view('template/dashboard/footer');
    }
}

<?php
class admin_model extends CI_Model
{
    // function generate_qr($id)
    // {
    //     $q = 'SELECT t1.id_user, t1.id_transaksi, t2.id_sesi, t3.nama_sesi FROM transaksi t1 INNER JOIN checkout t2 ON t1.id_transaksi=t2.id_transaksi INNER JOIN sesi_expo t3 ON t2.id_sesi=t3.id_sesi WHERE t1.id_transaksi=' . $id;
    //     //$q = 'SELECT t1.nama, t2.*, t3.*, t4.* FROM users t1 INNER JOIN peserta t2 ON t1.id_user=t2.id_user INNER JOIN transaksi t4 ON t1.id_user=t4.id_user INNER JOIN sesi_expo t3 ON t4.id_sesi=t3.id_sesi  WHERE t4.id_transaksi=' . $id;
    //     $res = $this->db->query($q);
    //     return $res;
    // }

    function ticketinput($qr_name, $data)
    {
        $this->db->set("barcode", $qr_name);
        $this->db->set("id_transaksi", $data['id_transaksi']);
        $this->db->set("id_sesi", $data['id_sesi']);
        $this->db->set("id_user", $data['id_user']);
        $this->db->set("id_ticket", $data['id_ticket']);

        $this->db->insert("ticket");
    }

    function get_sesi($id_sesi)
    {
        $q = 'SELECT t1.nama, t2.*, t3.*, t4.*, t5.barcode, t5.id_ticket FROM users t1 INNER JOIN peserta t2 ON t1.id_user=t2.id_user INNER JOIN transaksi t4 ON t1.id_user=t4.id_user INNER JOIN sesi_expo t3 ON t4.id_sesi=t3.id_sesi INNER JOIN ticket t5 ON t5.id_user=t2.id_user WHERE t4.id_sesi=' . $id_sesi;
        $res = $this->db->query($q);
        return $res;
    }

    function cek_id($id_user, $sesi)
    {
        $q = 'SELECT t1.nama, t1.email, t2.*, t3.*, t4.*, t5.id_sesi, t5.barcode, t5.id_ticket FROM users t1 INNER JOIN peserta t2 ON t1.id_user=t2.id_user INNER JOIN transaksi t3 ON t3.id_user=t2.id_user INNER JOIN checkout t4 ON t3.id_transaksi=t4.id_transaksi INNER JOIN ticket t5 ON t5.id_user=t2.id_user WHERE t2.id_user= ' . $id_user . ' AND t4.id_sesi=' . $sesi;
        $res = $this->db->query($q);
        if ($res->num_rows() > 0) {
            return $res->row();
        } else {
            return FALSE;
        }
    }

    function cek_khd($id, $sesi)
    {
        $q = 'SELECT t1.id_user, t2.id_transaksi, t2.id_sesi, t3.jam_khd, t3.tgl_khd FROM transaksi t1 INNER JOIN checkout t2 ON t1.id_transaksi=t2.id_transaksi RIGHT JOIN absen t3 ON t1.id_user=t3.id_user WHERE t1.id_user= ' .$id . ' AND t3.id_sesi= ' . $sesi;
       // $q = 'SELECT * FROM absen WHERE id_user=' . $id . ;
        $res = $this->db->query($q);
        if ($res->num_rows() > 0) {
            return $res->row();
        } else {
            return FALSE;
        }
    }

    function insert_data($data)
    {
        return $this->db->insert('absen', $data);
    }

    function update_absen($table, $where, $data)
    {
        $this->db->update($table, $data, $where);
    }

    function get_ticket()
    {
        $q = 'SELECT * FROM sesi_expo';
        $res = $this->db->query($q);
        return $res->result_array();
    }

    function get_disk()
    {
        $q = 'SELECT * FROM disk';
        $res = $this->db->query($q);
        return $res->result_array();
    }

    public function update_ticket($table, $data, $where)
    {
        $this->db->update($table,$data,$where);
    }

    public function total_absen()
    {
        $q = "SELECT COUNT(id_user) FROM absen WHERE absen = 1";
        $res = $this->db->query($q);
        return $res->result_array();
    }
    
    public function total_terdaftar()
    {
        $q = "SELECT COUNT(id_peserta) FROM peserta";
        $res = $this->db->query($q);
        return $res->result_array();
    }

    public function total_beli()
    {
        $q = "SELECT COUNT(barcode) FROM ticket";
        $res = $this->db->query($q);
        return $res->result_array();
    }

    public function total_panitia()
    {
        $q = "SELECT COUNT(id_user) FROM users WHERE id_grup = 2";
        $res = $this->db->query($q);
        return $res->result_array();
    }

    public function alluser()
    {
        $q = 'SELECT t1.id_user, t1.email, t1.password, t1.nama, t2.asal_sekolah, t2.tempat_lahir FROM users t1 INNER JOIN peserta t2 ON t1.id_user=t2.id_user INNER JOIN transaksi t3 ON t3.id_user=t2.id_user WHERE t3.status = 3';
        $res = $this->db->query($q);
        return $res->result_array();
    }
}

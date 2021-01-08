<?php
class peserta_model extends CI_Model
{
    public function lengkap_profile($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function getdata($id_user)
    {
        $q = "SELECT * FROM peserta WHERE id_user=" . $id_user;
        $res = $this->db->query($q);
        return $res->result_array();
    }

    public function view_ticket()
    {
        $q = "SELECT * FROM category_ticket";
        $res = $this->db->query($q);
        return $res->result_array();
    }

    public function sesi1($sesi)
    {
        $q = "SELECT COUNT(barcode) FROM ticket WHERE id_sesi=" . $sesi;
        $res = $this->db->query($q);
        return $res->result_array();
    }

    public function get_sesi($sesi)
    {
        $q = "SELECT * FROM sesi_expo WHERE id_sesi=" . $sesi;
        $res = $this->db->query($q);
        return $res->result_array();
    }

    public function insert_transaksi($id, $sts, $hrg)
    {
        $this->db->set("id_user", $id);
        $this->db->set("status", $sts);
        $this->db->set("total", $hrg);
        $this->db->insert("transaksi");
        return $this->db->insert_id();
    }

    public function insert_checkout($id, $sesi)
    {
        $this->db->set("id_transaksi", $id);
        $this->db->set("id_sesi", $sesi);
        $this->db->insert("checkout");
        return $this->db->insert_id();
    }

    public function getid_transaksi($id_user)
    {
        $q = "SELECT * FROM transaksi WHERE id_user=". $id_user;
        $res = $this->db->query($q);
        return $res->result_array();
    }

    public function getinvoice($id)
    {
        $q = "SELECT t1.nama, t2.*, t4.id_sesi, t5.mulai_expo, t5.end_expo, t5.tgl_expo, t3.id_transaksi, t3.bukti_pembayaran, t3.status, t3.total FROM users t1 INNER JOIN peserta t2 ON t1.id_user=t2.id_user INNER JOIN transaksi t3 ON t1.id_user=t3.id_user INNER JOIN checkout t4 ON t3.id_transaksi=t4.id_transaksi INNER JOIN sesi_expo t5 ON t5.id_sesi=t4.id_sesi WHERE t3.id_transaksi=".$id;
        $res = $this->db->query($q);
        return $res->result_array();
    }

    public function upload_bukti($table, $data, $where){
        $this->db->update($table,$data,$where);
    }

    function getbarcode($id) {
        $q = "SELECT * FROM ticket WHERE id_transaksi=". $id;
        $res = $this->db->query($q);
        return $res->result_array();
    }

    function myprofile($id)
    {
        $q = "SELECT t1.nama, t1.email, t2.* FROM users t1 INNER JOIN peserta t2 ON t1.id_user=t2.id_user WHERE t1.id_user=". $id;
        $res = $this->db->query($q);
        return $res->result_array();
    }
    
    function getexpo($id)
    {
        $q = "SELECT t1.barcode, t2.* FROM ticket t1 INNER JOIN sesi_expo t2 ON t1.id_sesi=t2.id_sesi WHERE t1.id_user=". $id;
        $res = $this->db->query($q);
        return $res->result_array();
    }

    function pilih_ticket($id)
    {
        $q = "SELECT * FROM sesi_expo t1 INNER JOIN category_ticket t2 ON t1.sts_ticket=t2.sts_ticket WHERE t1.sts_ticket =" .$id;
        $res = $this->db->query($q);
        return $res->result_array();
    }

    public function getdiscount($id)
    {
        $q = "SELECT * FROM disk WHERE id_disk=". $id;
        $res = $this->db->query($q);
        return $res->result_array();
    }
}

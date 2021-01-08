<?php
class daftar extends CI_Model
{
    function peserta($id_sesi)
    {
        $q = 'SELECT t1.id_user, t1.nama, t2.asal_sekolah, t2.tempat_lahir, t2.photo_profile, t2.riwayat, t4.id_sesi FROM users t1 INNER JOIN peserta t2 ON t1.id_user=t2.id_user INNER JOIN transaksi t3 ON t3.id_user=t2.id_user INNER JOIN checkout t4 ON t3.id_transaksi=t4.id_transaksi WHERE t4.id_sesi=' . $id_sesi . ' ORDER BY t1.id_user DESC';
        $res = $this->db->query($q);
        return $res->result_array();
    }

    function allpeserta()
    {
        $q = 'SELECT t1.id_user, t1.nama, t2.asal_sekolah, t2.tempat_lahir, t2.photo_profile, t2.riwayat, t4.id_sesi FROM users t1 INNER JOIN peserta t2 ON t1.id_user=t2.id_user INNER JOIN transaksi t3 ON t3.id_user=t2.id_user INNER JOIN checkout t4 ON t3.id_transaksi=t4.id_transaksi ORDER BY t1.id_user DESC';
        $res = $this->db->query($q);
        return $res->result_array();
    }

    function kehadiran()
    {
        $q = 'SELECT t1.nama, t2.*, t3.* FROM users t1 INNER JOIN peserta t2 ON t1.id_user=t2.id_user INNER JOIN absen t3 ON t1.id_user=t3.id_user ORDER BY t1.id_user DESC';
        $res = $this->db->query($q);
        return $res->result_array();
    }

    function tidak_hadir()
    {
        $q = 'SELECT t1.nama, t2.*, t4.* FROM users t1 INNER JOIN peserta t2 ON t1.id_user=t2.id_user LEFT JOIN absen t3 ON t1.id_user=t3.id_user INNER JOIN ticket t4 ON t1.id_user=t4.id_user WHERE t3.absen IS NULL  ORDER BY t1.id_user DESC';
        $res = $this->db->query($q);
        return $res->result_array();
    }

    function getpembayaran($stat)
    {
        $q = 'SELECT t1.nama, t2.*, t3.id_transaksi, t3.total, t3.bukti_pembayaran FROM users t1 INNER JOIN peserta t2 ON t1.id_user=t2.id_user INNER JOIN transaksi t3 ON t1.id_user=t3.id_user WHERE t3.status=' . $stat;
        $res = $this->db->query($q);
        return $res->result_array();
    }

    function sesibyid($id)
    {
        $q = "SELECT t1.id_user, t1.id_transaksi, t2.id_sesi, t3.nama_sesi FROM transaksi t1 INNER JOIN checkout t2 ON t1.id_transaksi=t2.id_transaksi INNER JOIN sesi_expo t3 ON t2.id_sesi=t3.id_sesi WHERE t1.id_transaksi= ".$id;
        $res = $this->db->query($q);
        return $res->result_array();
    }
    function cancel_bayar($table, $data ,$where)
    {
        $this->db->update($table, $data, $where);
    }

    function detailpeserta($id_user)
    {
        $q = 'SELECT t1.id_user, t1.nama, t2.no_telp, t2.photo_identitas, t2.asal_sekolah, t2.tempat_lahir, t2.photo_profile, t2.riwayat, t4.id_sesi, t6.mulai_expo, t6.end_expo, t6.tgl_expo, t7.id_ticket, t7.barcode FROM users t1 INNER JOIN peserta t2 ON t1.id_user=t2.id_user INNER JOIN transaksi t3 ON t3.id_user=t2.id_user INNER JOIN checkout t4 ON t3.id_transaksi=t4.id_transaksi INNER JOIN checkout t5 ON t4.id_transaksi=t5.id_transaksi INNER JOIN sesi_expo t6 ON t6.id_sesi=t5.id_sesi INNER JOIN ticket t7 ON t5.id_transaksi=t7.id_transaksi WHERE t1.id_user=' . $id_user .' LIMIT 1';
        $res = $this->db->query($q);
        return $res->result_array();
    }

    function detailexpo($id_user)
    {
        $q = 'SELECT t1.id_user, t1.nama, t2.no_telp, t2.photo_identitas, t2.asal_sekolah, t2.tempat_lahir, t2.photo_profile, t2.riwayat, t4.id_sesi, t6.mulai_expo, t6.end_expo, t6.tgl_expo FROM users t1 INNER JOIN peserta t2 ON t1.id_user=t2.id_user INNER JOIN transaksi t3 ON t3.id_user=t2.id_user INNER JOIN checkout t4 ON t3.id_transaksi=t4.id_transaksi INNER JOIN checkout t5 ON t4.id_transaksi=t5.id_transaksi INNER JOIN sesi_expo t6 ON t6.id_sesi=t5.id_sesi WHERE t1.id_user=' . $id_user;
        $res = $this->db->query($q);
        return $res->result_array();
    }

}

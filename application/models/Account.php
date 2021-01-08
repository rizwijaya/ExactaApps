<?php
class Account extends CI_Model
{
    function insertNewUser($data)
    {
        $this->db->set("nama", $data['nama']);
        $this->db->set("email", $data['email']);
        $this->db->set("password", $data['password']);
        $this->db->set("id_grup", $data['id_grup']);
        
        $this->db->insert("users");
    }

    function checklogin($email, $password)
    {
       $result = $this->db->where('email', $email)
                            ->limit(1)
                            ->get('users');
        if ($result->num_rows() > 0) {
            $hash = $result->row('password');
            if (password_verify($password,$hash)){
                return $result->result_array(); 
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }
}

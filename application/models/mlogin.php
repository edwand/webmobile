<?php

class Mlogin extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function cek($username, $password) {
        $this->db->where("username", $username);
        $this->db->where("password", md5($password));
        $result = $this->db->get("member");
        if ($result->num_rows() == 1) {
            return true;
        }
    }

    function proses($username, $password) {
        $this->db->where("username", $username);
        $this->db->where("password", md5($password));
        $result = $this->db->get("member");
        if ($result->num_rows() == 1) {
            return $result->row_array();
        }
    }

    function simpan($data){
        $this->db->insert('member', $data);
    }

}
?>

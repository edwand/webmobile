<?php

class Mkuis extends CI_Model{
    
    function  __construct() {
        parent::__construct();
    }
    
    function tampil(){
        $result = $this->db->get('kuis');
        if($result->num_rows()>0){
            return $result->result_array();
        }
    }
    
}

?>

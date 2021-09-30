<?php

class M_reset extends CI_Model
{

    public function reset_password($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table, $data);
        

    }
   
}
<?php

class Users extends CI_Model {
    public function add($data){
        $this->load->database();
        $count = $this->db->insert('users', $data);
        if($count > 0)
            return true;
        return false;
    }

    public function checkUser($email){
        $this->load->database();
        $count = $this->db->get_where('users',array('Email'=>$email));
        if($count)
            return $count->result_array();
        return false;
    }
}

?>

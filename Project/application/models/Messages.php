<?php

class Messages extends CI_Model {
    public function add($data){
        $this->load->database();
        $count = $this->db->insert('messages', $data);
        if($count > 0)
            return true;
        return false;
    }

    public function getMessages($email) {
        $this->load->database();
        $count = $this->db->get_where('messages',array('ToUser'=>$email));
        if($count)
            return $count->result_array();
        return false;
    }
}

?>

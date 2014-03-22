<?php

class Admin_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getAdmin($uname, $pwd) {
        $this->db->where(array('username' => $uname, 'password' => md5($pwd)));
        $query = $this->db->get('admin');
        return $query->result();
    }

    function updateAdmin($value, $condition = "'1'") {
        $str = $this->db->update_string('admin', $value, $condition);
        return $this->db->query($str);
    }

}

?>

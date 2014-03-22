<?php

class Contact_model extends CI_Model {
	function __construct() {
		parent::__construct();
}

   function showAll($condition='') {
      $SQL = "SELECT * FROM  contact_us $condition";
	$result = $this->db->query($SQL);
        if($result->num_rows() > 0) {
            $pagelist = $result->result();
           return $pagelist;
           
        } else {
            return null;
        }
    }

}

?>

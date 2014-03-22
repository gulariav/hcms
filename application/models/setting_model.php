<?php

class Setting_model extends CI_Model {
	function __construct() {
		parent::__construct();
}

   function showAll($condition='') {
      $SQL = "SELECT * FROM  settings $condition";
	$result = $this->db->query($SQL);
        if($result->num_rows() > 0) {
            $pagelist = $result->result();
           return $pagelist;
           
        } else {
            return null;
        }
    }

	
	function updateSetting($data){
		$mod_date=@date("Y-m-d");		
		$addvalue = array(
		   'site_title' => $data['site_title'] ,
		   'default_keywords' => $data['default_keywords'],
		   'default_description' => $data['default_description'],
		   'facebook_page' => $data['facebook_page'],
		   'twitter_page' => $data['twitter_page'],
		   'modified_on'=>$mod_date
		);
		
		$this->db->where('id', $data['id']);
		$this->db->update('settings', $addvalue); 

	}
}

?>

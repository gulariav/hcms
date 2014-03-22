<?php

class Page_model extends CI_Model {
	function __construct() {
		parent::__construct();
}

   function showAllPages($condition='') {
      $SQL = "SELECT * FROM  pages $condition";
    
	$result = $this->db->query($SQL);

        if($result->num_rows() > 0) {
            $pagelist = $result->result();
           return $pagelist;
           
        } else {
            return null;
        }
	}

	function addPages($data){
				
		$addvalue = array(
		   'page_name' => $data['page_name'] ,
		   'page_text' => $data['page_text'],
		   'page_title' => $data['page_title'],
		   'meta_keyword' => $data['meta_keyword'] ,
		   'meta_description' => $data['meta_description'],
		   'status' => $data['status']
		);
		$this->db->insert('pages', $addvalue); 

	}

	function updatePages($data){
	$mod_date=@date("Y-m-d");		
$addvalue = array(
		   'page_name' => $data['page_name'] ,
		   'page_text' => $data['page_text'],
		   'page_title' => $data['page_title'],
		   'meta_keyword' => $data['meta_keyword'] ,
		   'meta_description' => $data['meta_description'],
		   'status' => $data['status'],
		   'modified_on'=>$mod_date
		);
		
		$this->db->where('id', $data['id']);
		$this->db->update('pages', $addvalue); 

	}
	
	function deletePages($data){
		$this->db->delete('pages', array('id' => $data['id'])); 
	}
}

?>

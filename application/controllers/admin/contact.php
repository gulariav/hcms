<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Contact extends CI_Controller {
    function __construct() {
        parent::__construct();
	if (!$this->session->userdata('is_client_login')) {
            redirect('admin/login');
        }
        $this->load->library('form_validation');
	$this->load->model('contact_model');
    }

    public function index() {
	$data['url']='contact/showAll';
	$data['content']=$this->load->view('admin/contact',$data, true);
        $data['pgTitle']='Manage Pages';
        $this->load->view('admin/template',$data);
	
    }

   public function showAll(){
	$res=$this->contact_model->showAll(); 
	$page = isset($_GET['page'])?$_GET['page']:1; 
	$limit = isset($_GET['rows'])?$_GET['row']:10;
	$sidx = isset($_GET['sidx'])?$_GET['sidx']:'id';
	$sord = isset($_GET['sord'])?$_GET['sord']:'asc';
	if(!$sidx) $sidx =1;   
	$count = $row['count'];
	if( $count >0 ){
    		$total_pages = ceil($count/$limit);
	}else{
    		$total_pages = 1;
	}

	if ($page > $total_pages)
    		$page=$total_pages;

	$start = $limit*$page - $limit;
	$cond="ORDER BY $sidx $sord Limit $start, 10";
	$result=$this->contact_model->showAll($cond); 
	
	$responce->page = $page;
	$responce->total = $total_pages;
	$responce->records = $count;
	$i=0;	

	foreach($result as $myresult){
		$j=$i+1;
		$responce->rows[$i]['id']=$myresult->id;	
		$responce->rows[$i]['cell']=array($j, $myresult->sender_name,
							$myresult->sender_email,
							$myresult->sender_mobile,
							$myresult->message,
							$myresult->added_on,
		);	
		$i++;	
	}	
	echo json_encode($responce);
	
   }

   public function update(){
	if($_POST['oper']=='delete'){
		$this->page_model->deleteRecord($_POST);
		
	}

	
	
   }
   
}

<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Setting extends CI_Controller {
    function __construct() {
        parent::__construct();
	if (!$this->session->userdata('is_client_login')) {
            redirect('admin/login');
        }
        $this->load->library('form_validation');
	$this->load->model('setting_model');
    }

    public function index() {
	$data['url']='setting/showAll';
	$data['content']=$this->load->view('admin/setting',$data, true);
        $data['pgTitle']='Manage Setting';
        $this->load->view('admin/template',$data);
	
    }

   public function showAll(){
	$res=$this->setting_model->showAll(); 
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
	$result=$this->setting_model->showAll($cond); 
	
	$responce->page = $page;
	$responce->total = $total_pages;
	$responce->records = $count;
	$i=0;	

	foreach($result as $myresult){
		$j=$i+1;
		$responce->rows[$i]['id']=$myresult->id;	
		$responce->rows[$i]['cell']=array($myresult->site_title,
							$myresult->default_keywords,
							$myresult->default_description,
							$myresult->facebook_page,
							$myresult->twitter_page,
							$myresult->modified_on
							
							
		);	
		$i++;	
	}	
	echo json_encode($responce);
	
   }

   public function update(){
	if($_POST['oper']=='edit'){
		$this->setting_model->updateSetting($_POST);
	}
   }
   
}

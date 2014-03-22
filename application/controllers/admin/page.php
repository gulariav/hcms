<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Page extends CI_Controller {
    function __construct() {
        parent::__construct();
	if (!$this->session->userdata('is_client_login')) {
            redirect('admin/login');
        }
        $this->load->library('form_validation');
	$this->load->model('page_model');
    }

    public function index() {
	$data['url']='page/showAll';
	$data['content']=$this->load->view('admin/page',$data, true);
        $data['pgTitle']='Manage Pages';
        $this->load->view('admin/template',$data);
	
    }

   public function showAll(){
	$res=$this->page_model->showAllPages(); 
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
	$result=$this->page_model->showAllPages($cond); 
	
	$responce->page = $page;
	$responce->total = $total_pages;
	$responce->records = $count;
	$i=0;	

	foreach($result as $myresult){
		$j=$i+1;
		$responce->rows[$i]['id']=$myresult->id;	
		
		if($myresult->status=='0'){
			$status='Inactive';
		}else{
			$status='Active';		
		}		
		$responce->rows[$i]['cell']=array("",$j, $myresult->page_name,
							$myresult->page_text,
							$myresult->page_title,
							$myresult->meta_keyword,
							$myresult->meta_description,
							$status
							
							
		);	
		$i++;	
	}	
	echo json_encode($responce);
	
   }

   public function update(){
	if($_POST['oper']=='add'){
		$this->page_model->addPages($_POST);
		
	}

	if($_POST['oper']=='edit'){
		$this->page_model->updatePages($_POST);
		
	}

	if($_POST['oper']=='delete'){
		$this->page_model->deletePages($_POST);
		
	}

	
	
   }
   
}

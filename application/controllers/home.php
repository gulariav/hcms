<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('page_model');
    	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$condition="where page_name='Home'";
		$values=$this->page_model->showAllPages($condition);
		$data['page_detail']=$values['0']->page_text;
		$data['pgTitle']=$values['0']->page_title;
		$data['meta_keywords']=$values['0']->meta_keyword;
		$data['meta_description']=$values['0']->meta_description;
		$data['content']=$this->load->view('home',$data, true);
       		$this->load->view('includes/template',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

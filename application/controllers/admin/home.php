<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index() {
        if ($this->session->userdata('is_client_login')) {
            redirect('admin/home/dashboard');
        } else {
            $this->load->view('admin/login');
        }
    }

    public function login() {
        if ($this->session->userdata('is_client_login')) {
            redirect('admin/home/dashboard');
        } else {
            $this->load->view('admin/login');
        }
    }

    public function loginAction() {
      session_start();
        $user = $this->input->post('username');
        $password = $this->input->post('password');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == FALSE) {
            $_SESSION['ERROR'] = 'User name or password is missing';
            redirect('admin/login');
        } else {
            $this->load->model('admin_model');
            $val = $this->admin_model->getAdmin($user, $password);
            if (!empty($val)) {


                            
$this->session->set_userdata(array(
                        'id' => $val['0']->id,
                        'username' => $val['0']->username,
                        'email' => $val['0']->email,
                        'is_client_login' => true,
			'LAST_LOGIN'=>@date("d-m-Y || H:i:s")	
));

               



             $value = array('last_login' => date("Y-m-d H:i:s"));
                $this->admin_model->updateAdmin($value);
                redirect('admin/home/dashboard');
            } else {
                $_SESSION['ERROR'] = 'Wrong username or password';
                redirect('admin/login');
            }
        }
    }

    public function logout() {
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('title');
        $this->session->unset_userdata('ag_country');
        $this->session->unset_userdata('is_client_login');
	$this->session->unset_userdata('LAST_LOGIN');
        $this->session->sess_destroy();
        $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
        $this->output->set_header("Pragma: no-cache");
        redirect('admin/login', 'refresh');
    }

    public function dashboard() {
        if (!$this->session->userdata('is_client_login')) {
            redirect('admin/login');
        }
        $data['content']=$this->load->view('admin/dashboard',$data, true);
        $data['pgTitle']='Admin Dashboard';
        $this->load->view('admin/template',$data);
    }

}

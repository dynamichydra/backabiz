<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base extends CI_Controller {

	public $data	= array();
	public function __construct()
    {
        parent::__construct();
        $this->CI = get_instance();
        $this->load->model('AdminModel');
				$this->load->model('BaseModel');
        $this->load->library('image_lib');
        $this->load->library('upload');
        $this->load->helper('string');
        $this->get_default();
    }

	public function get_default()
	{
		$this->data["category"]=$this->AdminModel->getdataCategory(["status"=>"active"],'category');
		$this->data['session_user']	= $this->session->userdata('user');
	}

	public function render_front($name){
		$this->data['page_name']=$name;
		$this->load->view('include/header',$this->data);
		$this->load->view($name,$this->data);
		$this->load->view('include/footer');
	}

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base extends CI_Controller {

	$data	= array();
	public function __construct()
    {
        parent::__construct();
        $this->CI = get_instance();
        $this->load->library('session');
        $this->load->library('pagination');
        $this->load->model('AdminModel');
        $this->load->library('image_lib');
        $this->load->library('upload');
        $this->load->helper('url');
				$this->get_default();
    }

	public function get_default()
	{
		$this->data["category"]=$this->AdminModel->getdata(["status"=>"active"],'category');

	}

	public function render_front($name){
		$this->load->view('include/header');
		$this->load->view($name,$this->data);
		$this->load->view('include/footer');
	}

}

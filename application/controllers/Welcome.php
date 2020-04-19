<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
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
    }

	public function index()
	{
		// $this->load->view('welcome_message');
		$where=array("status"=>"active");
		$data["banner"]=$this->AdminModel->getdata($where,'banner');
		$data["category"]=$this->AdminModel->getdata($where,'category');
		// print_r($data);
		// die;
		$this->load->view('include/header');
		$this->load->view('index',$data);
		$this->load->view('include/footer');
	}

	public function faqs()
	{
		$where=array("status"=>"active");
		$table="faq";
		$data["faq"]=$this->AdminModel->getdata($where,$table);
		$this->load->view('include/header');
		$this->load->view('faqs',$data);
		$this->load->view('include/footer');
	}
}

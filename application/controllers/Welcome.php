<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include 'Base.php';
class Welcome extends Base {

	public function __construct()
    {
        parent::__construct();
        $this->CI = get_instance();
    }

	public function index()
	{
		$this->data["banner"]=$this->AdminModel->getdata(["status"=>"active"],'banner');
		$this->data["project"]=$this->AdminModel->getdata(["status"=>"active"],'project');
		$this->render_front('index');
	}

	public function faqs()
	{
		$this->data["faq"]=$this->AdminModel->getdata(["status"=>"active"],'faq');
		$this->render_front('faqs');
	}
}

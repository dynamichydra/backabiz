<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include 'Base.php';
class Home extends Base {

	public function __construct()
    {
        parent::__construct();
        $this->CI = get_instance();
    }

	public function index()
	{
		$this->data["banner"]=$this->AdminModel->getdata(["status"=>"active"],'banner');
		$this->data["project"]=$this->AdminModel->getdata(["status"=>"active"],'project');
		$this->data["testimonial"] = $this->baseModel->_get('cmspages',['page_title'=>'testimonials']);
		$this->data["home_market"] = $this->baseModel->_get('cmspages',['page_title'=>'home_market']);
		$this->data["home_number"] = $this->baseModel->_get('cmspages',['page_title'=>'home_number']);
		$this->render_front('index');
	}

	public function faqs()
	{
		$this->data["faq"]=$this->AdminModel->getdata(["status"=>"active"],'faq');
		$this->render_front('faqs');
	}

	public function login()
	{
		$this->render_front('login');
	}

	public function login_check()
    {
        $email = $this->input->post('username');
        $pass = $this->input->post('password');

        $pass = md5($pass);

        $verify = $this->BaseModel->_get('user',['email'=>$email,password=>$pass,'status'=>'active'] );

        if (empty($verify)) {
            $this->session->set_flashdata(['msg'=> 'Username/Password is incorrect','type'=>'error']);
            redirect('home/login');
        } else {
					$this->session->set_userdata(['user'=>$verify[0]]);
            $this->data["user"]=$this->AdminModel->getdata(["status"=>"active"],'user');
            redirect('dashboard');
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('/');
    }

   public function register()
   {
          $this->form_validation->set_rules('email', 'E-mail', 'required|valid_email');
          if ($this->form_validation->run() == TRUE) {

              $registration_data = array(
                  'email' => $this->input->post('email'),
                  'password' =>md5(random_string('alnum',5)),
                  'user_type' => 'user',
                 'hash' => md5(rand(0, 1000))
              );
              $config['protocol'] = 'smtp';
              $config['smtp_host'] = 'ssl://smtp.gmail.com';
              $config['smtp_port'] = '465';
              $config['smtp_user'] = 'nirajs.official@gmail.com';
              $config['smtp_pass'] = 'nir@j7580';
              $config['mailtype'] = 'html';
              $config['charset'] = 'iso-8859-1';
              $config['wordwrap'] = TRUE;
              $config['newline'] = "\r\n"; //use double quotes
              $this->email->initialize($config);
       $address = $this->input->post('email');
          $id=$this->AdminModel->insert('user',$registration_data);
          $user_data=$this->AdminModel->getdata(['id'=>$id],'user');
          foreach ($user_data as $key => $value) {
          	$user_pass=$value['password'];
          	$User_hash=$value['hash'];
          }
         $this->load->library('email');     //load email library
        $this->email->from('sampleemail', 'Site'); //sender's email
        $subject="Welcome!";    //subject
        $message= /*-----------email body starts-----------*/
          'Thanks for signing up,

          Your account has been created.
          Here are your login details.
          -------------------------------------------------
          Email   : ' . $_POST['email'] . '
          Password: ' . $user_pass . '
          -------------------------------------------------

          Please click this link to activate your account:

          ' . base_url() . 'user/verify?' .
          'email=' . $_POST['email'] . '&hash=' . 'hash';

        /*-----------email body ends-----------*/
        $this->email->to($address);
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->send();
				$this->session->set_flashdata(['msg'=> 'An email varification link send to your email','type'=>'success']);
				redirect('home/message');

      }
  }

	function message(){
		$this->data["msg"] = $this->session->flashdata('msg');
		$this->data["type"] = $this->session->flashdata('type');
		if($this->data["msg"]!='')
			$this->render_front('cms/message');
		else
			redirect('/');
	}
}

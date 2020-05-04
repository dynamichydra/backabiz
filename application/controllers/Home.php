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

        $verify = $this->BaseModel->_get('user',['email'=>$email,'password'=>$pass,'status'=>'active'] );

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
            $generated_pass=random_string('alnum',5);

              $registration_data = array(
                  'email' => $this->input->post('email'),
                  'password' =>md5($generated_pass),
                  'user_type' => 'user',
                  'status'=>'pending',
                 'hash' => md5(rand(0, 10))
              );
              $config['protocol'] = 'smtp';
              $config['smtp_host'] = 'ssl://smtp.googlemail.com';
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
        $this->email->from('nirajs.official@gmail.com', 'nir@j7580'); //sender's email
        $subject="Welcome!";    //subject
        $message= /*-----------email body starts-----------*/
          'Thanks for signing up,

          Your account has been created.
          Here are your login details.
          -------------------------------------------------
          Username/Email   : ' . $_POST['email'] . '
          Password: ' . $generated_pass . '
          -------------------------------------------------

          Please click this link to activate your account:

          ' . base_url() . 'home/verify/' . $_POST['email'] . '/' . $User_hash;

        /*-----------email body ends-----------*/

        echo $message;
        die;
        $this->email->to($address);
        $this->email->subject($subject);
        $this->email->message($message);
        if($this->email->send()){
				$this->session->set_flashdata(['msg'=> 'An email verification link send to your email','type'=>'success']);
				redirect('home/message');
      }else
      {
        echo "sorry Mail sending failed, pls try again";
      }

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

  public function verify($email=null,$hash=null)
  {
    $data = array('status' => 'active');
    $where=array('email'=>$email,'hash'=>$hash);
    $verified=$this->AdminModel->doupdate($where,'user',$data);
    if($verified){
    $this->session->set_flashdata(['msg'=> 'Email verified succesfully,please login to continue','type'=>'success']);
        redirect('home/login');
      }else{
        $this->session->set_flashdata(['msg'=> 'Email verification Failed,please register again','type'=>'error']);
        redirect('home/login');
      }
  }


}

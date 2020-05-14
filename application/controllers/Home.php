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
		$this->data["feature"]=$this->AdminModel->getdata(["status"=>"active"],'footer_feature');
		$this->data["title"]=$this->AdminModel->getdata(["status"=>"active"],'title_management');
		$this->data["testimonial"]=$this->AdminModel->getdata(["status!="=>"delete"],'testimonial');
		$this->data["footer_question"]=$this->AdminModel->getdata(["status="=>"active"],'footer_question');
		$this->data["project"]=$this->AdminModel->getAllProjectDetails();
		$this->data["home_market"] = $this->baseModel->_get('cmspages',['page_title'=>'home_market']);
		$this->data["home_number"] = $this->baseModel->_get('cmspages',['page_title'=>'home_number']);
		$this->data["ending_project"] = $this->AdminModel->get_ending_projects();
		$this->data["total_projects"]=$this->AdminModel->get_total_projects();
		$this->data["f_projects"]=$this->AdminModel->getFeaturedprojects();
		$this->data["cat_desc"]=$this->AdminModel->get_description();
		$this->data["page_title"]="Backabiz";
		$this->render_front('index');
	}
	public function about()
	{
		$this->data["testimonial"]=$this->AdminModel->getdata(["status!="=>"delete"],'testimonial');
		$this->data["team"]=$this->AdminModel->getdata(["status!="=>"delete"],'funding_team');
		$this->data["about"] = $this->baseModel->_get('about',['status'=>'active']);
		$this->data["about_bottom"] = $this->baseModel->_get('about_bottom',['status'=>'active']);
		$this->data["page_title"]="About Us - Backabiz";
		$this->render_front('about');
	}

	public function faqs()
	{
		$this->data["faq"]=$this->AdminModel->getdata(["status"=>"active"],'faq');
		$this->data["page_title"]="FAQ's - Backabiz";
		$this->render_front('faqs');
	}

	public function login()
	{
		$this->data["page_title"]="login - Backabiz";
		$this->render_front('login');
	}

	public function login_check()
    {
        $email = $this->input->post('username');
        $pass = $this->input->post('password');

        $pass = md5($pass);

        $verify = $this->BaseModel->_get('user',['email'=>$email,'password'=>$pass,'status'=>'active'] );

        if (empty($verify)) {
            $this->session->set_flashdata(['error'=> 'Username/Password is incorrect','type'=>'error']);
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
          $this->form_validation->set_rules('email', 'E-mail', 'required|valid_email|is_unique[user.email]');
          if ($this->form_validation->run() == TRUE) {
            $generated_pass=random_string('alnum',5);
            $address = $this->input->post('email');
              $registration_data = array(
                  'email' => $this->input->post('email'),
                  'password' =>md5($generated_pass),
                  'user_type' => 'user',
                  'status'=>'pending',
                 'hash' => md5(rand(0, 10))
              );
							$id=$this->AdminModel->insert('user',$registration_data);
              $user_data=$this->AdminModel->getdata(['id'=>$id],'user');
                foreach ($user_data as $key => $value) {
           	    $User_hash=$value['hash'];
           }
										 $config = Array(
									 'protocol'  => 'smtp',
									 'smtp_host' => 'ssl://smtp.googlemail.com',
									 'smtp_port' => '465',
									 'smtp_user' => 'nirajs.official@gmail.com',
									 'smtp_pass' => 'nir@j7580',
									 'mailtype'  => 'html',
									 'starttls'  => true,
									 'newline'   => "\r\n"
							 );



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

        $this->load->library('email', $config);

        $this->email->from('nirajs.official@gmail.com', 'welcome');
        $this->email->to($address);
        $this->email->subject($subject);
        $this->email->message($message);
        if($this->email->send()){
				$this->session->set_flashdata(['msg'=> 'Registration Successful. Please Check Your Email for Login Instructions.','type'=>'success']);
				redirect('home/message');
      }else
      {
        echo "sorry Mail sending failed, pls try again";
      }

		}else{
			$this->session->set_flashdata(['error'=> 'Email already registered,pls try with another email address','type'=>'success']);
			redirect('home/login');
		}
  }

	function message(){
		$this->data["page_title"]="Backabiz";
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
    $this->session->set_flashdata(['success'=> 'Email verified succesfully,please login to continue','type'=>'success']);
        redirect('home/login');
      }else{
        $this->session->set_flashdata(['error'=> 'Email verification Failed,please register again','type'=>'error']);
        redirect('home/login');
      }
  }

	public function contact()
	{
		$this->data["contact"]=$this->AdminModel->getdata(["status"=>"active"],'contact_us');
		$this->data['title']	= 'Contact';
		$this->data["page_title"]="Contact - Backabiz";
		$this->render_front('contact');
	}

	public function contact_mail()
	{
				 $this->form_validation->set_rules('email', 'E-mail', 'required|valid_email');
				 if ($this->form_validation->run() == TRUE) {
					 $mess = $this->input->post('message');
					 $name = $this->input->post('name');
						 $mail_data = array(
								 'email' => $this->input->post('email'),
								 'name' => $this->input->post('name'),
								 'subject' => $this->input->post('subject'),
								 'phone' => $this->input->post('phone'),
								 'message' => $this->input->post('message'),
								 'user_id' => $this->input->post('id'),
						 );
						 $id=$this->AdminModel->insert('contact_mail',$mail_data);
										$config = Array(
									'protocol'  => 'smtp',
									'smtp_host' => 'ssl://smtp.googlemail.com',
									'smtp_port' => '465',
									'smtp_user' => 'nirajs.official@gmail.com',
									'smtp_pass' => 'nir@j7580',
									'mailtype'  => 'html',
									'starttls'  => true,
									'newline'   => "\r\n"
							);



			 $subject=$this->input->post('subject');    //subject
			 $message= /*-----------email body starts-----------*/
				 'Message from '.$name.' ,

				 User Details:-
				 -------------------------------------------------
				 Name   : ' . $name . '
				 Email: ' . $this->input->post('email') . '
				 Phone: ' . $this->input->post('phone') . '
				 -------------------------------------------------

				 User Message:-

				 ' . $mess;

			 /*-----------email body ends-----------*/

			 $this->load->library('email', $config);

			 $this->email->from('nirajs.official@gmail.com', 'Contact-Backabiz');
			 $this->email->to('niraj@sibyltech.co');
			 $this->email->subject($subject);
			 $this->email->message($message);
			 if($this->email->send()){
			 $this->session->set_flashdata(['msg'=> 'Thank You For Contacting Us.','type'=>'success']);
			 redirect('home/message');
		 }else
		 {
			 echo "sorry Mail sending failed, pls try again";
		 }

	 }else{
		 $this->session->set_flashdata(['error'=> 'Please Enter A valid Mail','type'=>'success']);
		 redirect('home/contact');
	 }
 }

 public function news()
 {
	 // $this->data["contact"]=$this->AdminModel->getdata(["status"=>"active"],'contact_us');
	 $this->data['title']	= 'News';
	 $this->data["page_title"]="News";
	 $this->render_front('news');
 }

 public function terms()
 {
	 $this->data["terms"]=$this->AdminModel->getdata(["status="=>"active"],'terms');
	 $this->data['title']	= 'Terms';
	 $this->data["page_title"]="Terms";
	 $this->render_front('terms');
 }
 public function privacy()
 {
	 $this->data["terms"]=$this->AdminModel->getdata(["status="=>"active"],'privacy');
	 $this->data['title']	= 'Privacy';
	 $this->data["page_title"]="Privacy";
	 $this->render_front('privacy');
 }
 public function legal()
 {
	 $this->data["terms"]=$this->AdminModel->getdata(["status="=>"active"],'legal');
	 $this->data['title']	= 'Legal';
	 $this->data["page_title"]="Legal";
	 $this->render_front('legal');
 }


}

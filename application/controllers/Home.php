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
		$this->data["about_banner"]=$this->AdminModel->getdata(["status"=>"active"],'about_banner');
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
		$this->data["page_title"]="FAQ'S";
		$this->data['title']	= "FAQ'S";
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
									'date_joined'=>date('Y-m-d H:i:s'),
                 'hash' => md5(rand(0, 10))
              );
							$id=$this->AdminModel->insert('user',$registration_data);
              $user_data=$this->AdminModel->getdata(['id'=>$id],'user');
                foreach ($user_data as $key => $value) {
           	    $User_hash=$value['hash'];
           }
								// 		 $config = Array(
								// 	 'protocol'  => 'smtp',
								// 	 'smtp_host' => 'ssl://smtp.googlemail.com',
								// 	 'smtp_port' => '465',
								// 	 'smtp_user' => 'nirajs.official@gmail.com',
								// 	 'smtp_pass' => 'nir@j7580',
								// 	 'mailtype'  => 'html',
								// 	 'starttls'  => true,
								// 	 'newline'   => "\r\n"
							 // );



        // $subject="Welcome!";    //subject
        $msg= /*-----------email body starts-----------*/
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

        // $this->load->library('email', $config);
				//
        // $this->email->from('nirajs.official@gmail.com', 'welcome');
        // $this->email->to($address);
        // $this->email->subject($subject);
        // $this->email->message($message);
				$to      = $address;
				$subject = 'Welcome!';
				$message = $msg;
				$headers = 'From: hello@backabiz.com' . "\r\n" .
						'Reply-To: hello@backabiz.com' . "\r\n" .
						'X-Mailer: PHP/' . phpversion();

				$success = mail($to, $subject, $message, $headers);
        if($success){
				$this->session->set_flashdata(['msg'=> 'Registration Successful. Please Check Your Email for Login Instructions.','type'=>'success']);
				redirect('home/message');
      }else
      {
        $errorMessage = error_get_last()['message'];
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
							// 			$config = Array(
							// 		'protocol'  => 'smtp',
							// 		'smtp_host' => 'ssl://smtp.googlemail.com',
							// 		'smtp_port' => '465',
							// 		'smtp_user' => 'nirajs.official@gmail.com',
							// 		'smtp_pass' => 'nir@j7580',
							// 		'mailtype'  => 'html',
							// 		'starttls'  => true,
							// 		'newline'   => "\r\n"
							// );



			 $sub=$this->input->post('subject');    //subject
			 $msg= /*-----------email body starts-----------*/
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

			 // $this->load->library('email', $config);
			 //
			 // $this->email->from('nirajs.official@gmail.com', 'Contact-Backabiz');
			 // $this->email->to('niraj@sibyltech.co');
			 // $this->email->subject($subject);
			 // $this->email->message($message);
			 $to      = 'hello@backabiz.com';
			 $subject = $sub;
			 $message = $msg;
			 $headers = 'From: hello@backabiz.com' . "\r\n" .
					 'Reply-To: hello@backabiz.com' . "\r\n" .
					 'X-Mailer: PHP/' . phpversion();

			 $success = mail($to, $subject, $message, $headers);
			 if($success){
			 $this->session->set_flashdata(['success'=> 'Thank You For Contacting Us.','type'=>'success']);
			 redirect('home/contact');
		 }else
		 {
			 $errorMessage = error_get_last()['message'];
		 }

	 }else{
		 $this->session->set_flashdata(['error'=> 'Please Enter A valid Mail','type'=>'error']);
		 redirect('home/contact');
	 }
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
 // public function howitworks()
 // {
	//  $this->data["h_title"]=$this->AdminModel->getdata(["status="=>"active"],'how_title');
	//  $this->data['title']	= 'How it works?';
	//  $this->data["page_title"]="How it works?";
	//  $this->render_front('howitwork');
 // }
 public function howBackabizWorks()
 {
	 $this->data["how"]=$this->AdminModel->getdata(["status="=>"active"],'how_backabiz');
	 $this->data["faq"]=$this->AdminModel->getdata(["status="=>"active"],'howbackabizwork_faq');
	 $this->data['title']	= 'How Backabiz Works';
	 $this->data["page_title"]="How Backabiz Works";
	 $this->render_front('howbackabizworks');
 }
 public function whyBackabiz()
 {
	 $this->data["why"]=$this->AdminModel->getdata(["status="=>"active"],'why_backabiz');
	 $this->data['title']	= 'Why Backabiz';
	 $this->data["page_title"]="Why Backabiz";
	 $this->render_front('howitwork');
 }
 public function helpCenter()
 {
	 $this->data["h_title"]=$this->AdminModel->getdata(["status="=>"active"],'help_center');
	 $this->data['title']	= 'Help Centre';
	 $this->data["page_title"]="Help Centre";
	 $this->render_front('howitwork');
 }
public function lost_password()
{
	$this->data['title']	= 'Password Reset';
	$this->data["page_title"] = "Password Reset";
	$this->render_front('passwordReset');
}
public function submit_lost_password()
{
	$this->form_validation->set_rules('email', 'E-mail', 'required|valid_email');
	if ($this->form_validation->run() == TRUE) {
		$user_mail=$this->input->post('email');
		$update_data = array(
			 'hash' => md5(rand(0, 10))
		);
		$this->AdminModel->doupdate(["email"=>$user_mail],'user',$update_data);
		$check=$this->AdminModel->CheckUserMail($user_mail);
		if($check){

// 			$config = Array(
// 		'protocol'  => 'smtp',
// 		'smtp_host' => 'ssl://smtp.googlemail.com',
// 		'smtp_port' => '465',
// 		'smtp_user' => 'nirajs.official@gmail.com',
// 		'smtp_pass' => 'nir@j7580',
// 		'mailtype'  => 'html',
// 		'starttls'  => true,
// 		'newline'   => "\r\n"
// );

  //subject
	$msg= /*-----------email body starts-----------*/
		'Dear,'.$check->first_name.' '.$check->last_name.'

		We want to help you
		reset your password.
		-------------------------------------------------
		Please click below link to reset your password:

		' . base_url() . 'home/resetPassword/' . $check->email . '/' . $check->hash;




	/*-----------email body ends-----------*/

				// $this->load->library('email', $config);
				//
				// $this->email->from('nirajs.official@gmail.com', 'Password Reset-Backabiz');
				// $this->email->to($user_mail);
				// $this->email->subject("Please reset you password at Backabiz");
				// $this->email->message($message);
				$to      = $user_mail;
				$subject = 'Please reset you password at Backabiz';
				$message = $msg;
				$headers = 'From: hello@backabiz.com' . "\r\n" .
						'Reply-To: hello@backabiz.com' . "\r\n" .
						'X-Mailer: PHP/' . phpversion();

				$success = mail($to, $subject, $message, $headers);
				if($success){
				$this->session->set_flashdata(['msg'=> 'A link to reset your password has been sent to you registered email,If you dont see it be sure to check you spam folder too' ,'type'=>'success']);
				redirect('home/message');
		}else{
			$errorMessage = error_get_last()['message'];
		}
	}
	else{
		$this->session->set_flashdata(['error'=> 'Please enter a valid registered email' ,'type'=>'success']);
		redirect('home/lost_password');
}
	}else{
		$this->session->set_flashdata(['error'=> 'Please enter a valid registered email' ,'type'=>'success']);
		redirect('home/lost_password');
}
}

public function resetPassword($email=null,$hash=null)
{
	$where=array('email'=>$email,'hash'=>$hash);
	$verified=$this->AdminModel->getdata($where,'user');
	if($verified){
		$this->data["email"]=$email;
		$this->data['title']	= 'Password Update';
 	 $this->data["page_title"]="Password Update";
	  $this->session->set_flashdata(['success'=> 'Please change your password','type'=>'success']);
		$this->render_front('changePassword');
	}else{
		$this->session->set_flashdata(['msg'=> 'Link expired, click lost password again to reset your password','type'=>'danger']);
				redirect('home/message');
	}
}

public function submit_new_password()
{
	$email=$this->input->post('email');
	$data = array(
		'password' => md5($this->input->post("psw")),
		'hash'=>md5(rand(0, 10)),
	);
	$where=array('email'=>$email);
	$verified=$this->AdminModel->doupdate($where,'user',$data);
	if($verified){
	$this->session->set_flashdata(['msg'=> 'Password changed succesfully,please login to continue','type'=>'success']);
			redirect('home/message');
		}else{
			$this->session->set_flashdata(['msg'=> 'Password Update Failed,please try again','type'=>'danger']);
			redirect('home/message');
		}
}

public function News()
{
	$this->data['latest']=$this->AdminModel->latestnews();
	$this->data["news"]=$this->AdminModel->getdata(["status"=>"active"],'news');
	$this->data["page_title"]="Blog";
	$this->data['title']	= 'Blog';
	$this->render_front('news');
}

public function title($value)
{
	$url = str_replace('-', ' ',$value);
	$this->data["page_title"]="$url";
	$this->data['title']	= $url;
	$this->data["news"]=$this->AdminModel->getdata(["status"=>"active","title"=>$url],'news');
	$this->data['latest']=$this->AdminModel->latestnews();
	$this->render_front('single-news');
}

public function add_back()
{
	if( !isset($_SESSION["user"]) ){
redirect('home/login');
}
else
{
	$pr_id=$this->input->post('project_id');
	$goal=$this->AdminModel->getdata(["status"=>"active","id"=>$pr_id],'project');
	$project_admin=$goal[0]['user_id'];
	$funding_id=$this->input->post('user_id');
	// echo $project_admin;
	// echo $funding_id;
	// die;
	if($project_admin==$funding_id){
		$this->session->set_flashdata(['msg'=> 'Project Owner Cannot Back His Own Campaign.','type'=>'danger']);
				redirect('home/message');
	}
	$a=$goal[0]['funding_rec'];
	$b=$this->input->post('donate_amount_field');
	$received=$a+$b;
	$amount=array(
		'funding_rec'=>$received,
	);
	$verify=$this->AdminModel->doupdate(["status"=>"active","id"=>$pr_id],'project',$amount);
	if($verify){
	$data=array(
		'user_id'=>$funding_id,
		'project_id'=>$pr_id,
		'project_title'=>$this->input->post('project_title'),
		'amount'=>$this->input->post('donate_amount_field'),
		'status'=>'Approved',
	);
  $this->AdminModel->insert('backers',$data);
	$this->session->set_flashdata(['msg'=> 'Payment Successfull','type'=>'success']);
			redirect('home/message');
}else{
	$this->session->set_flashdata(['msg'=> 'Something Went Wrong,Please Try Again','type'=>'danger']);
			redirect('home/message');
}
}

}

public function subscribe()
{
	$subscriber_email=$this->input->post('SUB_EMAIL');
	$data = array(
			'email' => $subscriber_email,
			'status' => "active",
	);
	$verify=$this->AdminModel->insert('subscriber',$data);
	if($verify){
		$this->session->set_flashdata(['msg'=> 'Thanks For Subscribing Us','type'=>'success']);
				redirect('home/message');
	}else{
		$this->session->set_flashdata(['msg'=> 'Something Went Wrong,Please Try Again','type'=>'danger']);
				redirect('home/message');
	}
	}
}

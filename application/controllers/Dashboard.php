<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include 'Base.php';
class Dashboard extends Base {

	public function __construct()
    {
        parent::__construct();
        $this->CI = get_instance();
    }

	public function index()
	{
		if( !isset($_SESSION["user"]) ){
		redirect('home/login');
		}
		else
		{
			$id=$_SESSION["user"];
		$this->data['user'] =$id;
		$this->data['title']	= 'Dashboard';
		$this->render_front('user/index');
		}
	}
   public function profile($id=null)
	  {
	  	if( !isset($_SESSION["user"]) ){
		redirect('home/login');
		}
		else
		{
	  	$this->data['title']	= 'Profile';
	    $this->data["user"]=$this->AdminModel->getdata(["id"=>$id],'user');
	    $this->render_front('user/profile');
	}
	  }

	public function new_project()
	{
		$this->data['title']	= 'Start a Project';
		$this->data['category']	= $this->baseModel->_get('category',['status'=>'active']);
		$this->data['country']	= $this->baseModel->_get('countries');
		$this->render_front('user/new_project');
	}

	public function save_project()
	{
		$cat = $this->input->post('category');
		$cat = implode(",",$cat);

		$config['upload_path'] = "uploads/project/";
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size'] = '409600';
		$config['create_thumb'] = TRUE;
		$this->upload->initialize($config);
		if ($this->upload->do_upload('feature_img')) {
				$imageDetailArray = $this->upload->data();
				$image = $imageDetailArray['file_name'];
		}else{
				$image="N/A";
		}
		if ($this->upload->do_upload('reward_img')) {
				$imageDetail = $this->upload->data();
				$image1 = $imageDetail['file_name'];
		}else{
				$image1="N/A";
		}
		$arr = array(
						'user_id'=>	$this->data['session_user']['id'],
						'feature_img' => $image,
						'reward_img' => $image1,
						'title'=>$this->input->post('title'),
						'description'=>$this->input->post('description'),
						'short_description'=>$this->input->post('short_description'),
						'category'=>$cat,
						'tag'=>$this->input->post('tag'),
						'video'=>$this->input->post('video'),
						'project_end_method'=>$this->input->post('emethod'),
						'start_date'=>$this->input->post('start_date'),
						'end_date'=>$this->input->post('end_date'),
						'min_amount'=>$this->input->post('min_amount'),
						'max_amount'=>$this->input->post('max_amount'),
						'funding_goal'=>$this->input->post('funding_goal'),
						'rec_amount'=>$this->input->post('rec_amount'),
						'pledge_amount'=>$this->input->post('pledge_amount'),
						'country'=>$this->input->post('country'),
						'location'=>$this->input->post('location'),
						'contributor_table'=>$this->input->post('contributor_table'),
						'contributor_anonymity'=>$this->input->post('contributor_anonymity'),
						'reward_p_amount'=>$this->input->post('reward_p_amount'),
						'reward_desc'=>$this->input->post('reward_desc'),
						'del_month'=>$this->input->post('del_month'),
						'del_year'=>$this->input->post('del_year'),
						'quantity'=>$this->input->post('quantity'),
						'status'=>'active'
				);
				$this->baseModel->_set_insert('project',$arr);
				$this->session->set_flashdata(['msg'=> 'Project created successfully. Please wait for approval.','type'=>'success']);
				redirect('dashboard');
	}

	public function editorimage()
	{
		print_r($this->input->post());
	}

	public function login_check()
    {
        echo $email = $this->input->post('username');
        echo $pass = $this->input->post('password');

        $pass = md5($pass);

        $verify = $this->BaseModel->_get('user',['email'=>$email,password=>$pass,'status'=>'active'] );

        if (empty($verify)) {
            $this->session->set_flashdata(['msg'=> 'Username/Password is incorrect','type'=>'error']);
            redirect('home/login');
        } else {
					$this->session->set_userdata($verify);
            $this->data["user"]=$this->AdminModel->getdata(["status"=>"active"],'user');
            redirect('home/dashboard');
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

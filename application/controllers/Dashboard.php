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
			$id=$_SESSION["user"]['id'];

		// $this->data['user'] =$id;
		$this->data['user'] =$this->AdminModel->getdata(["id"=>$id],'user');
		$this->data['title']	= 'Dashboard';
		$this->data["page_title"]="Dashboard";
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
			$this->data["page_title"]="Profile";
	  	$this->data['title']	= 'Profile';
			$this->data["countries"]=$this->AdminModel->get_countries();
	    $this->data["user"]=$this->AdminModel->getdata(["id"=>$id],'user');
	    $this->render_front('user/profile');
	}
	  }

	public function new_project($id=null)
	{
		if(!empty($id)){
			$this->data["page_title"]="Edit Campaign";
			$this->data['title']	= 'Edit Campaign';
			$this->data['category']	= $this->baseModel->_get('category',['status'=>'active']);
			$this->data['project']	= $this->baseModel->_get('project',['status'=>'Pending','id'=>$id]);
			$this->data['country']	= $this->baseModel->_get('countries');
			$this->render_front('user/new_project');
		}else{
		$this->data["page_title"]="New Campaign";
		$this->data['title']	= 'Start a Campaign';
		$this->data['category']	= $this->baseModel->_get('category',['status'=>'active']);
		$this->data['country']	= $this->baseModel->_get('countries');
		$this->render_front('user/new_project');
	}
	}

	public function save_project()
	{
		$cat = $this->input->post('category');
		$cat = implode(",",$cat);

		if(!empty($_FILES['files']['name']) && count(array_filter($_FILES['files']['name'])) > 0){
				$filesCount = count($_FILES['files']['name']);
				for($i = 0; $i < $filesCount; $i++){
						$_FILES['file']['name']     = $_FILES['files']['name'][$i];
						$_FILES['file']['type']     = $_FILES['files']['type'][$i];
						$_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
						$_FILES['file']['error']     = $_FILES['files']['error'][$i];
						$_FILES['file']['size']     = $_FILES['files']['size'][$i];

						// File upload configuration
						$uploadPath = 'uploads/project/';
						$config['upload_path'] = $uploadPath;
						$config['allowed_types'] = 'jpg|jpeg|png|gif';
						//$config['max_size']    = '100';
						//$config['max_width'] = '1024';
						//$config['max_height'] = '768';

						// Load and initialize upload library
						$this->load->library('upload', $config);
						$this->upload->initialize($config);

						// Upload file to server
						if($this->upload->do_upload('file')){
								// Uploaded file data
								$fileData = $this->upload->data();
								$uploadData[$i] = $fileData['file_name'];
						}else{
								$errorUploadType .= $_FILES['file']['name'].' | ';
						}
				}
			}

				$errorUploadType = !empty($errorUploadType)?'<br/>File Type Error: '.trim($errorUploadType, ' | '):'';
				if(!empty($uploadData)){
						// Insert files data into the database
						$image=implode(",", $uploadData);
					}else{
						$image= "N/A";
					}

		$config['upload_path'] = "uploads/project/";
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size'] = '409600';
		$config['create_thumb'] = TRUE;
		$this->upload->initialize($config);
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
						't&c'=>$this->input->post('agree'),
						'status'=>'Pending'
				);
				$this->baseModel->_set_insert('project',$arr);
				$this->session->set_flashdata(['success'=> 'Project created successfully. Please wait for approval.','type'=>'success']);
				redirect('dashboard');
	}
	public function update_project($id=null)
	{
			// $id=$this->input->post('id');
			$table="project";
			$where=array('id'=>$id);
			$der=$this->input->post('category');
			$der1=implode(",",$der);
			$did=$this->AdminModel->getdata($where,$table);
			// print_r($did);
			// die;
			if (!empty($did)){
			foreach($did as $key=>$value) {
					$image0=$value['feature_img'];
					$image01=$value['reward_img'];

			}
	}
	if(!empty($_FILES['files']['name']) && count(array_filter($_FILES['files']['name'])) > 0){
			$filesCount = count($_FILES['files']['name']);
			for($i = 0; $i < $filesCount; $i++){
					$_FILES['file']['name']     = $_FILES['files']['name'][$i];
					$_FILES['file']['type']     = $_FILES['files']['type'][$i];
					$_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
					$_FILES['file']['error']     = $_FILES['files']['error'][$i];
					$_FILES['file']['size']     = $_FILES['files']['size'][$i];

					// File upload configuration
					$uploadPath = 'uploads/project/';
					$config['upload_path'] = $uploadPath;
					$config['allowed_types'] = 'jpg|jpeg|png|gif';
					//$config['max_size']    = '100';
					//$config['max_width'] = '1024';
					//$config['max_height'] = '768';

					// Load and initialize upload library
					$this->load->library('upload', $config);
					$this->upload->initialize($config);

					// Upload file to server
					if($this->upload->do_upload('file')){
							// Uploaded file data
							$fileData = $this->upload->data();
							$uploadData[$i] = $fileData['file_name'];
					}else{
							$errorUploadType .= $_FILES['file']['name'].' | ';
					}
			}
		}

			$errorUploadType = !empty($errorUploadType)?'<br/>File Type Error: '.trim($errorUploadType, ' | '):'';
			if(!empty($uploadData)){
					// Insert files data into the database
					$image=implode(",", $uploadData);
				}else{
					$image= $image0;
				}

			$config['upload_path'] = "uploads/project/";
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size'] = '409600';
			// $config['file_name'] = $filename;
			$config['create_thumb'] = TRUE;

			$this->upload->initialize($config);
			if ($this->upload->do_upload('reward_img')) {
					$imageDetail = $this->upload->data();

					$image1 = $imageDetail['file_name'];
			}else{
					$image1=$image01;
			}
					$data = array(
							'feature_img' => $image,
							'reward_img' => $image1,
							'title'=>$this->input->post('title'),
							'description'=>$this->input->post('description'),
							'short_description'=>$this->input->post('short_description'),
							'category'=>$der1,
							'tag'=>$this->input->post('tag'),
							'video'=>$this->input->post('video'),
							'project_end_method'=>$this->input->post('method'),
							'start_date'=>$this->input->post('start_date'),
							'end_date'=>$this->input->post('end_date'),
							'min_amount'=>$this->input->post('min_amount'),
							'max_amount'=>$this->input->post('max_amount'),
							'funding_goal'=>$this->input->post('funding_goal'),
							'rec_amount'=>$this->input->post('rec_amount'),
							'pledge_amount'=>$this->input->post('pledge_amount'),
							'country'=>$this->input->post('country'),
							'location'=>$this->input->post('location'),
							'reward_p_amount'=>$this->input->post('reward_p_amount'),
							'reward_desc'=>$this->input->post('reward_desc'),
							'del_month'=>$this->input->post('del_month'),
							'del_year'=>$this->input->post('del_year'),
							'quantity'=>$this->input->post('quantity'),
							'featured'=>$this->input->post('featured_project'),
							// 'status'=>'active'
					);
					// print_r($data);
					// die;
					if(empty($id)){
					$this->AdminModel->insert($table,$data);
					$this->session->set_flashdata(['success'=> 'Project Updated successfully. Please wait for approval.','type'=>'success']);
					redirect('dashboard');
			}else{
					$this->AdminModel->doupdate($where,$table,$data);
					$this->session->set_flashdata(['success'=> 'Project Updated successfully. Please wait for approval.','type'=>'success']);
					redirect('dashboard');
			}
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

	public function update_user()
	{
			$id=$this->input->post('id');
			if(!empty($id))
			{
				$where=array('status'=>"active",'id'=>$id);
				$data = $this->AdminModel->getdata($where,"user");
				$img=$data[0]['img'];
				$config['upload_path'] = "uploads/users/";
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$config['max_size'] = '409600';
				// $config['file_name'] = $filename;
				$config['create_thumb'] = TRUE;

				$this->upload->initialize($config);

				if ($this->upload->do_upload('user_image')) {
						$imageDetailArray = $this->upload->data();

						$image = $imageDetailArray['file_name'];
				}else{
						$image=$img;
				}
			$data=array(
				'first_name'=> $this->input->post("f_name"),
				'last_name'=> $this->input->post("l_name"),
				'about'=> $this->input->post("about"),
				'bio'=> $this->input->post("bio"),
				'img'=> $image,
				'fax'=> $this->input->post("fax"),
				'website'=> $this->input->post("web"),
				'email'=>$this->input->post("email"),
				'phone'=>$this->input->post("phone"),
				// 'password'=>md5($this->input->post("psw")),
				'address'=> $this->input->post("address"),
				'address2'=> $this->input->post("address2"),
				'country'=> $this->input->post("country"),
				// 'state'=> $this->input->post("state"),
				// 'city'=> $this->input->post("city"),
				'facebook'=> $this->input->post("fb_link"),
				'twitter'=> $this->input->post("tw_link"),
				'pinterest'=> $this->input->post("pt_link"),
				'vk'=> $this->input->post("profile_vk"),
				'linkedin'=> $this->input->post("profile_linkedin"),
			);
			// print_r($data);
			// die;
			$insert = $this->AdminModel->doupdate($where,"user",$data);;
			if ($insert){
					$this->session->set_flashdata('success','Updated successfully');
					redirect('dashboard');
			}else{
					$this->session->set_flashdata('error','user update failed');
					redirect('dashboard');
			}
	}
}
public function update_dash()
{
		$id=$this->input->post('id');
		$where=array('status'=>"active",'id'=>$id);
		$data=array(
			'user_name'=> $this->input->post("user_name"),
			'first_name'=> $this->input->post("f_name"),
			'last_name'=> $this->input->post("l_name"),
			'bio'=> $this->input->post("bio"),
			'website'=> $this->input->post("web"),
			'email'=>$this->input->post("email"),
		);
		// print_r($data);
		// die;
		$insert = $this->AdminModel->doupdate($where,"user",$data);;
		if ($insert){
				$this->session->set_flashdata('success','Updated successfully');
				redirect('dashboard');
		}else{
				$this->session->set_flashdata('error','user update failed');
				redirect('dashboard');
		}
}

public function password($id=null)
{
			if( !isset($_SESSION["user"]) ){
		redirect('home/login');
		}
		else
		{
			$this->data["page_title"]="Update Password";
			$this->data['title']	= 'Update Password';
			$this->data["user"]=$this->AdminModel->getdata(["id"=>$id],'user');
			$this->render_front('user/password');
		}
}

public function update_password()
{
	$id=$this->input->post('id');
	$check=$this->AdminModel->getdata(["id"=>$id],'user');
	$user_pass=$check[0]['password'];
	$input_pass=md5($this->input->post("password"));
	// echo $user_pass;echo "and";
	// echo $input_pass;
	// die;

	if($user_pass==$input_pass)
	{
		$data_array=array(
			'password'=>md5($this->input->post("psw")),
		);
		$where=array('id'=>$id,'status'=>'active');
		$insert = $this->AdminModel->doupdate($where,"user",$data_array);
		if ($insert){
				$this->session->set_flashdata('success','Password Updated successfully');
				redirect('dashboard/password');
		}else{
				$this->session->set_flashdata('error','Password Update failed');
				redirect('dashboard/password');
		}
	}else
	{
		$this->session->set_flashdata('error','Current Password Mismatch,please try again');
		redirect('dashboard/password');
	}
}

public function my_projects($id=null)
{
	if( !isset($_SESSION["user"]) ){
redirect('home/login');
}
$this->data["page_title"]="My Campaigns";
$this->data['title']	= 'Campaigns';
// $project_details =$this->AdminModel->getProjectDetails($id);
$this->data["user"]=$this->AdminModel->getdata(["id"=>$id],'user');
$this->data["project_details"]=$this->AdminModel->getMyProjectDetails($id);
$this->render_front('user/projects');
}
public function update($id=null)
 {
	 if( !isset($_SESSION["user"]) ){
 redirect('home/login');
 }
 else
 {
	 $user_id=$_SESSION["user"]['id'];
	 $this->data["page_title"]="Update";
	 $this->data['title']	= 'Update';
	 $this->data['user'] =$this->AdminModel->getdata(["id"=>$user_id],'user');
	 $this->data["updates"]=$this->AdminModel->getdata(["status"=>'active',"project_id"=>$id],'project_update');
	 $this->data["project"]=$this->AdminModel->getdata(["id"=>$id],'project');
	 $this->render_front('user/update');
}
 }

 public function p_update($id=null)
{
	$input_data=array(
		'project_id'=>$id,
		'update_title'=>$this->input->post('update_title'),
		'update_details'=>$this->input->post('project_update_details'),
		'status'=>'active',
	);
	$this->AdminModel->insert('project_update',$input_data);
	 redirect('dashboard/update/'.$id);
  }

	public function remove_update($id)
 {
	 $input_data=array(
		 'status'=>'delete',
	 );
	 $where=array('id'=>$id,'status'=>'active');
	 $this->AdminModel->doupdate($where,"project_update",$input_data);
	 $project_id=$this->AdminModel->getdata(["id"=>$id],'project_update');
	 $p_id=$project_id[0]['project_id'];
		redirect('dashboard/update/'.$p_id);
	 }
}

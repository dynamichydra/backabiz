<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
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
        $user_id = $this->session->userdata('admin_id');
        // echo $user_id;
        // die;
        if (!empty($user_id)) {
            redirect('admin/dashboard');
        }
        $this->load->view('admin/login');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('admin');
    }

    public function temp()
    {
        $this->load->view('admin/temporary_page');
    }

    public function login()
    {
        $email = $this->input->post('email');
        $pass = $this->input->post('password');

        $pass = md5($pass);

        $verify = $this->AdminModel->check_admin($email, $pass);
        if (empty($verify)) {
            $this->session->set_flashdata('error', 'Username/Password is incorrect');
            redirect('admin/index');
        } else {
            $this->session->set_userdata('admin_id', $verify->id);
            redirect('admin/dashboard');
        }
    }

    public function dashboard()
    {
        $user_id = $this->session->userdata('admin_id');
        if (empty($user_id)) {
            redirect('admin');
        }
        $data=array('page_title'=>'Dashboard','layout_page'=>'dashboard');
        $this->load->view('admin/layout',$data);
    }

    public function add_user()
    {
        $user_id = $this->session->userdata('admin_id');
        if (empty($user_id)) {
            redirect('admin');
        }
        $data=array('page_title'=>'Add New User','layout_page'=>'add_user');
        $this->load->view('admin/layout',$data);
    }

    public function insert_user()
    {
        $data=array(
            'name'=> $this->input->post("name"),
            'email'=>$this->input->post("email"),
            'phone'=>$this->input->post("phone"),
            'password'=>md5($this->input->post("password")),
            'user_type'=>"user",
            'status'=>"active"
        );
        $table="user";
        // print_r($data);
        // die;
        $insert = $this->AdminModel->insert($table,$data);
        if ($insert){
            $this->session->set_flashdata('msg','user added successfully');
            redirect('admin/add_user');
        }else{
            $this->session->set_flashdata('msg','user registration failed');
            redirect('admin/add_user');
        }
    }

    public function user_lists()
    {
        $user_id = $this->session->userdata('admin_id');
        if (empty($user_id)) {
            redirect('admin');
        }
        $user = $this->AdminModel->get_users();
        $data=array('page_title'=>'User List','layout_page'=>'user_lists_page','users'=>$user);
        // print_r($data);
        // die;
        $this->load->view('admin/layout', $data);
    }
    public function edit_user($id)
    {
        $user_id=$id;
        $where= array("id"=>$id,"status"=>"active");
        $table="user";
        $user_data=$this->AdminModel->getdata($where,$table);
        $data=array('page_title'=>'Edit User','layout_page'=>'edit_user','user_data'=>$user_data);
        // print_r($data);
        // die;
        $this->load->view('admin/layout', $data);
    }
    public function update_user()
    {
        $id=$this->input->post("id");
        // echo $id;
        // die;
        $where=array('id'=>$id);
        $data=array(
            'name'=> $this->input->post("name"),
            'email'=>$this->input->post("email"),
            'phone'=>$this->input->post("phone"),
            // 'password'=>md5($this->input->post("password")),
            // 'user_type'=>"user",
            // 'status'=>"active"
        );
        $table="user";
        // print_r($data);
        // die;
        $insert = $this->AdminModel->doupdate($where,$table,$data);;
        if ($insert){
            $this->session->set_flashdata('msg','user Updated successfully');
            redirect('admin/user_lists');
        }else{
            $this->session->set_flashdata('msg','user update failed');
            redirect('admin/user_lists');
        }
    }
    public function delete_user($id)
    {
        $user_id=$id;
        $where=array("id"=>$id);
        $data=array("status"=>"delete");
        $table="user";
        $status=$this->AdminModel->doupdate($where,$table,$data);
        if ($status){
            $this->session->set_flashdata('msg','deleted successfully');
            redirect('admin/user_lists');
        }else{
            $this->session->set_flashdata('msg','delete failed');
            redirect('admin/user_lists');
        }
    }
    public function banner()
    {
        $data=array('page_title'=>'Banner Page','layout_page'=>'banner');
        // print_r($data);
        // die;
        $this->load->view('admin/layout', $data);
    }
    public function banner_list()
    {
        $where=array('status'=>'active');
        $table="banner";
        $banner = $this->AdminModel->getdata($where,$table);
        $data=array('page_title'=>'Banner List','layout_page'=>'banner_list','banner_img'=>$banner);
        $this->load->view('admin/layout', $data);
    }
    public function edit_banner($id)
    {
        $where=array('status'=>'active','id'=>$id);
        $table="banner";
        $banner = $this->AdminModel->getdata($where,$table);
        $data=array('page_title'=>'Edit Banner','layout_page'=>'banner_edit','banner_img'=>$banner);
        $this->load->view('admin/layout', $data);
    }
    public function delete_banner($id)
    {
        $where=array("id"=>$id);
        $data=array("status"=>"delete");
        $table="banner";
        $status=$this->AdminModel->doupdate($where,$table,$data);
        if ($status){
            $this->session->set_flashdata('msg','deleted successfully');
            redirect('admin/user_lists');
        }else{
            $this->session->set_flashdata('msg','delete failed');
            redirect('admin/user_lists');
        }
    }

    public function save_banner($id=null)
    {
        $table="banner";
        $where1=array('id'=>$id);
        // echo $id;
        // die;
        $banner_img = $this->AdminModel->getdata($where1,$table);
        if (!empty($banner_img)){
        foreach($banner_img as $key=>$value) {
            $img=$value['image'];
        }
    }
        // echo $img;
        // die;
             
            // If files are selected to upload 
            if(!empty($_FILES['files']['name']) && count(array_filter($_FILES['files']['name'])) > 0){ 
                $filesCount = count($_FILES['files']['name']); 
                for($i = 0; $i < $filesCount; $i++){ 
                    $_FILES['file']['name']     = $_FILES['files']['name'][$i]; 
                    $_FILES['file']['type']     = $_FILES['files']['type'][$i]; 
                    $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i]; 
                    $_FILES['file']['error']     = $_FILES['files']['error'][$i]; 
                    $_FILES['file']['size']     = $_FILES['files']['size'][$i]; 
                     
                    // File upload configuration 
                    $uploadPath = 'uploads/banner/'; 
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
                 
                $errorUploadType = !empty($errorUploadType)?'<br/>File Type Error: '.trim($errorUploadType, ' | '):''; 
                if(!empty($uploadData)){ 
                    // Insert files data into the database 
                    $img=implode(",", $uploadData);
                    $cover_data=array(
                            'image' => $img,
                            'title_one'=>$this->input->post('title1'),
                            'title_two'=>$this->input->post('title2'),
                            'button_title'=>$this->input->post('b_title'),
                            'button_link'=>$this->input->post('b_link'),
                            'status'=>'active'
                        );
                    if(empty($id)){
                        $this->AdminModel->insert($table,$cover_data);
                        redirect('admin/banner');
                    }else{
                        $this->AdminModel->doupdate($where1,$table,$cover_data);
                        redirect('admin/banner');
                    }
                     
                    // Upload status message 
                    $statusMsg = $insert?'Files uploaded successfully!'.$errorUploadType:'Some problem occurred, please try again.'; 
                }else{ 
                    // $statusMsg = "Sorry, there was an error uploading your file.".$errorUploadType;
                    $cover_data=array(
                            // 'image' => $img,
                            'title_one'=>$this->input->post('title1'),
                            'title_two'=>$this->input->post('title2'),
                            'button_title'=>$this->input->post('b_title'),
                            'button_link'=>$this->input->post('b_link'),
                            'status'=>'active'
                        );
                        if(empty($id)){
                        $this->AdminModel->insert($table,$cover_data);
                        redirect('admin/banner');
                    }else{
                        $this->AdminModel->doupdate($where1,$table,$cover_data);
                        redirect('admin/banner_list');
                    } 
                } 
            }else{ 
                // $statusMsg = 'Please select image files to upload.';
                $cover_data=array(
                            'image' => $img,
                            'title_one'=>$this->input->post('title1'),
                            'title_two'=>$this->input->post('title2'),
                            'button_title'=>$this->input->post('b_title'),
                            'button_link'=>$this->input->post('b_link'),
                            'status'=>'active'
                        ); 
                 $this->AdminModel->doupdate($where1,$table,$cover_data);
                        redirect('admin/banner_list');
            } 
        // } 
        redirect('admin/banner_list');
    } 
 
    public function category($id=null)
    {
        if(empty($id="")){
       $where=array('status'=>"active");
   }else{
    $where=array('status'=>"active",'id'=>$id);
   }
       $table="category";
       $category=$this->AdminModel->getdata($where,$table);
       $data=array('page_title'=>'Category Page','layout_page'=>'category','category'=>$category);
        $this->load->view('admin/layout', $data);
    }

    public function category_list()
    {
         $user_id = $this->session->userdata('admin_id');
        if (empty($user_id)) {
            redirect('admin');
        }
        $where=array('status'=>"active");
        $table="category";
       $category=$this->AdminModel->getdata($where,$table);
       $data=array('page_title'=>'Category List','layout_page'=>'category_list','category'=>$category);
        $this->load->view('admin/layout', $data);
    }
    public function insert_category($id=null)
    {
        $where1=array('id'=>$id);
        $where=array('status'=>'active');
        $table="category";
        $category = $this->AdminModel->getdata($where,$table);
    //     // print_r($banner_img);
    //     // die;
        if (!empty($category)){
        foreach($category as $key=>$value) {
    //         $path = FCPATH . '/uploads/banner/' . $value['image'];
    //         unlink($path);
            $img=$value['icon_image'];
        }
    }
        $cname = $_FILES['userfile']['name'];
        $filename = time() . sha1($cname);


        $config['upload_path'] = "uploads/category/";
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '409600';
        $config['file_name'] = $filename;
        $config['create_thumb'] = TRUE;

        $this->upload->initialize($config);

        if ($this->upload->do_upload('userfile')) {
            $imageDetailArray = $this->upload->data();

            $configer = array(
                'image_library' => 'gd2',
                'source_image' => $imageDetailArray['full_path'],
                'maintain_ratio' => TRUE,
                'width' => 1920,
                'height' => 1080,
            );
            $this->image_lib->clear();
            $this->image_lib->initialize($configer);
            $this->image_lib->resize();

            $image = $imageDetailArray['file_name'];
        }else{
            $image=$img;
        }
            $cover_data = array(
                'icon_image' => $image,
                'cat_name'=>$this->input->post('cat_name'),
                'icon_name'=>$this->input->post('icon_name'),
                'status'=>'active'
            );
            if(empty($id)){
            $this->AdminModel->insert($table,$cover_data);
            redirect('admin/category');
        }else{
            $this->AdminModel->doupdate($where1,$table,$cover_data);
            redirect('admin/category');
        }
    }

    public function delete_category($id)
    {
        $where=array("id"=>$id);
        $data=array("status"=>"delete");
        $table="category";
        $status=$this->AdminModel->doupdate($where,$table,$data);
        if ($status){
            $this->session->set_flashdata('msg','deleted successfully');
            redirect('admin/category');
        }else{
            $this->session->set_flashdata('msg','delete failed');
            redirect('admin/category');
        }
    }

    public function cmspages($pagename = NULL)
    {
        $content = $this->AdminModel->get_page_data($pagename);
        $data=array('page_title'=>$pagename,'layout_page'=>'cmspages','contents'=>$content);
        $this->load->view('admin/layout', $data);
    }

    public function updatepage($pagename = NULL)
    {
        $page_title = $this->input->post('page_title');
        $page_content = $this->input->post('content');

        $val = array("page_content" => $page_content);
        $this->AdminModel->save_page_data($val, $page_title);

        $content = $this->AdminModel->get_page_data($pagename);
        $data=array('page_title'=>$pagename,'layout_page'=>'cmspages','contents'=>$content);
        $this->load->view('admin/layout', $data);
    }

    public function project()
    {
        $where=array("status"!="delete");
        $table="project";
        $data2 = $this->AdminModel->getdata($where,$table);
        $data1=$this->AdminModel->get_countries();
        // print_r($data1);
        // die;
        $data=array('page_title'=>"Project",'layout_page'=>'project','projects'=>$data2,"countries"=>$data1);
        $this->load->view('admin/layout', $data);
    }

    public function insert_project()
    {
        $table="project";
        // $cname = $_FILES['userfile']['name'];
        // $filename = time() . sha1($cname);


        $config['upload_path'] = "uploads/project/";
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '409600';
        // $config['file_name'] = $filename;
        $config['create_thumb'] = TRUE;

        $this->upload->initialize($config);

        if ($this->upload->do_upload('feature_img')) {
            $imageDetailArray = $this->upload->data();

            // $configer = array(
            //     'image_library' => 'gd2',
            //     'source_image' => $imageDetailArray['full_path'],
            //     'maintain_ratio' => TRUE,
            //     'width' => 1920,
            //     'height' => 1080,
            // );
            // $this->image_lib->clear();
            // $this->image_lib->initialize($configer);
            // $this->image_lib->resize();

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
            $data = array(
                'feature_img' => $image,
                'reward_img' => $image1,
                'title'=>$this->input->post('title'),
                'description'=>$this->input->post('description'),
                'short_description'=>$this->input->post('short_description'),
                'category'=>$this->input->post('category'),
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
                'status'=>'active'
            );
            if(empty($id)){
            $this->AdminModel->insert($table,$data);
            redirect('admin/project');
        }else{
            $this->AdminModel->doupdate($where1,$table,$cover_data);
            redirect('admin/project');
        }
        
    }

    public function project_list()
    {
        $user_id = $this->session->userdata('admin_id');
        if (empty($user_id)) {
            redirect('admin');
        }
        $where=array('status!=' => 'delete');
        $table="project";
        $list = $this->AdminModel->getdata($where,$table);
        // print_r($list);
        // die;
        $data=array('page_title'=>'Project List','layout_page'=>'project_list','project'=>$list);
        // print_r($data);
        // die;
        $this->load->view('admin/layout', $data);
    }

    public function delete_project($id)
    {
        $where=array("id"=>$id);
        $data=array("status"=>"delete");
        $table="project";
        $status=$this->AdminModel->doupdate($where,$table,$data);
        if ($status){
            $this->session->set_flashdata('msg','deleted successfully');
            redirect('admin/project_list');
        }else{
            $this->session->set_flashdata('msg','delete failed');
            redirect('admin/project_list');
        }
    }
    public function edit_project($id)
    {
        $where=array('id'=>$id);
        $table="project";
        $did=$this->AdminModel->getdata($where,$table);
        $data1=$this->AdminModel->get_countries();
        $data=array('page_title'=>'Project List','layout_page'=>'edit_project','project'=>$did,"countries"=>$data1);
        // print_r($data);
        // die;
        $this->load->view('admin/layout', $data);
    }
    public function update_project()
    {
        $id=$this->input->post('id');
        $table="project";
        $where=array('id'=>$id);
        $did=$this->AdminModel->getdata($where,$table);
        // print_r($did);
        // die;
        if (!empty($did)){
        foreach($did as $key=>$value) {
            $image0=$value['feature_img'];
            $image01=$value['reward_img'];

        }
    }

        $config['upload_path'] = "uploads/project/";
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '409600';
        // $config['file_name'] = $filename;
        $config['create_thumb'] = TRUE;

        $this->upload->initialize($config);

        if ($this->upload->do_upload('feature_img')) {
            $imageDetailArray = $this->upload->data();

            // $configer = array(
            //     'image_library' => 'gd2',
            //     'source_image' => $imageDetailArray['full_path'],
            //     'maintain_ratio' => TRUE,
            //     'width' => 1920,
            //     'height' => 1080,
            // );
            // $this->image_lib->clear();
            // $this->image_lib->initialize($configer);
            // $this->image_lib->resize();

            $image = $imageDetailArray['file_name'];
        }else{
            $image=$image0;
        }
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
                'category'=>$this->input->post('category'),
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
                'status'=>'active'
            );
            if(empty($id)){
            $this->AdminModel->insert($table,$data);
            redirect('admin/project');
        }else{
            $this->AdminModel->doupdate($where,$table,$data);
            redirect('admin/project');
        }
    }

    public function faq()
    {
        $user_id = $this->session->userdata('admin_id');
        if (empty($user_id)) {
            redirect('admin');
        }
        $data=array('page_title'=>'Add New Faq','layout_page'=>'faq');
        $this->load->view('admin/layout',$data);
    }

    public function insert_faq()
    {
         $data=array(
            'ques'=> $this->input->post("question"),
            'ans'=>$this->input->post("answer"),
            'status'=>"active"
        );
        $table="faq";
        $insert = $this->AdminModel->insert($table,$data);
        if ($insert){
            $this->session->set_flashdata('msg','Faq added successfully');
            redirect('admin/faq_list');
        }else{
            $this->session->set_flashdata('msg','failed! pls try again');
            redirect('admin/faq_list');
        }
    }
    public function faq_list()
    {
        $where=array('status'=>'active');
        $table="faq";
        $banner = $this->AdminModel->getdata($where,$table);
        $data=array('page_title'=>'FAQ List','layout_page'=>'faq_list','faq'=>$banner);
        $this->load->view('admin/layout', $data);
    }
    public function edit_faq($id)
    {
        $where=array('status'=>'active','id'=>$id);
        $table="faq";
        $faq = $this->AdminModel->getdata($where,$table);
        $data=array('page_title'=>'Edit faq','layout_page'=>'edit_faq','faq_data'=>$faq);
        $this->load->view('admin/layout', $data);
    }
    public function update_faq()
    {
        $id=$this->input->post("id");
        $where=array('id'=>$id);
        $data=array(
            'ques'=> $this->input->post("question"),
            'ans'=>$this->input->post("answer"),
        );
        $table="faq";
        // print_r($data);
        // die;
        $insert = $this->AdminModel->doupdate($where,$table,$data);;
        if ($insert){
            $this->session->set_flashdata('msg','user Updated successfully');
            redirect('admin/faq_list');
        }else{
            $this->session->set_flashdata('msg','user update failed');
            redirect('admin/faq_list');
        }
    }
    public function delete_faq($id)
    {
        $where=array("id"=>$id);
        $data=array("status"=>"delete");
        $table="faq";
        $status=$this->AdminModel->doupdate($where,$table,$data);
        if ($status){
            $this->session->set_flashdata('msg','deleted successfully');
            redirect('admin/faq_list');
        }else{
            $this->session->set_flashdata('msg','delete failed');
            redirect('admin/faq_list');
        }
    }
}
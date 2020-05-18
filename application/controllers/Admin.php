<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
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
            $this->session->set_flashdata('msg', 'Username/Password is incorrect');
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
        $data1=$this->AdminModel->get_countries();
        $data=array('page_title'=>'Add New User','layout_page'=>'add_user','countries'=>$data1);
        $this->load->view('admin/layout',$data);
    }

    public function insert_user()
    {

        $config['upload_path'] = "uploads/users/";
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '409600';
        // $config['file_name'] = $filename;
        $config['create_thumb'] = TRUE;

        $this->upload->initialize($config);

        if ($this->upload->do_upload('pic')) {
            $imageDetailArray = $this->upload->data();

            $image = $imageDetailArray['file_name'];
        }else{
            $image="N/A";
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
            'password'=>md5($this->input->post("psw")),
            'address'=> $this->input->post("address"),
            'address2'=> $this->input->post("address2"),
            'country'=> $this->input->post("country"),
            'state'=> $this->input->post("state"),
            'city'=> $this->input->post("city"),
            'facebook'=> $this->input->post("fb_link"),
            'twitter'=> $this->input->post("tw_link"),
            'pinterest'=> $this->input->post("pt_link"),
            'user_type'=>"user",
            'status'=>"Pending"
        );
        $table="user";
        // print_r($data);
        // die;
        $insert = $this->AdminModel->insert($table,$data);
        if ($insert){
            $this->session->set_flashdata('success','user added successfully');
            redirect('admin/add_user');
        }else{
            $this->session->set_flashdata('error','user registration failed');
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
          'password'=>md5($this->input->post("psw")),
          'address'=> $this->input->post("address"),
          'address2'=> $this->input->post("address2"),
          'country'=> $this->input->post("country"),
          'state'=> $this->input->post("state"),
          'city'=> $this->input->post("city"),
          'facebook'=> $this->input->post("fb_link"),
          'twitter'=> $this->input->post("tw_link"),
          'pinterest'=> $this->input->post("pt_link")
        );
        $table="user";
        // print_r($data);
        // die;
        $insert = $this->AdminModel->doupdate($where,$table,$data);
        if ($insert){
            $this->session->set_flashdata('success','user Updated successfully');
            redirect('admin/user_lists');
        }else{
            $this->session->set_flashdata('error','user update failed');
            redirect('admin/user_lists');
        }
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
            $this->session->set_flashdata('success','deleted successfully');
            redirect('admin/user_lists');
        }else{
            $this->session->set_flashdata('error','delete failed');
            redirect('admin/user_lists');
        }
    }
    public function user_inactive($id)
    {
        $where=array("id"=>$id);
        $data=array("status"=>"Inactive");
        $status=$this->AdminModel->doupdate($where,'user',$data);
        if ($status){
            $this->session->set_flashdata('success','User is Inactive');
            redirect('admin/user_lists');
        }else{
            $this->session->set_flashdata('error','delete failed');
            redirect('admin/user_lists');
        }
    }
    public function user_active($id)
    {
        $where=array("id"=>$id);
        $data=array("status"=>"active");
        $status=$this->AdminModel->doupdate($where,'user',$data);
        if ($status){
            $this->session->set_flashdata('success','User is Active');
            redirect('admin/user_lists');
        }else{
            $this->session->set_flashdata('error','delete failed');
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
            $this->session->set_flashdata('success','deleted successfully');
            redirect('admin/banner_list');
        }else{
            $this->session->set_flashdata('error','delete failed');
            redirect('admin/banner_list');
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
                        $this->session->set_flashdata('success','New Banner Added Successfully');
                        redirect('admin/banner');
                    }else{
                        $this->AdminModel->doupdate($where1,$table,$cover_data);
                        $this->session->set_flashdata('success','Banner Updated Successfully');
                        redirect('admin/banner_list');
                    }
                }else{
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
                        $this->session->set_flashdata('success','New Banner Added Successfully');
                        redirect('admin/banner');
                    }else{
                        $this->AdminModel->doupdate($where1,$table,$cover_data);
                        $this->session->set_flashdata('success','Banner Updated Successfully');
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
                 $this->session->set_flashdata('success','Banner Updated Successfully');
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
    public function edit_category($id)
    {
        $where=array('status'=>'active','id'=>$id);
        $table="category";
        $cat = $this->AdminModel->getdata($where,$table);
        $data=array('page_title'=>'Edit Category','layout_page'=>'edit_category','category'=>$cat);
        $this->load->view('admin/layout', $data);
    }
    public function insert_category($id=null)
    {
        $where1=array('id'=>$id);
        $where=array('status'=>'active');
        $table="category";
        $category = $this->AdminModel->getdata($where,$table);
            $cover_data = array(
                'cat_name'=>$this->input->post('cat_name'),
                'icon_name'=>$this->input->post('icon_name'),
                'cat_description'=>$this->input->post('cat_description'),
                'status'=>'active'
            );
            if(empty($id)){
            $this->AdminModel->insert($table,$cover_data);
            $this->session->set_flashdata('success','New Category Added Successfully');
            redirect('admin/category');
        }else{
            $this->AdminModel->doupdate($where1,$table,$cover_data);
            $this->session->set_flashdata('success','Category Updated Successfully');
            redirect('admin/category_list');
        }
    }

    public function delete_category($id)
    {
        $where=array("id"=>$id);
        $data=array("status"=>"delete");
        $table="category";
        $status=$this->AdminModel->doupdate($where,$table,$data);
        if ($status){
            $this->session->set_flashdata('success','Deleted Successfully');
            redirect('admin/category_list');
        }else{
            $this->session->set_flashdata('error','Delete Failed! Pls Try Again');
            redirect('admin/category_list');
        }
    }
    public function cms($pageid = NULL)
    {
        $content=null;
        if($pageid){
          $content = $this->AdminModel->_get('cmspages',['id'=>$pageid]);
          $content=$content[0];
        }

        $data=array('page_title'=>"CMS List",'layout_page'=>'cmspages','content'=>$content);
        $this->load->view('admin/layout', $data);
    }

    public function cmslist()
    {
        $content = $this->AdminModel->_get('cmspages');
        $data=array('page_title'=>"CMS List",'layout_page'=>'cmslist','content'=>$content);
        $this->load->view('admin/layout', $data);
    }

    public function updatecms()
    {
        $data = [
          'page_title'=>$this->input->post('page_title'),
          'page_content' => $this->input->post('content'),
          'display_name' => $this->input->post('display_name')
        ];
        $id = $this->input->post('id');
        if(isset($id) && $id>0){
          $this->AdminModel->_set_update('cmspages', $data,['id'=>$id]);
        }else{
          $this->AdminModel->_set_insert('cmspages', $data);
        }
        $this->session->set_flashdata(['msg'=> 'CMS updated successfully.','type'=>'success']);
				redirect('admin/cmslist');
    }

    public function cmsdelete($id=null){
      $this->AdminModel->_set_delete('cmspages', ['id'=>$id]);
      $this->session->set_flashdata(['msg'=> 'CMS deleted successfully.','type'=>'success']);
      redirect('admin/cmslist');
    }

    public function project()
    {
        $where=array("status"=>"active");
        $table="project";
        $data2 = $this->AdminModel->getdata($where,$table);
        $where2=array('status'=>'active');
        $category=$this->AdminModel->getdata($where,'category');
        $data1=$this->AdminModel->get_countries();
        // print_r($data1);
        // die;
        $data=array('page_title'=>"Project",'layout_page'=>'project','projects'=>$data2,"countries"=>$data1,"category"=>$category);
        $this->load->view('admin/layout', $data);
    }

    public function insert_project()
    {
        $table="project";
        $der=$this->input->post('category');
        $der1=implode(",",$der);
        // $cname = $_FILES['userfile']['name'];
        // $filename = time() . sha1($cname);
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
        // $config['file_name'] = $filename;
        $config['create_thumb'] = TRUE;

        $this->upload->initialize($config);

        // if ($this->upload->do_upload('feature_img')) {
        //     $imageDetailArray = $this->upload->data();
        //
        //     $image = $imageDetailArray['file_name'];
        // }else{
        //     $image="N/A";
        // }
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
                'contributor_table'=>$this->input->post('contributor_table'),
                'contributor_anonymity'=>$this->input->post('contributor_anonymity'),
                'del_month'=>$this->input->post('del_month'),
                'del_year'=>$this->input->post('del_year'),
                'quantity'=>$this->input->post('quantity'),
                'status'=>'Pending'
            );
            if(empty($id)){
            $this->AdminModel->insert($table,$data);
            $this->session->set_flashdata('success','New Project Added Successfully');
            redirect('admin/project_list');
        }else{
            $this->AdminModel->doupdate($where1,$table,$cover_data);
            $this->session->set_flashdata('success','Project Updated Successfully');
            redirect('admin/project_list');
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
            $this->session->set_flashdata('success','Deleted Successfully');
            redirect('admin/project_list');
        }else{
            $this->session->set_flashdata('error','Deletion Failed');
            redirect('admin/project_list');
        }
    }
    public function project_inactive($id)
    {
        $where=array("id"=>$id);
        $data=array("status"=>"Inactive");
        $status=$this->AdminModel->doupdate($where,'project',$data);
        if ($status){
            $this->session->set_flashdata('success','Project is Inactive');
            redirect('admin/project_list');
        }else{
            $this->session->set_flashdata('error','failed, pls try again');
            redirect('admin/project_list');
        }
    }
    public function projec_active($id)
    {
        $where=array("id"=>$id);
        $data=array("status"=>"active");
        $status=$this->AdminModel->doupdate($where,'project',$data);
        if ($status){
            $this->session->set_flashdata('success','Project is Active');
            redirect('admin/project_list');
        }else{
            $this->session->set_flashdata('error',' failed,pls try again');
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
                'featured'=>$this->input->post('featured_project'),
                // 'status'=>'active'
            );
            // print_r($data);
            // die;
            if(empty($id)){
            $this->AdminModel->insert($table,$data);
            $this->session->set_flashdata('success','New Project Added Successfully');
            redirect('admin/project_list');
        }else{
            $this->AdminModel->doupdate($where,$table,$data);
            $this->session->set_flashdata('success','Project Updated Successfully');
            redirect('admin/project_list');
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
            $this->session->set_flashdata('success','FAQ added successfully');
            redirect('admin/faq_list');
        }else{
            $this->session->set_flashdata('error','FAQ! pls try again');
            redirect('admin/faq_list');
        }
    }
    public function faq_list()
    {
        $where=array('status!='=>'delete');
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
            $this->session->set_flashdata('success','FAQ Updated successfully');
            redirect('admin/faq_list');
        }else{
            $this->session->set_flashdata('error','FAQ update failed');
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
            $this->session->set_flashdata('success','FAQ deleted successfully');
            redirect('admin/faq_list');
        }else{
            $this->session->set_flashdata('error','FAQ delete failed');
            redirect('admin/faq_list');
        }
    }
    public function faq_inactive($id)
    {
        $where=array("id"=>$id);
        $data=array("status"=>"inactive");
        $status=$this->AdminModel->doupdate($where,'faq',$data);
        if ($status){
            $this->session->set_flashdata('success','FAQ is Inactive');
            redirect('admin/faq_list');
        }else{
            $this->session->set_flashdata('error','delete failed');
            redirect('admin/faq_list');
        }
    }
    public function faq_active($id)
    {
        $where=array("id"=>$id);
        $data=array("status"=>"active");
        $status=$this->AdminModel->doupdate($where,'faq',$data);
        if ($status){
            $this->session->set_flashdata('success','FAQ is Active');
            redirect('admin/faq_list');
        }else{
            $this->session->set_flashdata('error','delete failed');
            redirect('admin/faq_list');
        }
    }

       private function success($data) {
        die(json_encode(array(
            "status" => "success",
            "data" => $data,
        )));
    }

    private function error($data) {
        die(json_encode(array(
            "status" => "failed",
            "data" => $data,
        )));
    }

    public function get_state_by_country_id()
    {
        $country_id=$this->input->post("country_id");
        $where=array("country_id="=>$country_id);
        $data=$this->AdminModel->doGetalldata($where,"states");
        if($data)
        {
            $this->success($data);
        }else{
            $this->error("No data found");
        }
    }

    public function get_city_by_state_id()
    {
        $state_id=$this->input->post("state_id");
        $where=array("state_id="=>$state_id);
        $data=$this->AdminModel->doGetalldata($where,"cities");
        if($data)
        {
            $this->success($data);
        }else{
            $this->error("No data found");
        }
    }
    public function footer_feature()
    {
        $user_id = $this->session->userdata('admin_id');
        if (empty($user_id)) {
            redirect('admin');
        }
        $where=array('status'=>'active');
        $data = $this->AdminModel->getdata($where,"footer_feature");
        $data=array('page_title'=>'Footer Feature','layout_page'=>'footer_feature','feature'=>$data);
        $this->load->view('admin/layout',$data);
    }
    public function Insert_footer_feature()
    {
      $id=$this->input->post('id');
      if(!empty($id)){
     $where=array('status'=>"active",'id'=>$id);
     $data = $this->AdminModel->getdata($where,"footer_feature");
     $img=$data[0]['image'];
     $img1=$data[0]['your_story_image'];
     $config['upload_path'] = "uploads/banner/";
     $config['allowed_types'] = 'gif|jpg|png|jpeg';
     $config['max_size'] = '409600';
     // $config['file_name'] = $filename;
     $config['create_thumb'] = TRUE;

     $this->upload->initialize($config);

     if ($this->upload->do_upload('p_image')) {
         $imageDetailArray = $this->upload->data();

         $image = $imageDetailArray['file_name'];
     }else{
         $image=$img;
     }
     if ($this->upload->do_upload('ys_image')) {
         $imageDetailArray = $this->upload->data();

         $ys_image = $imageDetailArray['file_name'];
     }else{
         $ys_image=$img1;
     }
 }else{
      $config['upload_path'] = "uploads/banner/";
      $config['allowed_types'] = 'gif|jpg|png|jpeg';
      $config['max_size'] = '409600';
      // $config['file_name'] = $filename;
      $config['create_thumb'] = TRUE;

      $this->upload->initialize($config);

      if ($this->upload->do_upload('p_image')) {
          $imageDetailArray = $this->upload->data();

          $image = $imageDetailArray['file_name'];
      }else{
          $image="N/A";
      }
      if ($this->upload->do_upload('ys_image')) {
          $imageDetailArray = $this->upload->data();

          $ys_image = $imageDetailArray['file_name'];
      }else{
          $ys_image="N/A";
      }
    }
         $data=array(
            'title'=> $this->input->post("title"),
            'subtitle'=>$this->input->post("s_title"),
            'your_story_image'=>$ys_image,
            'image'=>$image,
            'p_1'=>$this->input->post("p_1"),
            'p_2'=>$this->input->post("p_2"),
            'p_3'=>$this->input->post("p_3"),
            'p_4'=>$this->input->post("p_4"),
            'p_5'=>$this->input->post("p_5"),
            'title2'=>$this->input->post("title_2"),
            'status'=>"active"
        );
        if(!empty($id)){
          $where=array('id'=>$id,'status'=>'active');
          $insert=$this->AdminModel->doupdate($where,'footer_feature',$data);
        }else{
        $insert = $this->AdminModel->insert("footer_feature",$data);
      }
        if ($insert){
            $this->session->set_flashdata('success','Feature added successfully');
            redirect('admin/footer_feature');
        }else{
            $this->session->set_flashdata('error','failed! pls try again');
            redirect('admin/footer_feature');
        }
    }

    public function add_test()
    {
      $user_id = $this->session->userdata('admin_id');
      if (empty($user_id)) {
          redirect('admin');
      }
      $data=array('page_title'=>'Add Testimonial','layout_page'=>'testimonial');
      $this->load->view('admin/layout',$data);
    }
    public function insert_test()
    {
      $config['upload_path'] = "uploads/banner/";
      $config['allowed_types'] = 'gif|jpg|png|jpeg';
      $config['max_size'] = '409600';
      $config['create_thumb'] = TRUE;

      $this->upload->initialize($config);

      if ($this->upload->do_upload('test_image')) {
          $imageDetailArray = $this->upload->data();

          $image = $imageDetailArray['file_name'];
      }else{
          $image="N/A";
      }
      $data=array(
         'detail'=> $this->input->post("test_detail"),
         'name'=>$this->input->post("c_name"),
         'designation'=>$this->input->post("desig"),
         'image'=>$image,
         'status'=>"active"
     );
     $insert = $this->AdminModel->insert("testimonial",$data);
     if ($insert){
         $this->session->set_flashdata('success','Testimonial added successfully');
         redirect('admin/test_list');
     }else{
         $this->session->set_flashdata('error','failed! pls try again');
         redirect('admin/test_list');
     }
    }
    public function test_list()
    {
        $user_id = $this->session->userdata('admin_id');
        if (empty($user_id)) {
            redirect('admin');
        }
        $where=array("status!="=>"delete");
       $data=$this->AdminModel->getdata($where,"testimonial");
       $data=array('page_title'=>'Testimonials List','layout_page'=>'test_list','testimonials'=>$data);
        $this->load->view('admin/layout', $data);
    }
    public function edit_test($id)
    {
      $where=array('status!='=>'delete','id'=>$id);
      $data = $this->AdminModel->getdata($where,"testimonial");
      $data=array('page_title'=>'Edit Testimonial','layout_page'=>'edit_test','test'=>$data);
      $this->load->view('admin/layout', $data);
    }
    public function update_test()
    {
      $id=$this->input->post('id');
      if(!empty($id))
      {
        $where=array('status'=>"active",'id'=>$id);
        $data = $this->AdminModel->getdata($where,"testimonial");
        $img=$data[0]['image'];
        $config['upload_path'] = "uploads/banner/";
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '409600';
        // $config['file_name'] = $filename;
        $config['create_thumb'] = TRUE;

        $this->upload->initialize($config);

        if ($this->upload->do_upload('test_image')) {
            $imageDetailArray = $this->upload->data();

            $image = $imageDetailArray['file_name'];
        }else{
            $image=$img;
        }
      }
      $data=array(
         'detail'=> $this->input->post("test_detail"),
         'name'=>$this->input->post("c_name"),
         'designation'=>$this->input->post("desig"),
         'image'=>$image,
         'status'=>"active"
     );
       $update=$this->AdminModel->doupdate($where,'testimonial',$data);
       if ($update){
           $this->session->set_flashdata('success','Testimonial Updated successfully');
           redirect('admin/test_list');
       }else{
           $this->session->set_flashdata('error','failed! pls try again');
           redirect('admin/test_list');
       }
    }

    public function delete_test($id)
    {
        $where=array("id"=>$id);
        $data=array("status"=>"delete");
        $status=$this->AdminModel->doupdate($where,'testimonial',$data);
        if ($status){
            $this->session->set_flashdata('success','deleted successfully');
            redirect('admin/test_list');
        }else{
            $this->session->set_flashdata('error','delete failed');
            redirect('admin/test_list');
        }
    }
    public function test_inactive($id)
    {
        $where=array("id"=>$id);
        $data=array("status"=>"inactive");
        $status=$this->AdminModel->doupdate($where,'testimonial',$data);
        if ($status){
            $this->session->set_flashdata('success','Testimonial is Inactive');
            redirect('admin/test_list');
        }else{
            $this->session->set_flashdata('error','delete failed');
            redirect('admin/test_list');
        }
    }
    public function test_active($id)
    {
        $where=array("id"=>$id);
        $data=array("status"=>"active");
        $status=$this->AdminModel->doupdate($where,'testimonial',$data);
        if ($status){
            $this->session->set_flashdata('success','Testimonial is Active');
            redirect('admin/test_list');
        }else{
            $this->session->set_flashdata('error','delete failed');
            redirect('admin/test_list');
        }
    }
    public function about()
    {
        $user_id = $this->session->userdata('admin_id');
        if (empty($user_id)) {
            redirect('admin');
        }
        $where=array('status'=>'active');
        $data = $this->AdminModel->getdata($where,"about");
        $data=array('page_title'=>'About Us','layout_page'=>'about','feature'=>$data);
        $this->load->view('admin/layout',$data);
    }
    public function Insert_about()
    {
      $id=$this->input->post('id');
      if(!empty($id)){
     $where=array('status'=>"active",'id'=>$id);
     $data = $this->AdminModel->getdata($where,"about");
     $img=$data[0]['image'];
     $config['upload_path'] = "uploads/banner/";
     $config['allowed_types'] = 'gif|jpg|png|jpeg';
     $config['max_size'] = '409600';
     // $config['file_name'] = $filename;
     $config['create_thumb'] = TRUE;

     $this->upload->initialize($config);

     if ($this->upload->do_upload('p_image')) {
         $imageDetailArray = $this->upload->data();

         $image = $imageDetailArray['file_name'];
     }else{
         $image=$img;
     }
 }else{
      $config['upload_path'] = "uploads/banner/";
      $config['allowed_types'] = 'gif|jpg|png|jpeg';
      $config['max_size'] = '409600';
      // $config['file_name'] = $filename;
      $config['create_thumb'] = TRUE;

      $this->upload->initialize($config);

      if ($this->upload->do_upload('p_image')) {
          $imageDetailArray = $this->upload->data();

          $image = $imageDetailArray['file_name'];
      }else{
          $image="N/A";
      }
    }
         $data=array(
            'title'=> $this->input->post("title"),
            'subtitle'=>$this->input->post("s_title"),
            'image'=>$image,
            'p_1'=>$this->input->post("p_1"),
            'p_2'=>$this->input->post("p_2"),
            'p_3'=>$this->input->post("p_3"),
            'p_4'=>$this->input->post("p_4"),
            'p_5'=>$this->input->post("p_5"),
            'title2'=>$this->input->post("title_2"),
            'status'=>"active"
        );
        if(!empty($id)){
          $where=array('id'=>$id,'status'=>'active');
          $insert=$this->AdminModel->doupdate($where,'about',$data);
        }else{
        $insert = $this->AdminModel->insert("about",$data);
      }
        if ($insert){
            $this->session->set_flashdata('success','About us Updated successfully');
            redirect('admin/about');
        }else{
            $this->session->set_flashdata('error','failed! pls try again');
            redirect('admin/about');
        }
    }
    public function funding_team()
    {
      $user_id = $this->session->userdata('admin_id');
      if (empty($user_id)) {
          redirect('admin');
      }
      $data=array('page_title'=>'Funding Team','layout_page'=>'funding_team');
      $this->load->view('admin/layout',$data);
    }
    public function insert_funding_team()
    {
      $config['upload_path'] = "uploads/banner/";
      $config['allowed_types'] = 'gif|jpg|png|jpeg';
      $config['max_size'] = '409600';
      $config['create_thumb'] = TRUE;

      $this->upload->initialize($config);

      if ($this->upload->do_upload('team_image')) {
          $imageDetailArray = $this->upload->data();

          $image = $imageDetailArray['file_name'];
      }else{
          $image="N/A";
      }
      $data=array(
         'name'=> $this->input->post("name"),
         'designation'=>$this->input->post("desig"),
         'fb_link'=>$this->input->post("fb_link"),
         'tw_link'=>$this->input->post("tw_link"),
         'ln_link'=>$this->input->post("ln_link"),
         'image'=>$image,
         'status'=>"active"
     );
     $insert = $this->AdminModel->insert("funding_team",$data);
     if ($insert){
         $this->session->set_flashdata('success','Team added successfully');
         redirect('admin/funding_team_list');
     }else{
         $this->session->set_flashdata('error','failed! pls try again');
         redirect('admin/funding_team_list');
     }
    }
    public function funding_team_list()
    {
      $user_id = $this->session->userdata('admin_id');
      if (empty($user_id)) {
          redirect('admin');
      }
      $where=array("status!="=>"delete");
     $data=$this->AdminModel->getdata($where,"funding_team");
     $data=array('page_title'=>'Funding Team List','layout_page'=>'funding_team_list','team'=>$data);
      $this->load->view('admin/layout', $data);
    }
    public function edit_team($id)
    {
      $where=array('status!='=>'delete','id'=>$id);
      $data = $this->AdminModel->getdata($where,"funding_team");
      $data=array('page_title'=>'Edit Team Profile','layout_page'=>'edit_team','team'=>$data);
      $this->load->view('admin/layout', $data);
    }
    public function update_funding_team()
    {
      $id=$this->input->post('id');
      if(!empty($id))
      {
        $where=array('status'=>"active",'id'=>$id);
        $data = $this->AdminModel->getdata($where,"funding_team");
        $img=$data[0]['image'];
        $config['upload_path'] = "uploads/banner/";
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '409600';
        // $config['file_name'] = $filename;
        $config['create_thumb'] = TRUE;

        $this->upload->initialize($config);

        if ($this->upload->do_upload('team_image')) {
            $imageDetailArray = $this->upload->data();

            $image = $imageDetailArray['file_name'];
        }else{
            $image=$img;
        }
      }
      $data=array(
        'name'=> $this->input->post("name"),
        'designation'=>$this->input->post("desig"),
        'fb_link'=>$this->input->post("fb_link"),
        'tw_link'=>$this->input->post("tw_link"),
        'ln_link'=>$this->input->post("ln_link"),
        'image'=>$image,
        'status'=>"active"
     );
       $update=$this->AdminModel->doupdate($where,'funding_team',$data);
       if ($update){
           $this->session->set_flashdata('success','Team Profile Updated successfully');
           redirect('admin/funding_team_list');
       }else{
           $this->session->set_flashdata('error','failed! pls try again');
           redirect('admin/funding_team_list');
       }
    }
    public function delete_team($id)
    {
        $where=array("id"=>$id);
        $data=array("status"=>"delete");
        $status=$this->AdminModel->doupdate($where,'funding_team',$data);
        if ($status){
            $this->session->set_flashdata('success','deleted successfully');
            redirect('admin/funding_team_list');
        }else{
            $this->session->set_flashdata('error','delete failed');
            redirect('admin/funding_team_list');
        }
    }
    public function team_inactive($id)
    {
        $where=array("id"=>$id);
        $data=array("status"=>"inactive");
        $status=$this->AdminModel->doupdate($where,'funding_team',$data);
        if ($status){
            $this->session->set_flashdata('success','Profile is Inactive');
            redirect('admin/funding_team_list');
        }else{
            $this->session->set_flashdata('error','delete failed');
            redirect('admin/funding_team_list');
        }
    }
    public function team_active($id)
    {
        $where=array("id"=>$id);
        $data=array("status"=>"active");
        $status=$this->AdminModel->doupdate($where,'funding_team',$data);
        if ($status){
            $this->session->set_flashdata('success','Profile is Active');
            redirect('admin/funding_team_list');
        }else{
            $this->session->set_flashdata('error','delete failed');
            redirect('admin/funding_team_list');
        }
    }
    public function title_manage()
    {
      $user_id = $this->session->userdata('admin_id');
      if (empty($user_id)) {
          redirect('admin');
      }
      $where=array('status'=>'active');
      $data = $this->AdminModel->getdata($where,"title_management");
      $data=array('page_title'=>'Home Page Title Management','layout_page'=>'title_management','feature'=>$data);
      $this->load->view('admin/layout',$data);
    }
    public function Insert_title_manage()
    {
      $id=$this->input->post('id');
         $data=array(
            't_1'=> $this->input->post("t_1"),
            'des_1'=>$this->input->post("des_1"),
            't_2'=>$this->input->post("t_2"),
            'des_2'=>$this->input->post("des_2"),
            't_3'=>$this->input->post("t_3"),
            'des_3'=>$this->input->post("des_3"),
            't_4'=>$this->input->post("t_4"),
            'des_4'=>$this->input->post("des_4"),
            't_5'=>$this->input->post("t_5"),
            'des_5'=>$this->input->post("des_5"),
            'footer_b_title'=>$this->input->post("footer_b_title"),
            'footer_b_des'=>$this->input->post("footer_b_des"),
            'footer_b_link'=>$this->input->post("footer_b_link"),
            'footer_b_button'=>$this->input->post("footer_b_button"),
            'status'=>"active"
        );
        if(!empty($id)){
          $where=array('id'=>$id,'status'=>'active');
          $insert=$this->AdminModel->doupdate($where,'title_management',$data);
        }else{
        $insert = $this->AdminModel->insert("title_management",$data);
      }
        if ($insert){
            $this->session->set_flashdata('success','Updated successfully');
            redirect('admin/title_manage');
        }else{
            $this->session->set_flashdata('error','Update failed! pls try again');
            redirect('admin/title_manage');
        }
    }

    public function footer_question($id=null)
    {
        $user_id = $this->session->userdata('admin_id');
        if (empty($user_id)) {
            redirect('admin');
        }
        $where=array('status'=>'active','id'=>$id);
        $data = $this->AdminModel->getdata($where,"footer_question");
        $data=array('page_title'=>'Footer Question','layout_page'=>'footer_question','feature'=>$data);
        $this->load->view('admin/layout',$data);
    }
    public function footer_question_list()
    {
      $user_id = $this->session->userdata('admin_id');
      if (empty($user_id)) {
          redirect('admin');
      }
      $where=array('status!='=>'delete');
      $data = $this->AdminModel->getdata($where,"footer_question");
      $data=array('page_title'=>'Footer Question','layout_page'=>'footer_question_list','question'=>$data);
      $this->load->view('admin/layout',$data);
    }
    public function Insert_footer_question()
    {
      $id=$this->input->post('id');
         $data=array(
            'title'=> $this->input->post("title"),
            'description'=>$this->input->post("desc"),
            'status'=>'active',
        );
        if(!empty($id)){
          $where=array('id'=>$id,'status'=>'active');
          $insert=$this->AdminModel->doupdate($where,'footer_question',$data);
        }else{
        $insert = $this->AdminModel->insert("footer_question",$data);
      }
        if ($insert){
            $this->session->set_flashdata('success','Submitted successfully');
            redirect('admin/footer_question_list');
        }else{
            $this->session->set_flashdata('error','failed! pls try again');
            redirect('admin/footer_question_list');
        }
    }
    public function delete_quest($id)
    {
        $where=array("id"=>$id);
        $data=array("status"=>"delete");
        $status=$this->AdminModel->doupdate($where,'footer_question',$data);
        if ($status){
            $this->session->set_flashdata('success','deleted successfully');
            redirect('admin/footer_question_list');
        }else{
            $this->session->set_flashdata('error','delete failed');
            redirect('admin/footer_question_list');
        }
    }
    public function quest_inactive($id)
    {
        $where=array("id"=>$id);
        $data=array("status"=>"inactive");
        $status=$this->AdminModel->doupdate($where,'footer_question',$data);
        if ($status){
            $this->session->set_flashdata('success','Question is Inactive');
            redirect('admin/footer_question_list');
        }else{
            $this->session->set_flashdata('error','delete failed');
            redirect('admin/footer_question_list');
        }
    }
    public function quest_active($id)
    {
        $where=array("id"=>$id);
        $data=array("status"=>"active");
        $status=$this->AdminModel->doupdate($where,'footer_question',$data);
        if ($status){
            $this->session->set_flashdata('success','Question is Active');
            redirect('admin/footer_question_list');
        }else{
            $this->session->set_flashdata('error','delete failed');
            redirect('admin/footer_question_list');
        }
    }

    public function about_bottom()
    {
        $user_id = $this->session->userdata('admin_id');
        if (empty($user_id)) {
            redirect('admin');
        }
        $where=array('status'=>'active');
        $data = $this->AdminModel->getdata($where,"about_bottom");
        $data=array('page_title'=>'About Us Bottom Section','layout_page'=>'about_bottom','feature'=>$data);
        $this->load->view('admin/layout',$data);
    }
    public function Insert_about_bottom()
    {
      $id=$this->input->post('id');
      if(!empty($id)){
     $where=array('status'=>"active",'id'=>$id);
     $data = $this->AdminModel->getdata($where,"about_bottom");
     $img=$data[0]['image'];
     $config['upload_path'] = "uploads/banner/";
     $config['allowed_types'] = 'gif|jpg|png|jpeg';
     $config['max_size'] = '409600';
     // $config['file_name'] = $filename;
     $config['create_thumb'] = TRUE;

     $this->upload->initialize($config);

     if ($this->upload->do_upload('p_image')) {
         $imageDetailArray = $this->upload->data();

         $image = $imageDetailArray['file_name'];
     }else{
         $image=$img;
     }
 }else{
      $config['upload_path'] = "uploads/banner/";
      $config['allowed_types'] = 'gif|jpg|png|jpeg';
      $config['max_size'] = '409600';
      // $config['file_name'] = $filename;
      $config['create_thumb'] = TRUE;

      $this->upload->initialize($config);

      if ($this->upload->do_upload('p_image')) {
          $imageDetailArray = $this->upload->data();

          $image = $imageDetailArray['file_name'];
      }else{
          $image="N/A";
      }
    }
         $data=array(
            'title'=> $this->input->post("title"),
            'subtitle'=>$this->input->post("s_title"),
            'image'=>$image,
            'p_1'=>$this->input->post("p_1"),
            'p_2'=>$this->input->post("p_2"),
            'p_3'=>$this->input->post("p_3"),
            'p_4'=>$this->input->post("p_4"),
            'p_5'=>$this->input->post("p_5"),
            'title2'=>$this->input->post("title_2"),
            'status'=>"active"
        );
        if(!empty($id)){
          $where=array('id'=>$id,'status'=>'active');
          $insert=$this->AdminModel->doupdate($where,'about_bottom',$data);
        }else{
        $insert = $this->AdminModel->insert("about_bottom",$data);
      }
        if ($insert){
            $this->session->set_flashdata('success','Updated successfully');
            redirect('admin/about_bottom');
        }else{
            $this->session->set_flashdata('error','failed! pls try again');
            redirect('admin/about_bottom');
        }
    }

    public function contact_us()
    {
        $user_id = $this->session->userdata('admin_id');
        if (empty($user_id)) {
            redirect('admin');
        }
        $where=array('status'=>'active');
        $data = $this->AdminModel->getdata($where,"contact_us");
        $data=array('page_title'=>'Contact','layout_page'=>'contact','feature'=>$data);
        $this->load->view('admin/layout',$data);
    }
    public function Insert_contact_us()
    {
      $id=$this->input->post('id');
         $data=array(
            'title'=> $this->input->post("title"),
            'subtitle'=>$this->input->post("s_title"),
            'ph_title'=>$this->input->post("ph_title"),
            'p_1'=>$this->input->post("p_1"),
            'p_2'=>$this->input->post("p_2"),
            'p_3'=>$this->input->post("p_3"),
            'p_4'=>$this->input->post("p_4"),
            'email_title'=>$this->input->post("email_title"),
            'e_address_1'=>$this->input->post("e_address_1"),
            'e_address_2'=>$this->input->post("e_address_2"),
            'status'=>"active"
        );
        if(!empty($id)){
          $where=array('id'=>$id,'status'=>'active');
          $insert=$this->AdminModel->doupdate($where,'contact_us',$data);
        }else{
        $insert = $this->AdminModel->insert("contact_us",$data);
      }
        if ($insert){
            $this->session->set_flashdata('success','Updated successfully');
            redirect('admin/contact_us');
        }else{
            $this->session->set_flashdata('error','failed! pls try again');
            redirect('admin/contact_us');
        }
    }
    public function terms()
    {
        $user_id = $this->session->userdata('admin_id');
        if (empty($user_id)) {
            redirect('admin');
        }
        $where=array('status'=>'active');
        $data = $this->AdminModel->getdata($where,"terms");
        $data=array('page_title'=>'Terms','layout_page'=>'terms','feature'=>$data);
        $this->load->view('admin/layout',$data);
    }
    public function insert_terms()
    {
      $id=$this->input->post('id');
         $data=array(
            'title'=> $this->input->post("title"),
            'description'=>$this->input->post("description"),
            'status'=>"active"
        );
        if(!empty($id)){
          $where=array('id'=>$id,'status'=>'active');
          $insert=$this->AdminModel->doupdate($where,'terms',$data);
        }else{
        $insert = $this->AdminModel->insert("terms",$data);
      }
        if ($insert){
            $this->session->set_flashdata('success','Updated successfully');
            redirect('admin/terms');
        }else{
            $this->session->set_flashdata('error','failed! pls try again');
            redirect('admin/terms');
        }
    }

    public function privacy()
    {
        $user_id = $this->session->userdata('admin_id');
        if (empty($user_id)) {
            redirect('admin');
        }
        $where=array('status'=>'active');
        $data = $this->AdminModel->getdata($where,"privacy");
        $data=array('page_title'=>'Privacy','layout_page'=>'privacy','feature'=>$data);
        $this->load->view('admin/layout',$data);
    }
    public function insert_privacy()
    {
      $id=$this->input->post('id');
         $data=array(
            'title'=> $this->input->post("title"),
            'description'=>$this->input->post("description"),
            'status'=>"active"
        );
        if(!empty($id)){
          $where=array('id'=>$id,'status'=>'active');
          $insert=$this->AdminModel->doupdate($where,'privacy',$data);
        }else{
        $insert = $this->AdminModel->insert("privacy",$data);
      }
        if ($insert){
            $this->session->set_flashdata('success','Updated successfully');
            redirect('admin/privacy');
        }else{
            $this->session->set_flashdata('error','failed! pls try again');
            redirect('admin/privacy');
        }
    }
    public function legal()
    {
        $user_id = $this->session->userdata('admin_id');
        if (empty($user_id)) {
            redirect('admin');
        }
        $where=array('status'=>'active');
        $data = $this->AdminModel->getdata($where,"legal");
        $data=array('page_title'=>'Legal','layout_page'=>'legal','feature'=>$data);
        $this->load->view('admin/layout',$data);
    }
    public function insert_legal()
    {
      $id=$this->input->post('id');
         $data=array(
            'title'=> $this->input->post("title"),
            'description'=>$this->input->post("description"),
            'status'=>"active"
        );
        if(!empty($id)){
          $where=array('id'=>$id,'status'=>'active');
          $insert=$this->AdminModel->doupdate($where,'legal',$data);
        }else{
        $insert = $this->AdminModel->insert("legal",$data);
      }
        if ($insert){
            $this->session->set_flashdata('success','Updated successfully');
            redirect('admin/legal');
        }else{
            $this->session->set_flashdata('error','failed! pls try again');
            redirect('admin/legal');
        }
    }

    public function about_banner()
    {
        $user_id = $this->session->userdata('admin_id');
        if (empty($user_id)) {
            redirect('admin');
        }
        $where=array('status'=>'active');
        $data = $this->AdminModel->getdata($where,"about_banner");
        $data=array('page_title'=>'About Banner','layout_page'=>'about_banner','feature'=>$data);
        $this->load->view('admin/layout',$data);
    }
    public function insert_about_banner()
    {
      $id=$this->input->post('id');
      if(!empty($id)){
     $where=array('status'=>"active",'id'=>$id);
     $data = $this->AdminModel->getdata($where,"about_banner");
     $img=$data[0]['image'];
     $config['upload_path'] = "uploads/banner/";
     $config['allowed_types'] = 'gif|jpg|png|jpeg';
     $config['max_size'] = '409600';
     // $config['file_name'] = $filename;
     $config['create_thumb'] = TRUE;

     $this->upload->initialize($config);

     if ($this->upload->do_upload('p_image')) {
         $imageDetailArray = $this->upload->data();

         $image = $imageDetailArray['file_name'];
     }else{
         $image=$img;
     }
 }else{
      $config['upload_path'] = "uploads/banner/";
      $config['allowed_types'] = 'gif|jpg|png|jpeg';
      $config['max_size'] = '409600';
      // $config['file_name'] = $filename;
      $config['create_thumb'] = TRUE;

      $this->upload->initialize($config);

      if ($this->upload->do_upload('p_image')) {
          $imageDetailArray = $this->upload->data();

          $image = $imageDetailArray['file_name'];
      }else{
          $image="N/A";
      }
    }
         $data=array(
            'title'=> $this->input->post("title"),
            'b_title'=>$this->input->post("b_title"),
            'image'=>$image,
            'b_link'=>$this->input->post("b_link"),
            'status'=>"active"
        );
        if(!empty($id)){
          $where=array('id'=>$id,'status'=>'active');
          $insert=$this->AdminModel->doupdate($where,'about_banner',$data);
        }else{
        $insert = $this->AdminModel->insert("about_banner",$data);
      }
        if ($insert){
            $this->session->set_flashdata('success','Banner Updated successfully');
            redirect('admin/about_banner');
        }else{
            $this->session->set_flashdata('error','failed! pls try again');
            redirect('admin/about_banner');
        }
    }
    public function how_title()
    {
      $user_id = $this->session->userdata('admin_id');
      if (empty($user_id)) {
          redirect('admin');
      }
      $where=array('status'=>'active');
      $data = $this->AdminModel->getdata($where,"how_title");
      $data=array('page_title'=>'How it Works?','layout_page'=>'how_title','feature'=>$data);
      $this->load->view('admin/layout',$data);
    }
    public function Insert_how_title()
    {
      $id=$this->input->post('id');
      if(!empty($id)){
     $where=array('status'=>"active",'id'=>$id);
     $data = $this->AdminModel->getdata($where,"how_title");
     $img=$data[0]['banner_image'];
     $config['upload_path'] = "uploads/banner/";
     $config['allowed_types'] = 'gif|jpg|png|jpeg';
     $config['max_size'] = '409600';
     // $config['file_name'] = $filename;
     $config['create_thumb'] = TRUE;

     $this->upload->initialize($config);

     if ($this->upload->do_upload('p_image')) {
         $imageDetailArray = $this->upload->data();

         $image = $imageDetailArray['file_name'];
     }else{
         $image=$img;
     }
 }else{
      $config['upload_path'] = "uploads/banner/";
      $config['allowed_types'] = 'gif|jpg|png|jpeg';
      $config['max_size'] = '409600';
      // $config['file_name'] = $filename;
      $config['create_thumb'] = TRUE;

      $this->upload->initialize($config);

      if ($this->upload->do_upload('p_image')) {
          $imageDetailArray = $this->upload->data();

          $image = $imageDetailArray['file_name'];
      }else{
          $image="N/A";
      }
    }
         $data=array(
            't_1'=> $this->input->post("t_1"),
            'des_1'=>$this->input->post("des_1"),
            't_2'=>$this->input->post("t_2"),
            'des_2'=>$this->input->post("des_2"),
            't_3'=>$this->input->post("t_3"),
            'des_3'=>$this->input->post("des_3"),
            'bottom_title'=>$this->input->post("footer_b_title"),
            'bottom_description'=>$this->input->post("footer_b_des"),
            'button_link'=>$this->input->post("footer_b_link"),
            'bottom_button'=>$this->input->post("footer_b_button"),
            'banner_title'=> $this->input->post("title"),
            'banner_description'=>$this->input->post("description"),
            'banner_image'=>$image,
            'status'=>"active"
        );
        if(!empty($id)){
          $where=array('id'=>$id,'status'=>'active');
          $insert=$this->AdminModel->doupdate($where,'how_title',$data);
        }else{
        $insert = $this->AdminModel->insert("how_title",$data);
      }
        if ($insert){
            $this->session->set_flashdata('success','Updated successfully');
            redirect('admin/how_title');
        }else{
            $this->session->set_flashdata('error','Update failed! pls try again');
            redirect('admin/how_title');
        }
    }
    public function how_backabiz()
    {
      $user_id = $this->session->userdata('admin_id');
      if (empty($user_id)) {
          redirect('admin');
      }
      $where=array('status'=>'active');
      $data = $this->AdminModel->getdata($where,"how_backabiz");
      $data=array('page_title'=>'How Backabiz Works','layout_page'=>'how_backabiz','feature'=>$data);
      $this->load->view('admin/layout',$data);
    }
    public function Insert_how_backabiz()
    {
      $id=$this->input->post('id');
      if(!empty($id)){
     $where=array('status'=>"active",'id'=>$id);
     $data = $this->AdminModel->getdata($where,"how_backabiz");
     $img=$data[0]['banner_image'];
     $config['upload_path'] = "uploads/banner/";
     $config['allowed_types'] = 'gif|jpg|png|jpeg';
     $config['max_size'] = '409600';
     // $config['file_name'] = $filename;
     $config['create_thumb'] = TRUE;

     $this->upload->initialize($config);

     if ($this->upload->do_upload('p_image')) {
         $imageDetailArray = $this->upload->data();

         $image = $imageDetailArray['file_name'];
     }else{
         $image=$img;
     }
 }else{
      $config['upload_path'] = "uploads/banner/";
      $config['allowed_types'] = 'gif|jpg|png|jpeg';
      $config['max_size'] = '409600';
      // $config['file_name'] = $filename;
      $config['create_thumb'] = TRUE;

      $this->upload->initialize($config);

      if ($this->upload->do_upload('p_image')) {
          $imageDetailArray = $this->upload->data();

          $image = $imageDetailArray['file_name'];
      }else{
          $image="N/A";
      }
    }
         $data=array(
            't_1'=> $this->input->post("t_1"),
            'des_1'=>$this->input->post("des_1"),
            't_2'=>$this->input->post("t_2"),
            'des_2'=>$this->input->post("des_2"),
            't_3'=>$this->input->post("t_3"),
            'des_3'=>$this->input->post("des_3"),
            'bottom_title'=>$this->input->post("footer_b_title"),
            'bottom_description'=>$this->input->post("footer_b_des"),
            'button_link'=>$this->input->post("footer_b_link"),
            'bottom_button'=>$this->input->post("footer_b_button"),
            'banner_title'=> $this->input->post("title"),
            'banner_description'=>$this->input->post("description"),
            'banner_image'=>$image,
            'status'=>"active"
        );
        if(!empty($id)){
          $where=array('id'=>$id,'status'=>'active');
          $insert=$this->AdminModel->doupdate($where,'how_backabiz',$data);
        }else{
        $insert = $this->AdminModel->insert("how_backabiz",$data);
      }
        if ($insert){
            $this->session->set_flashdata('success','Updated successfully');
            redirect('admin/how_backabiz');
        }else{
            $this->session->set_flashdata('error','Update failed! pls try again');
            redirect('admin/how_backabiz');
        }
    }
    public function why_backabiz()
    {
      $user_id = $this->session->userdata('admin_id');
      if (empty($user_id)) {
          redirect('admin');
      }
      $where=array('status'=>'active');
      $data = $this->AdminModel->getdata($where,"why_backabiz");
      $data=array('page_title'=>'Why Backabiz','layout_page'=>'why_backabiz','feature'=>$data);
      $this->load->view('admin/layout',$data);
    }
    public function Insert_why_backabiz()
    {
      $id=$this->input->post('id');
      if(!empty($id)){
     $where=array('status'=>"active",'id'=>$id);
     $data = $this->AdminModel->getdata($where,"why_backabiz");
     $img=$data[0]['banner_image'];
     $config['upload_path'] = "uploads/banner/";
     $config['allowed_types'] = 'gif|jpg|png|jpeg';
     $config['max_size'] = '409600';
     // $config['file_name'] = $filename;
     $config['create_thumb'] = TRUE;

     $this->upload->initialize($config);

     if ($this->upload->do_upload('p_image')) {
         $imageDetailArray = $this->upload->data();

         $image = $imageDetailArray['file_name'];
     }else{
         $image=$img;
     }
 }else{
      $config['upload_path'] = "uploads/banner/";
      $config['allowed_types'] = 'gif|jpg|png|jpeg';
      $config['max_size'] = '409600';
      // $config['file_name'] = $filename;
      $config['create_thumb'] = TRUE;

      $this->upload->initialize($config);

      if ($this->upload->do_upload('p_image')) {
          $imageDetailArray = $this->upload->data();

          $image = $imageDetailArray['file_name'];
      }else{
          $image="N/A";
      }
    }
         $data=array(
            't_1'=> $this->input->post("t_1"),
            'des_1'=>$this->input->post("des_1"),
            't_2'=>$this->input->post("t_2"),
            'des_2'=>$this->input->post("des_2"),
            't_3'=>$this->input->post("t_3"),
            'des_3'=>$this->input->post("des_3"),
            'bottom_title'=>$this->input->post("footer_b_title"),
            'bottom_description'=>$this->input->post("footer_b_des"),
            'button_link'=>$this->input->post("footer_b_link"),
            'bottom_button'=>$this->input->post("footer_b_button"),
            'banner_title'=> $this->input->post("title"),
            'banner_description'=>$this->input->post("description"),
            'banner_image'=>$image,
            'status'=>"active"
        );
        if(!empty($id)){
          $where=array('id'=>$id,'status'=>'active');
          $insert=$this->AdminModel->doupdate($where,'why_backabiz',$data);
        }else{
        $insert = $this->AdminModel->insert("why_backabiz",$data);
      }
        if ($insert){
            $this->session->set_flashdata('success','Updated successfully');
            redirect('admin/why_backabiz');
        }else{
            $this->session->set_flashdata('error','Update failed! pls try again');
            redirect('admin/why_backabiz');
        }
    }
    public function help_center()
    {
      $user_id = $this->session->userdata('admin_id');
      if (empty($user_id)) {
          redirect('admin');
      }
      $where=array('status'=>'active');
      $data = $this->AdminModel->getdata($where,"help_center");
      $data=array('page_title'=>'Help Centre','layout_page'=>'help_center','feature'=>$data);
      $this->load->view('admin/layout',$data);
    }
    public function Insert_help_center()
    {
      $id=$this->input->post('id');
      if(!empty($id)){
     $where=array('status'=>"active",'id'=>$id);
     $data = $this->AdminModel->getdata($where,"help_center");
     $img=$data[0]['banner_image'];
     $config['upload_path'] = "uploads/banner/";
     $config['allowed_types'] = 'gif|jpg|png|jpeg';
     $config['max_size'] = '409600';
     // $config['file_name'] = $filename;
     $config['create_thumb'] = TRUE;

     $this->upload->initialize($config);

     if ($this->upload->do_upload('p_image')) {
         $imageDetailArray = $this->upload->data();

         $image = $imageDetailArray['file_name'];
     }else{
         $image=$img;
     }
 }else{
      $config['upload_path'] = "uploads/banner/";
      $config['allowed_types'] = 'gif|jpg|png|jpeg';
      $config['max_size'] = '409600';
      // $config['file_name'] = $filename;
      $config['create_thumb'] = TRUE;

      $this->upload->initialize($config);

      if ($this->upload->do_upload('p_image')) {
          $imageDetailArray = $this->upload->data();

          $image = $imageDetailArray['file_name'];
      }else{
          $image="N/A";
      }
    }
         $data=array(
            't_1'=> $this->input->post("t_1"),
            'des_1'=>$this->input->post("des_1"),
            't_2'=>$this->input->post("t_2"),
            'des_2'=>$this->input->post("des_2"),
            't_3'=>$this->input->post("t_3"),
            'des_3'=>$this->input->post("des_3"),
            'bottom_title'=>$this->input->post("footer_b_title"),
            'bottom_description'=>$this->input->post("footer_b_des"),
            'button_link'=>$this->input->post("footer_b_link"),
            'bottom_button'=>$this->input->post("footer_b_button"),
            'banner_title'=> $this->input->post("title"),
            'banner_description'=>$this->input->post("description"),
            'banner_image'=>$image,
            'status'=>"active"
        );
        if(!empty($id)){
          $where=array('id'=>$id,'status'=>'active');
          $insert=$this->AdminModel->doupdate($where,'help_center',$data);
        }else{
        $insert = $this->AdminModel->insert("help_center",$data);
      }
        if ($insert){
            $this->session->set_flashdata('success','Updated successfully');
            redirect('admin/help_center');
        }else{
            $this->session->set_flashdata('error','Update failed! pls try again');
            redirect('admin/help_center');
        }
    }
}

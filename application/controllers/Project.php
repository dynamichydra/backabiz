<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include 'Base.php';
class Project extends Base {

	public function __construct()
    {
        parent::__construct();
        $this->CI = get_instance();
        $this->load->model('ProjectModel');
    }

	public function index($id=null)
	{
    if($id && $id>0){
      $this->data['project']	= $this->ProjectModel->get_project_detail(['p.id'=>$id]);
      if(count($this->data['project'])>0){
        $this->data['project']   = $this->data['project'][0];
        $this->data['title']	= $this->data['project']->title;
				$this->data["page_title"]="All Projects";
        $this->data['pcount']   = $this->ProjectModel->_get('project',['user_id'=>$this->data['project']->user_id],[],"count(id) tot");
        $this->data['backers']   = $this->ProjectModel->get_project_backers(['project_id'=>$this->data['project']->id]);

        $this->render_front('project/index');
      }else{
          redirect('/');
      }
    }else{
      redirect('/');
    }
	}
	public function projects()
	{
	// 	if( !isset($_SESSION["user"]) ){
	// redirect('home/login');
	// }
	$this->data["page_title"]="All Projects";
	$this->data['title']	= 'Projects';
	// $project_details =$this->AdminModel->getProjectDetails($id);
	$this->data["user"]=$this->AdminModel->getdata(["status"=>"active"],'user');
	$this->data["project_details"]=$this->AdminModel->getProjectDetails();
	$this->render_front('project/all_projects');
	}
	public function category($value)
	{
	// 	if( !isset($_SESSION["user"]) ){
	// redirect('home/login');
	// }
	$url = str_replace('%20', ' ',$value);
	// echo $url;
	$this->data["page_title"]="$url";
	$this->data['title']	= $url;
	// $project_details =$this->AdminModel->getProjectDetails($id);
	$this->data["user"]=$this->AdminModel->getdata(["status"=>"active"],'user');
	$this->data["project_details"]=$this->AdminModel->getCategorytProjects($url);
	$this->render_front('project/all_projects');
	}
}

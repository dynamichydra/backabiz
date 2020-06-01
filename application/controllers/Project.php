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
    if(!empty($id)){
			$value = str_replace('-', ' ',$id);
      $this->data['project']	= $this->ProjectModel->get_project_detail(['p.title'=>$value]);
      if(count($this->data['project'])>0){
        $this->data['project']   = $this->data['project'][0];
        $this->data['title']	= $this->data['project']->title;
				$this->data["page_title"]=$this->data['project']->title;
				$this->data["similar_projects"]=$this->AdminModel->getCategorytProjects($this->data['project']->category);
        $this->data['pcount']   = $this->ProjectModel->_get('project',['user_id'=>$this->data['project']->user_id],[],"count(id) tot");
        $this->data['backers']   = $this->ProjectModel->get_project_backers(['project_id'=>$this->data['project']->id]);
				$this->data['updates']   = $this->AdminModel->getdata(["status"=>"active","project_id"=>$this->data['project']->id],'project_update');

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
	$this->data["page_title"]="All Campaigns";
	$this->data['title']	= 'Campaigns';
	// $project_details =$this->AdminModel->getProjectDetails($id);
	$this->data["user"]=$this->AdminModel->getdata(["status"=>"active"],'user');
	$this->data["project_details"]=$this->AdminModel->getProjectDetails();
	$this->render_front('project/all_projects');
	}
	public function category($url)
	{
	// 	if( !isset($_SESSION["user"]) ){
	// redirect('home/login');
	// }
	$value = str_replace('-', ' ',$url);
	// echo $url;
	$this->data["page_title"]="$url";
	$this->data['title']	= $url;
	// $project_details =$this->AdminModel->getProjectDetails($id);
	$this->data["user"]=$this->AdminModel->getdata(["status"=>"active"],'user');
	$this->data["project_details"]=$this->AdminModel->getCategorytProjects($value);
	$this->render_front('project/all_projects');
	}

}

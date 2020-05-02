<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include 'Base.php';
class Project extends Base {

	public function __construct()
    {
        parent::__construct();
        $this->CI = get_instance();
        $this->load->model('projectModel');
    }

	public function index($id=null)
	{
    if($id && $id>0){
      $this->data['project']	= $this->projectModel->get_project_detail(['p.id'=>$id]);
      if(count($this->data['project'])>0){
        $this->data['project']   = $this->data['project'][0];
        $this->data['title']	= $this->data['project']->title;
        $this->data['pcount']   = $this->projectModel->_get('project',['user_id'=>$this->data['project']->user_id],[],"count(id) tot");
        $this->data['backers']   = $this->projectModel->get_project_backers(['project_id'=>$this->data['project']->id]);

        $this->render_front('project/index');
      }else{
          redirect('/');
      }
    }else{
      redirect('/');
    }
	}
}

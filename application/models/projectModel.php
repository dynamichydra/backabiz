<?php

class ProjectModel extends BaseModel
{

    public function __construct()
    {
        parent::__construct();
    }

    function get_project_detail($data=[]){
      $this->db->select('p.*,u.name uname,u.img uimg,u.address')
         ->from('project p')
         ->join('user u', 'u.id = p.user_id','left')
         ->where($data);
      $query =  $this->db->get();
      return $query->result();
    }

    function get_project_backers($data=[]){
      $this->db->select('b.amount,u.name name,b.date')
         ->from('backers b')
         ->join('user u', 'u.id = b.user_id')
         ->where($data);
      $query =  $this->db->get();
      return $query->result();
    }
}

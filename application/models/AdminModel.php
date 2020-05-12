<?php

class AdminModel extends BaseModel
{

    public function __construct()
    {
        parent::__construct();
    }

    public function check_admin($eml, $pass)
    {
        $this->db->select('id');
        $this->db->where('email', $eml);
        $this->db->where('password', $pass);
        $this->db->where('user_type', 'admin');
        $sql = $this->db->get('user');
        if ($sql->num_rows() > 0) {
            return $sql->row();
        } else {
            return FALSE;
        }
    }
    public function insert($table,$data)
    {
        $this->db->insert($table,$data);
        $insert_id = $this->db->insert_id();
        if($insert_id){
            return $insert_id;
        } else{
            return false;
        }
    }

    public function get_users()
    {
        $this->db->select('*');
        // $this->db->where('role_id', 3);
        $sql = $this->db->get('user');
        if ($sql->num_rows() > 0) {
            return $sql->result_array();
        }
    }
    public function getdata($where,$table)
    {
        $this->db->select('*');
        $this->db->where($where);
        $sql = $this->db->get($table);
        if ($sql->num_rows() > 0) {
            return $sql->result_array();
        }
    }
    public function getdataCategory($where,$table)
    {
        $this->db->select('*');
        $this->db->where($where);
        // $this->db->limit(6);
        $sql = $this->db->get($table);
        if ($sql->num_rows() > 0) {
            return $sql->result_array();
        }
    }
    public function doupdate($where,$table,$data)
    {
        $this->db->where($where);
        $sql=$this->db->update($table,$data);
        if($sql){
            return true;
        } else{
            return false;
        }
    }

     public function get_page_data($pname = NULL)
    {
        $this->db->select('*');
        $this->db->where('page_title', $pname);
        $sql = $this->db->get('cmspages');
        if ($sql->num_rows() > 0) {
            return $sql->result_array();
        } else {
            return FALSE;
        }
    }

    public function save_page_data($val, $pt)
    {
        $this->db->where('page_title', $pt);
        $this->db->update('cmspages', $val);
    }

    public function get_countries()
    {
        $this->db->select('*');
        $sql = $this->db->get("countries");
        if ($sql->num_rows() > 0) {
            return $sql->result_array();
        }
    }
    public function doGetalldata($data,$table){
                     $this->db->where($data);
                     $query = $this->db->get($table);
                     if($query){
                         return $query->result();
                     }
                 }

    public function get_total_projects()
    {
      $query = $this->db->query("SELECT category, count(category) as 'total' FROM `project` GROUP BY category");
      if($query){
      return $query->result_array();
    }else{
      return false;
    }
    }

    public function get_description()
    {
      $query = $this->db->query("SELECT cat_name,cat_description FROM `category`where status= 'active'");
      if($query){
      return $query->result_array();
    }else{
      return false;
    }
    }

    public function getProjectDetails()
    {
      $query = $this->db->query("SELECT user.last_name,user.first_name,user.img as user_img, project.title, project.category, project.end_date, project.start_date, project.status, project.funding_goal, project.feature_img, project.rec_amount, project.location, project.id as p_id, countries.country_name
FROM user
INNER JOIN project ON user.id=project.user_id
INNER JOIN countries on project.country=countries.id WHERE project.status='active'");
      if($query){
      return $query->result_array();
    }else{
      return false;
    }
    }
    public function getAllProjectDetails()
    {
      $query = $this->db->query("SELECT user.last_name,user.first_name,user.img as user_img, project.title, project.category, project.id, project.end_date, project.start_date, project.status, project.funding_goal, project.feature_img, project.rec_amount, project.location, countries.country_name
FROM user
INNER JOIN project ON user.id=project.user_id
INNER JOIN countries on project.country=countries.id WHERE project.status!='delete' LIMIT 3");
      if($query){
      return $query->result_array();
    }else{
      return false;
    }
    }
    public function getFeaturedprojects()
    {
      $query = $this->db->query("SELECT user.last_name,user.first_name,user.img as user_img, project.title, project.short_description, project.category, project.end_date, project.start_date, project.status, project.funding_goal, project.feature_img, project.rec_amount, project.location, countries.country_name,project.featured
FROM user
INNER JOIN project ON user.id=project.user_id
INNER JOIN countries on project.country=countries.id WHERE project.status='active' and project.featured='yes'");
      if($query){
      return $query->result_array();
    }else{
      return false;
    }
    }
    public function getCategorytProjects($value)
    {
      $query = $this->db->query("SELECT user.last_name,user.first_name,user.img as user_img, project.title, project.category, project.end_date, project.start_date, project.status, project.funding_goal, project.feature_img, project.rec_amount, project.location , project.id as p_id, countries.country_name
FROM user
INNER JOIN project ON user.id=project.user_id
INNER JOIN countries on project.country=countries.id WHERE project.status='active' AND project.category='".$value."'");
      if($query){
      return $query->result_array();
    }else{
      return false;
    }
    }
    public function getMyProjectDetails($id)
    {
      $query = $this->db->query("SELECT user.last_name,user.first_name,user.img as user_img, project.title, project.category, project.end_date, project.start_date, project.status, project.funding_goal, project.feature_img, project.rec_amount, project.location, project.id as project_id, countries.country_name
FROM user
INNER JOIN project ON user.id=project.user_id
INNER JOIN countries on project.country=countries.id WHERE project.user_id=$id AND project.status!='delete'");
      if($query){
      return $query->result_array();
    }else{
      return false;
    }
    }
}

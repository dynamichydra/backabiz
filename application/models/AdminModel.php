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

}

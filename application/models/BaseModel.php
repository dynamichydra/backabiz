<?php

class BaseModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    function _get($table,$data=[],$params=[],$select="*"){
      $this->db->select($select);
      if(!empty($params)){
        if(isset($params['order']) && $params['order']['type'] == 'desc'){
            $this->db->order_by($params['order']['orderby'], "desc");
        }else if( isset($params['order']) &&  $params['order']['type'] == 'asc'){
            $this->db->order_by($params['order']['orderby'], "asc");
        }else if( isset($params['pagination']) && $params['pagination']){
             $this->db->limit($params['pagination']['limit'], $params['pagination']['page']);
        }
      }
      $q = $this->db->get_where($table, $data);
      return $q->result_array();
    }

        function _set_insert($table,$data){
            $this->db->insert($table, $data);
            return $this->db->insert_id();
        }

        function _set_delete($table,$data){
            $this->db->where($data);
            $this->db->delete($table);
            return $this->db->affected_rows();
        }

        function _set_update($table, $data, $condition){
            $this->db->where($condition);
            $this->db->update($table, $data);
            return $this->db->affected_rows();
        }
}

<?php


class Loginmodel extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    public function add($table,$data) {
        $this->load->database('default');
        $this->db->insert($table, $data);
        $id = $this->db->insert_id();
        $this->db->close();
        return $id;
    }
    public function getWhere($table, $field, $fieldvalue) {
        $this->load->database('default');
        $this->db->where($field, $fieldvalue);
        $query = $this->db->get($table);
        $result = $query->result_array();
        $this->db->close();
        return $result;
    }
    public function updateWhere($data,$id,$idvalue)
    {
        $this->load->database('default');
        $this->db->where($id, $idvalue);
        $this->db->update('users', $data);
        $this->db->close();
    }
    public function getProfileWhere($field, $fieldvalue) {
        $this->load->database('default');
        $this->db->where($field, $fieldvalue);
        $query = $this->db->get('users');
        $result = $query->result_array();
        $this->db->close();
        return $result;
    }
    public function getLoginWhere($table, $field, $fieldvalue,$field2,$fieldvalue2) {
        $this->load->database('default');
        $this->db->where($field, $fieldvalue);
        $this->db->where($field2, $fieldvalue2);
        $query = $this->db->get($table);
        $result = $query->result_array();
        $this->db->close();
        return $result;
    }
}

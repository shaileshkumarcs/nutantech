<?php


class Enquirymodel extends CI_Model {

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
}

<?php

class Rental extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    function get_last_ten_entries()
    {
        $this->db->order_by('insert_date', 'desc');
        $query = $this->db->get('rental_list', 10);
        return $query->result_array();
    }
    
    function insertRentalList($table,$data)
    {
        $this->db->insert($table, $data);
        
    }    
}
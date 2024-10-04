<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_all_products()
    {
        $query = $this->db->get('products');
        return $query->result();
    }

    public function get_product_by_id($id)
    {
        $query = $this->db->get_where('products', ['id' => $id]);
        return $query->row();
    }
}
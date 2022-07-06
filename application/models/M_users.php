<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_users extends CI_Model
{
    function getData()
    {
        $this->db->select('name, age, created_at');
        $this->db->from('users');
        $this->db->order_by('id', 'asc');
        return $this->db->get()->result();
    }
}

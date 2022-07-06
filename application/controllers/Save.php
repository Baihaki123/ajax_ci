<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Save extends CI_Controller
{
    public function kirim()
    {
        $name = $this->input->get('name');
        $age = $this->input->get('age');

        $data = [
            'name' => $name,
            'age' => $age
        ];

        $this->db->insert('users', $data);
    }
}

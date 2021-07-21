<?php

class User extends CI_Controller
{
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('emaildb')])->row_array();
        echo 'Selamat Datang ' . $data['user']['name'];
    }
}

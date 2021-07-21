<?php

class Landing extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/landing_header');
        $this->load->view('landing/index');
        $this->load->view('templates/landing_footer');
    }
}

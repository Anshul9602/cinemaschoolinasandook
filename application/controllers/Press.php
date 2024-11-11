<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Press extends CI_Controller
{
    public function index()
    {
        $this->load->view('header');
        $this->load->view('Press');
        $this->load->view('footer');
    }
}

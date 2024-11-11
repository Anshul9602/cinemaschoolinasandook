<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rthela extends CI_Controller
{
    public function index()
    {
        $this->load->view('header');
        $this->load->view('Rthela');
        $this->load->view('footer');
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contactus extends CI_Controller
{
    public function index()
    {
        $this->load->view('header');
        $this->load->view('Contactus');
        $this->load->view('footer');
    }
}

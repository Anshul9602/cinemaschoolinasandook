<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Impactours extends CI_Controller
{
    public function index()
    {
        $this->load->view('header');
        $this->load->view('Impactours');
        $this->load->view('footer');
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Story extends CI_Controller
{
    public function index()
    {
        $this->load->view('header');
        $this->load->view('Story');
        $this->load->view('footer');
    }
}

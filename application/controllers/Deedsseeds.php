<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Deedsseeds extends CI_Controller
{
    public function index()
    {
        $this->load->view('header');
        $this->load->view('Deedsseeds');
        $this->load->view('footer');
    }
}

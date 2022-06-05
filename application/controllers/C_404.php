<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_404 extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function index()
    {
        $data['page'] = "404";

        $this->load->view('template/index', $data);
    }
}

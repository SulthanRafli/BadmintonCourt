<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_detail_item extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function detail($id)
    {
        $data['page'] = "detail_item";
        $data['no']   = $id;

        $this->load->view('template/index', $data);
    }
}

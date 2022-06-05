<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_list_invoice extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('M_booking');
    }

    public function admin()
    {
        $data['list_booking']  = $this->M_booking->list_booking();
        $data['page']          = "list_invoice_admin";

        $this->load->view('template/index', $data);
    }

    public function detail($id)
    {
        $data['list_invoice']  = $this->M_booking->list_invoice($id);
        $data['page']          = "list_invoice";

        $this->load->view('template/index', $data);
    }

    public function print_invoice($id)
    {
        $data['invoice']  = $this->M_booking->invoice($id);
        $this->load->view('print_invoice', $data);
    }
}

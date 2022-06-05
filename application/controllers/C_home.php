<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_home extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('M_booking');
        $this->load->model('M_user');
    }

    public function index()
    {
        $data['total_booking']    = $this->M_booking->totalBooking();
        $data['total_lapangan1']  = $this->M_booking->totalLapangan(1);
        $data['total_lapangan2']  = $this->M_booking->totalLapangan(2);
        $data['total_lapangan3']  = $this->M_booking->totalLapangan(3);
        $data['total_user']       = $this->M_user->totalUser();
        $data['page']             = "home";

        $this->load->view('template/index', $data);
    }
}

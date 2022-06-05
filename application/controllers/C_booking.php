<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_booking extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('M_booking');
    }

    public function checkBooking()
    {
        $result     = $this->M_booking->checkBooking();
        if ($result) {
            echo json_encode(array(
                'status' => false,
            ));
            return;
        } else {
            echo json_encode(array(
                'status' => true,
            ));
            return;
        }
    }

    public function save()
    {
        $result     = $this->M_booking->save();
        $status     = $result;

        echo json_encode(array(
            'status' => $status,
        ));
        return;
    }

    public function confirmation($id)
    {
        $result     = $this->M_booking->confirmation($id);
        $status     = $result;

        echo json_encode(array(
            'status' => $status,
        ));
        return;
    }

    public function destroy($id)
    {
        $result     = $this->M_booking->destroy($id);
        $status     = $result;

        echo json_encode(array(
            'status' => $status,
        ));
        return;
    }
}

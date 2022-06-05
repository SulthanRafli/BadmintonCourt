<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_user extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('M_user');
    }

    public function login()
    {
        $result     = $this->M_user->checkUsernamePassword();
        if ($result) {
            $data = [
                'idUser' => $result->idUser,
                'username' => $result->username,
                'email' => $result->email,
                'status' => true
            ];
            $this->session->set_userdata($data);
            echo json_encode(array(
                'status' => true,
            ));
            return;
        } else {
            echo json_encode(array(
                'status' => false,
            ));
            return;
        }
    }

    public function register()
    {
        $check      = $this->M_user->checkUser();
        if (!$check) {
            $result     = $this->M_user->register();
            $status     = $result;

            echo json_encode(array(
                'status' => $status,
            ));
            return;
        } else {
            echo json_encode(array(
                'status' => 'exist',
            ));
            return;
        }
    }

    public function logout()
    {
        session_unset('idUser');
        session_unset('username');
        session_unset('email');
        session_unset('status');
        session_destroy();
        redirect(base_url());
    }
}

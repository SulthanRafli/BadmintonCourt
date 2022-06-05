<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function totalUser()
    {
        $this->db->select('*');
        $this->db->from('user');
        $query = $this->db->get();
        return count($query->result());
    }

    function checkUser()
    {
        $email = $this->input->post('email');

        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('email', $email);
        $query = $this->db->get();
        return $query->row();
    }

    function checkUsernamePassword()
    {
        $email      = $this->input->post('email_login');
        $password   = $this->input->post('password_login');

        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $query = $this->db->get();
        return $query->row();
    }

    function register()
    {
        $this->db->trans_begin();

        $data['username']       = $this->input->post('username');
        $data['email']          = $this->input->post('email');
        $data['password']       = $this->input->post('password');

        $this->db->insert('user', $data);

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return FALSE;
        } else {
            $this->db->trans_commit();
            return TRUE;
        }
    }
}

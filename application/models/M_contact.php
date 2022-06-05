<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_contact extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function save()
    {
        $this->db->trans_begin();

        $data['name']     = $this->input->post('name');
        $data['email']    = $this->input->post('email');
        $data['message']  = $this->input->post('message');

        $this->db->insert('contact', $data);

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return FALSE;
        } else {
            $this->db->trans_commit();
            return TRUE;
        }
    }
}

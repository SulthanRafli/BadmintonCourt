<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_booking extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function list_invoice($id)
    {
        $this->db->select('*');
        $this->db->from('booking');
        $this->db->where('idUser', $id);
        $this->db->where('status', 1);
        $this->db->where('visible', 1);
        $query = $this->db->get();
        return $query->result();
    }

    function list_booking()
    {
        $this->db->select('*');
        $this->db->from('booking');
        $query = $this->db->get();
        return $query->result();
    }

    function invoice($id)
    {
        $this->db->select('*');
        $this->db->from('booking');
        $this->db->where('idBooking', $id);
        $query = $this->db->get();
        return $query->row();
    }


    function totalBooking()
    {
        $this->db->select('*');
        $this->db->from('booking');
        $query = $this->db->get();
        return count($query->result());
    }

    function totalLapangan($id)
    {
        $this->db->select('*');
        $this->db->from('booking');
        $this->db->where('status', 1);
        $this->db->where('idField', $id);
        $query = $this->db->get();
        return count($query->result());
    }

    function checkBooking()
    {
        $date   = $this->input->post('date');
        $start  = $this->input->post('startTime');
        $end    = $this->input->post('endTime');

        $this->db->select('*');
        $this->db->from('booking');
        $this->db->where('date', $date);
        $this->db->where('startTime >=', $start);
        $this->db->where('endTime <=', $end);
        $this->db->where('status', 1);
        $this->db->where('visible', 1);
        $query = $this->db->get();
        return $query->result();
    }

    function save()
    {
        $this->db->trans_begin();

        $this->db->select('*');
        $this->db->from('booking');
        $this->db->where('status', 1);
        $this->db->order_by('idBooking', 'DESC');
        $query = $this->db->get();
        $result = $query->row();

        if ($result) {
            $id = $result->idBooking;
        } else {
            $id = 0;
        }

        $invoice = '#IN' . date('y') . date('m') . str_pad($id, 3, '0', STR_PAD_LEFT);

        $data['fullName']     = $this->input->post('fullName');
        $data['telphone']     = $this->input->post('telp');
        $data['date']         = $this->input->post('date');
        $data['startTime']    = $this->input->post('startTime');
        $data['endTime']      = $this->input->post('endTime');
        $data['duration']     = $this->input->post('duratioValue');
        $data['noInvoice']    = $invoice;
        $data['price']        = $this->input->post('price');
        $data['idUser']       = $this->session->userdata('idUser');
        $data['idField']      = $this->input->post('idField');
        $data['information']  = $this->input->post('message');
        $data['status']       = 1;

        $this->db->insert('booking', $data);

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return FALSE;
        } else {
            $this->db->trans_commit();
            return TRUE;
        }
    }

    function confirmation($id)
    {
        $this->db->trans_begin();

        $data['status'] = 2;

        $this->db->where('idBooking', $id);
        $this->db->update('booking', $data);

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return FALSE;
        } else {
            $this->db->trans_commit();
            return TRUE;
        }
    }

    function destroy($id)
    {
        $this->db->trans_begin();

        $data['visible'] = 0;

        $this->db->where('idBooking', $id);
        $this->db->update('booking', $data);

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return FALSE;
        } else {
            $this->db->trans_commit();
            return TRUE;
        }
    }
}

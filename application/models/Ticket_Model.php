<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Ticket_Model extends CI_Model
{

    //get all data ticket
    public function Ticket()
    {
        $query = " SELECT T.*, C.CATEGORY, D.DIVISI, S.STATUS,
        to_char(T.DATE_INSERT,'dd-mm-yyy hh24:mi') DATE_INSERT, to_char(T.DATE_SOLVE, 'dd-mm-yy hh24:mi') DATE_SOLVE, to_char(T.UPDATE_TIME, 'dd-mm-yy hh24:mi') UPDATE_TIME
                        FROM TICKET  T
                    JOIN CATEGORY C ON T.ID_CATEGORY = C.ID_CATEGORY
                    JOIN DIVISI D ON T.ID_DIVISI = D.ID_DIVISI
                    JOIN STATUS_PROBLEM S ON T.ID_STATUS = S.ID_STATUS
                    ORDER BY T.ID_TICKET ASC";
        return $this->db->query($query)->result_array();
    }

    public function get_keyword($keyword)
    {

        $this->db->select('*');
        $this->db->from('TICKET');
        $this->db->like('ID_TICKET', $keyword);
        $this->db->or_like('USER_COMPLAIN', $keyword);
        $this->db->or_like('ID_CATEGORY', $keyword);
        $this->db->or_like('DETAIL', $keyword);
        $this->db->join('DIVISI', 'DIVISI.ID_DIVISI = TICKET.ID_DIVISI');
        $this->db->join('CATEGORY', 'CATEGORY.ID_CATEGORY = TICKET.ID_CATEGORY');
        $this->db->join('STATUS_PROBLEM', 'STATUS_PROBLEM.ID_STATUS = TICKET.ID_STATUS');
        return $this->db->get()->result_array();
    }

    public function details($id)
    {
        $query = " SELECT T.*, C.CATEGORY, D.DIVISI, S.STATUS, K.TECHNICIAN_NAME
                        FROM TICKET  T
                    JOIN CATEGORY C ON T.ID_CATEGORY = C.ID_CATEGORY
                    JOIN DIVISI D ON T.ID_DIVISI = D.ID_DIVISI
                    JOIN STATUS_PROBLEM S ON T.ID_STATUS = S.ID_STATUS
                    JOIN TECHNICIAN K ON T.ID_TECHNICIAN = K.ID_TECHNICIAN
                    WHERE T.ID_TICKET = " . "'" . $id . "'";
        return $this->db->query($query)->row_array();
    }

    //insert data ticket to table ticket and status
    public function Add()
    {
        //generate custom id
        $cc = $this->db->count_all('TICKET') + 1;
        $coun = str_pad($cc, 4, STR_PAD_LEFT);
        $coo = strrev($coun);
        $d = date('y');
        $mnth = date("m") . "-";
        $ticket_id = $d . $mnth . $coo;

        //checkbox solve
        if ($this->input->post('solve') == NULL) {
            $solve = '1';
        } else {
            $solve = $this->input->post('solve');
            $this->db->set('DATE_SOLVE', 'sysdate', false);
        }

        //insert date with time hours, minutes, and seconds
        //sysdate is method from oracle databases
        $this->db->set('DATE_INSERT', 'sysdate', false);

        $this->db->insert('TICKET', [
            'ID_TICKET' => $ticket_id,
            //get data from user input
            'USER_COMPLAIN' => $this->input->post('user_complain'),
            'CONTACT' => $this->input->post('contact'),
            'ID_DIVISI' => $this->input->post('divisi'),
            'PLACE' => $this->input->post('place'),
            //get data user login
            'ADMIN' => $this->session->userdata('email'),
            'ID_TECHNICIAN' => $this->input->post('technician'),
            'ID_CATEGORY' => $this->input->post('category'),
            'DETAIL' => $this->input->post('detail'),
            // status default sedang dikerjakan
            'ID_STATUS' => $solve,
        ]);
    }

         public function updatetiket($id)
    {
       //generate custom id
       $cc = $this->db->count_all('TICKET') + 1;
       $coun = str_pad($cc, 4, STR_PAD_LEFT);
       $coo = strrev($coun);
       $d = date('y');
       $mnth = date("m") . "-";
       $ticket_id = $d . $mnth . $coo;
       //insert date with time hours, minutes, and seconds
       //sysdate is method from oracle databases
       $this->db->where('ID_TICKET', $id);
       $this->db->set('UPDATE_TIME', 'sysdate', false);
       $this->db->update('TICKET', [
        //    'ID_TICKET' => $ticket_id,
           //get data from user input
           'USER_COMPLAIN' => $this->input->post('user_complain'),
           'CONTACT' => $this->input->post('contact'),
           'ID_DIVISI' => $this->input->post('divisi'),
           'PLACE' => $this->input->post('place'),
           'HOW_TO_SOLVE' => $this->input->post('how_to_solve'),
           'NOTE' => $this->input->post('note'),
           //get data user login
           'ADMIN' => $this->session->userdata('email'),
           'ID_TECHNICIAN' => $this->input->post('technician'),
           'ID_CATEGORY' => $this->input->post('category'),
           'DETAIL' => $this->input->post('detail'),
           // status default sedang dikerjakan
           'ID_STATUS' => $this->input->post('status'),
       ]);
    }

    //Delete Ticket
    public function Delete($id)
    {
        $this->db->delete('TICKET', array('ID_TICKET' => $id));
    }

    //Search Email Technician
    public function EmailTechnician($id)
    {
        $query = "SELECT EMAIL FROM TECHNICIAN WHERE ID_TECHNICIAN = " .  $id;
        return $this->db->query($query)->row_array();
    }

    // ------------------------------ Ticket Log ------------------------

    //get all data ticket
    public function TicketLog()
    {
        $query = " SELECT T.*, C.CATEGORY, D.DIVISI, S.STATUS,
        to_char(T.DATE_INSERT,'dd-mm-yyy hh24:mi') DATE_INSERT, to_char(T.DATE_SOLVE, 'dd-mm-yy hh24:mi') DATE_SOLVE, to_char(T.UPDATE_TIME, 'dd-mm-yy hh24:mi') UPDATE_TIME
                        FROM TICKET_LOG  T
                    JOIN CATEGORY C ON T.ID_CATEGORY = C.ID_CATEGORY
                    JOIN DIVISI D ON T.ID_DIVISI = D.ID_DIVISI
                    JOIN STATUS_PROBLEM S ON T.ID_STATUS = S.ID_STATUS
                    ORDER BY T.ID_TICKET_LOG ASC";
        return $this->db->query($query)->result_array();
    }

    //detail ticket Log
    public function detailsLog($id)
    {
        $query = " SELECT T.*, C.CATEGORY, D.DIVISI, S.STATUS
                        FROM TICKET_LOG  T
                    JOIN CATEGORY C ON T.ID_CATEGORY = C.ID_CATEGORY
                    JOIN DIVISI D ON T.ID_DIVISI = D.ID_DIVISI
                    JOIN STATUS_PROBLEM S ON T.ID_STATUS = S.ID_STATUS
                    WHERE T.ID_TICKET_LOG = " . "'" . $id . "'";
        // $query = " SELECT T.*, C.CATEGORY, D.DIVISI, S.STATUS, K.TECHNICIAN_NAME
        //                 FROM TICKET_LOG  T
        //             JOIN CATEGORY C ON T.ID_CATEGORY = C.ID_CATEGORY
        //             JOIN DIVISI D ON T.ID_DIVISI = D.ID_DIVISI
        //             JOIN STATUS_PROBLEM S ON T.ID_STATUS = S.ID_STATUS
        //             JOIN TECHNICIAN K ON T.ID_TECHNICIAN = K.ID_TECHNICIAN
        //             WHERE T.ID_TICKET_LOG = " . "'" . $id . "'";
        return $this->db->query($query)->row_array();
    }
   
}

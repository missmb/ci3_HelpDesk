<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Ticket_Model extends CI_Model
{

    //get all data ticket
    public function Ticket()
    {
        $query = " SELECT T.*, C.CATEGORY, D.DIVISI, S.STATUS
                        FROM TICKET  T
                    JOIN CATEGORY C ON T.ID_CATEGORY = C.ID_CATEGORY
                    JOIN DIVISI D ON T.ID_DIVISI = D.ID_DIVISI
                    JOIN STATUS_PROBLEM S ON T.ID_STATUS = S.ID_STATUS
                    ORDER BY T.ID_TICKET ASC";
        return $this->db->query($query)->result_array();
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
            'ID_STATUS' => 1,
            //get time now
            'DATE_INSERT' => Date('d-M-y')
            // 'DATE_INSERT' => Date('d-M-y h:i:s')
        ]);
    }

    //Delete Ticket
    public function Delete($id)
    {
        $this->db->delete('TICKET', array('ID_TICKET' => $id));
    }
}

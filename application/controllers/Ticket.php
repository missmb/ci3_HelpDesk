<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ticket extends CI_Controller
{

    //ticket list table
    public function index()
    {
        $data['title'] = 'Ticket';
        $data['user'] = $this->db->get_where('USER_SYS', ['EMAIL' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get('USER_MENU')->result_array();
        $data['ticket'] = $this->Ticket_Model->Ticket();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('ticket/ticket', $data);
        $this->load->view('template/footer', $data);
    }

    public function add()
    {
        $data['title'] = 'Add Ticket';
        $data['user'] = $this->db->get_where('USER_SYS', ['EMAIL' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get('USER_MENU')->result_array();
        //get all data from table divisi
        $data['divisi'] = $this->db->get('DIVISI')->result_array();
        //get all data from table category
        $data['category'] = $this->db->get('CATEGORY')->result_array();
        //get all data from table technician
        $data['technician'] = $this->db->get('TECHNICIAN')->result_array();

        $this->form_validation->set_rules('user_complain', 'User Complain', 'required');
        $this->form_validation->set_rules('contact', 'Contact', 'required');
        $this->form_validation->set_rules('divisi', 'Divisi', 'required');
        $this->form_validation->set_rules('place', 'Place', 'required');
        $this->form_validation->set_rules('category', 'Category', 'required');

        if ($this->form_validation->run() == false) {
            // run while nothing validation
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/topbar', $data);
            $this->load->view('ticket/add_ticket', $data);
            $this->load->view('template/footer', $data);
        } else {
            $this->Ticket_Model->Add();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New Ticket added!</div>');
            redirect('ticket');
        }
    }

    public function edit($id)
    {
        
    }

    public function detail($id)
    {

    }

    public function delete($id)
    {
        $this->Ticket_Model->Delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Success Delete Ticket!</div>');
        redirect('ticket');
    }
}

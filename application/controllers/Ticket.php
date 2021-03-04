<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ticket extends CI_Controller
{

    //ticket list table
    public function index()
    {
        $data['title'] = 'Ticket';
        $data['user'] = $this->db->get_where('USER_SYS', ['EMAIL' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->Admin_Model->Sidebar();
        $data['ticket'] = $this->Ticket_Model->Ticket();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('ticket/ticket', $data);
        $this->load->view('template/footer', $data);
    }

    public function search()
    {
        //ambil data keyword
        if ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
        }
    }

    public function add()
    {
        $data['title'] = 'Add Ticket';
        $data['user'] = $this->db->get_where('USER_SYS', ['EMAIL' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->Admin_Model->Sidebar();
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
            //Insert Data Ticket
            $this->Ticket_Model->Add();

            if ($this->input->post('technician') != null) {
                //Send Email to Technician
                $this->_sendEmail();
            }

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New Ticket added!</div>');
            redirect('ticket');
        }
    }

    public function edit($id)
    {
    }

    public function detail($id)
    {
        $data['title'] = 'Detail Ticket';
        $data['user'] = $this->db->get_where('USER_SYS', ['EMAIL' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get('USER_MENU')->result_array();
        $data['ticket'] = $this->Ticket_Model->details($id);
        $data['id'] = $this->db->get_where('TICKET', ['ID_TICKET' => $id])->row_array();
        //var_dump($data['ticket']);
        //die();


        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('ticket/detail_ticket', $data);
        $this->load->view('template/footer', $data);
    }

    public function delete($id)
    {
        $this->Ticket_Model->Delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Success Delete Ticket!</div>');
        redirect('ticket');
    }


    private function _sendEmail()
    {
        if ($this->input->post('technician') != null) {
            $email = $this->Ticket_Model->EmailTechnician($this->input->post('technician'));
        }
        // var_dump($token);die();
        $config  = [
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'maratulbariroh3630@gmail.com',
            'smtp_pass' => "Mojowarno'Menganto210",
            'smtp_port' => 465,
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'newline'   => "\r\n",
        ];

        $this->email->initialize($config);

        $this->email->from('maratulbariroh3630@gmail.com', 'missMb');
        $this->email->to($email['EMAIL']);

        //Data Email
        $this->email->subject('Problem');
        $this->email->message('We get Problem here, can you fix this ? <br> The Problem is :' . $this->input->post('detail') . 'if any question you have, please contact reply here <br> or you can contact customer' . $this->input->post('contact'));

        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
        
    }
}
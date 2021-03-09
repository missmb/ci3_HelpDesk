<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ticket extends CI_Controller
{

    //ticket list table
    public function index()
    {
        // var_dump($this->db->select('ID_TICKET')->from('TICKET')->order_by('ID_TICKET',"desc")->limit(1));die();
        $data['title'] = 'Ticket';
        $data['user'] = $this->db->get_where('USER_SYS', ['EMAIL' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->Admin_Model->Sidebar();
        $data['ticket'] = $this->Ticket_Model->Ticket();
        //count all data from table ticket
        $data['result'] =  $this->db->count_all('TICKET');

        //pagination
        // $jumlah_data = $this->m_data->jumlah_data();
        // $jumlah_data = $this->db->count_all('TICKET');
        // $config['base_url'] = base_url() . 'index.php/welcome/index/';
        // $config['total_rows'] = $jumlah_data;
        // $config['per_page'] = 10;
        // $from = $this->uri->segment(3);
        // $this->pagination->initialize($config);
        // $data['data'] = $this->m_data->data($config['per_page'], $from);
        // $data['data'] = $this->Ticket_Model->data($config['per_page'], $from);
        // $data['ticket'] = $this->Ticket_Model->Ticket($config['per_page'], $from);

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('ticket/ticket', $data);
        $this->load->view('template/footer', $data);
    }

    //Fitur Search Ticket
    public function search()
    {
        $data['title'] = 'Ticket';
        $data['user'] = $this->db->get_where('USER_SYS', ['EMAIL' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->Admin_Model->Sidebar();
        //get keyword search
        $keyword = $this->input->post('keyword');
        $data['ticket'] = $this->Ticket_Model->get_keyword($keyword);
        // $aa= $this->db->select('*')->from('TICKET')->like('ID_TICKET', $keyword)->result_array();
        //count all data from table ticket
        $data['result'] =  count($this->Ticket_Model->get_keyword($keyword));

        // var_dump($data['ticket']);die();
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
            //Insert Data TicketLog
            $this->Ticket_Model->AddLog();
            //Insert Data TicketLog
            $this->Ticket_Model->AddTransaksi();

            if ($this->input->post('technician') != null) {
                //Send Email to Technician
                // $this->_sendEmail();
            }

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New Ticket added!</div>');
            redirect('ticket');
        }
    }

    public function detail($id)
    {
        $data['title'] = 'Detail Ticket';
        $data['user'] = $this->db->get_where('USER_SYS', ['EMAIL' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get('USER_MENU')->result_array();
        $data['ticket'] = $this->Ticket_Model->details($id);
        $data['id'] = $this->db->get_where('TICKET', ['ID_TICKET' => $id])->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('ticket/detail_ticket', $data);
        $this->load->view('template/footer', $data);
    }

    // print detail ticket
    public function print_ticket($id)
    {
        $data['title'] = 'Detail Ticket';
        $data['user'] = $this->db->get_where('USER_SYS', ['EMAIL' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get('USER_MENU')->result_array();
        $data['ticket'] = $this->Ticket_Model->details($id);
        $data['id'] = $this->db->get_where('TICKET', ['ID_TICKET' => $id])->row_array();

        $this->load->view('ticket/print_ticket', $data);
    }


    // ------------------------------ Ticket Log --------------------------------

    //list of tickets log
    public function ticketlog()
    {
        $data['title'] = 'Ticket Log';
        $data['user'] = $this->db->get_where('USER_SYS', ['EMAIL' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->Admin_Model->Sidebar();
        $data['ticket'] = $this->Ticket_Model->TicketLog();
        $data['result'] =  $this->db->count_all('TICKET_LOG');

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('ticketLog/index', $data);
        $this->load->view('template/footer', $data);
    }

    //Search of tickets log
    public function searchLog()
    {
        $data['title'] = 'Ticket Log';
        $data['user'] = $this->db->get_where('USER_SYS', ['EMAIL' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->Admin_Model->Sidebar();
        //get keyword search
        $keywordlog = $this->input->post('keywordlog');
        $data['ticket'] = $this->Ticket_Model->searchLog($keywordlog);
        //count all data from table ticket_log
        $data['result'] =  count($this->Ticket_Model->searchLog($keywordlog));

        // var_dump($data['ticket']);die();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('ticketLog/index', $data);
        $this->load->view('template/footer', $data);
    }

    //Detail Ticket Login
    public function detailLog($id)
    {
        $data['title'] = 'Detail Ticket';
        $data['user'] = $this->db->get_where('USER_SYS', ['EMAIL' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get('USER_MENU')->result_array();
        $data['ticket'] = $this->Ticket_Model->detailsLog($id);

        // var_dump($data['ticket']);die();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('ticketLog/detail_ticketlog', $data);
        $this->load->view('template/footer', $data);
    }
    
    public function updateStatus($data){
        $this->db->insert();
    }

    // ------------------------------ Transaksi --------------------------------
    //List of Transaksi 
    public function transaksi()
    {
        $data['title'] = 'Transaksi';
        $data['user'] = $this->db->get_where('USER_SYS', ['EMAIL' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->Admin_Model->Sidebar();
        $data['transaksi'] = $this->Ticket_Model->Transaksi();
        $data['result'] =  $this->db->count_all('TRANSAKSI');

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('transaksi/index', $data);
        $this->load->view('template/footer', $data);
    }

    //Search of transaksi
    public function searchTransaksi()
    {
        $data['title'] = 'Transaksi';
        $data['user'] = $this->db->get_where('USER_SYS', ['EMAIL' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->Admin_Model->Sidebar();
        //get keyword search
        $keywordlog = $this->input->post('keywordlog');
        $data['transaksi'] = $this->Ticket_Model->searchTransaksi($keywordlog);
        //count all data from table transaksi
        $data['result'] =  count($this->Ticket_Model->searchTransaksi($keywordlog));

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('transaksi/index', $data);
        $this->load->view('template/footer', $data);
    }

    //Edit Transaksi
    public function editTransaksi($id)
    {
        $data['title'] = 'Edit Transaksi';
        $data['user'] = $this->db->get_where('USER_SYS', ['EMAIL' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->Admin_Model->Sidebar();
        //get all data from table divisi
        $data['divisi'] = $this->db->get('DIVISI')->result_array();
        //get all data from table category
        $data['category'] = $this->db->get('CATEGORY')->result_array();
        //get all data from table technician
        $data['technician'] = $this->db->get('TECHNICIAN')->result_array();
        //get all data from table status
        $data['status'] = $this->db->get('STATUS_PROBLEM')->result_array();
        $data['transaksi'] = $this->Ticket_Model->detailsTransaksi($id);

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
            $this->load->view('transaksi/edit_transaksi', $data);
            $this->load->view('template/footer', $data);
        } else {
            // $this->Ticket_Model->edit_ticket;
            $this->Ticket_Model->updateTransaksi($id);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Edit Transaksi Success!</div>');
            redirect('ticket/transaksi');
        }
    }

    //Detail Ticket Login
    public function detailTransaksi($id)
    {
        $data['title'] = 'Detail Ticket';
        $data['user'] = $this->db->get_where('USER_SYS', ['EMAIL' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get('USER_MENU')->result_array();
        $data['transaksi'] = $this->Ticket_Model->detailsTransaksi($id);

        // var_dump($data['ticket']);die();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('transaksi/detail_transaksi', $data);
        $this->load->view('template/footer', $data);
    }


    public function deleteTransaksi($id)
    {
        $this->Ticket_Model->DeleteTransaksi($id);
        $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Success Delete Transaksi!</div>');
        redirect('ticket/transaksi');
    }

    // send email to Technician
    private function _sendEmail()
    {
        if ($this->input->post('technician') != null) {
            $email = $this->Ticket_Model->EmailTechnician($this->input->post('technician'));
        }

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

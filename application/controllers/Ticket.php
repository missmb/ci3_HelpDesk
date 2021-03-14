<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ticket extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    //ticket list table
    public function index()
    {
        // var_dump($this->db->select('ID_TICKET')->from('TICKET')->order_by('ID_TICKET',"desc")->limit(1));die();
        $data['title'] = 'Ticket';
        $data['user'] = $this->db->get_where('USER_SYS', ['EMAIL' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->Admin_Model->Sidebar();
        //count all data from table ticket
        $data['result'] =  $this->db->count_all('TICKET');

        //pagination
        $config['base_url'] = base_url() . 'ticket/index';
        $config['total_rows'] = $this->db->count_all('TICKET'); //total row
        $config['per_page'] = 5;  //show record per page
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        // Create Style pagination for BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['data'] = $this->Ticket_Model->data($config["per_page"], $data['page']);

        $data['pagination'] = $this->pagination->create_links();


        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('ticket/ticket', $data);
        $this->load->view('template/footer', $data);
    }

    //Fitur Search Ticket
    public function search()
    {
        //get keyword search
        $keyword = $this->input->post('keyword');

        //pagination
        $config['base_url'] = base_url() . 'ticket/index';
        $config['total_rows'] = count($this->Ticket_Model->result_get_keyword($keyword));; //total row
        $config['per_page'] = 15;  //show record per page
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        // Create Style pagination for BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        // $data['data'] = $this->Ticket_Model->data($config["per_page"], $data['page']);           
        $data['data'] = $this->Ticket_Model->get_keyword($keyword, $config["per_page"], $data['page']);

        $data['pagination'] = $this->pagination->create_links();


        $data['title'] = 'Ticket';
        $data['user'] = $this->db->get_where('USER_SYS', ['EMAIL' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->Admin_Model->Sidebar();
        //get keyword search
        // $keyword = $this->input->post('keyword');
        // $data['ticket'] = $this->Ticket_Model->get_keyword($keyword);
        // $aa= $this->db->select('*')->from('TICKET')->like('ID_TICKET', $keyword)->result_array();
        //count all data from table ticket
        $data['result'] =  count($this->Ticket_Model->get_keyword($keyword, $config["per_page"], $data['page']));

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
        $data['title'] = 'Change Status';
        $data['user'] = $this->db->get_where('USER_SYS', ['EMAIL' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get('USER_MENU')->result_array();
        $data['ticket'] = $this->Ticket_Model->details($id);
        $data['status'] = $this->db->get('STATUS_PROBLEM')->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('ticket/detail_ticket', $data);
        $this->load->view('template/footer', $data);
        
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Ticket';
        $data['user'] = $this->db->get_where('USER_SYS', ['EMAIL' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->Admin_Model->Sidebar();
        //get all data from table divisi
        $data['divisi'] = $this->db->get('DIVISI')->result_array();
        //get all data from table category
        $data['category'] = $this->db->get('CATEGORY')->result_array();
        //get all data from table technician
        $data['technician'] = $this->db->get('TECHNICIAN')->result_array();
        $data['ticket'] = $this->Ticket_Model->details($id);

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
            $this->load->view('ticket/edit_ticket', $data);
            $this->load->view('template/footer', $data);
        } else {
            // $this->Ticket_Model->edit_ticket;
            $this->Ticket_Model->updatetiket($id);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Edit Ticket Success!</div>');
            redirect('ticket');
        }
    }

    public function delete($id)
    {
        var_dump($id);die();

        $this->Ticket_Model->Delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Success Delete Ticket!</div>');
        redirect('ticket');
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
        $data['result'] =  $this->db->count_all('TICKET_LOG');

        //pagination
        $config['base_url'] = base_url() . 'ticket/ticketlog';
        $config['total_rows'] = $this->db->count_all('TICKET_LOG'); //total row
        $config['per_page'] = 8;  //show record per page
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        // Create Style pagination for BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['data'] = $this->Ticket_Model->dataLog($config["per_page"], $data['page']);

        $data['pagination'] = $this->pagination->create_links();


        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('ticketLog/index', $data);
        $this->load->view('template/footer', $data);
    }

    //Search of tickets log
    public function searchLog()
    {
        //get keyword search
        $keywordlog = $this->input->post('keywordlog');

        //pagination
        $config['base_url'] = base_url() . 'ticket/searchlog';
        $config['total_rows'] = count($this->Ticket_Model->result_searchLog($keywordlog)); //total row
        $config['per_page'] = 30;  //show record per page
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        // Create Style pagination for BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        // $data['data'] = $this->Ticket_Model->data($config["per_page"], $data['page']);           

        $data['data'] = $this->Ticket_Model->searchLog($keywordlog, $config["per_page"], $data['page']);
        $data['pagination'] = $this->pagination->create_links();

        $data['title'] = 'Ticket Log';
        $data['user'] = $this->db->get_where('USER_SYS', ['EMAIL' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->Admin_Model->Sidebar();

        //count all data from table ticket_log
        $data['result'] =  count($this->Ticket_Model->searchLog($keywordlog, $config["per_page"], $data['page']));

        // var_dump($data['ticket']);die();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('ticketLog/index', $data);
        $this->load->view('template/footer', $data);
    }

    //Detail Ticket Log
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


    // ------------------------------ Transaksi --------------------------------
    //List of Transaksi 
    public function transaksi()
    {
        $data['title'] = 'Transaksi';
        $data['user'] = $this->db->get_where('USER_SYS', ['EMAIL' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->Admin_Model->Sidebar();
        $data['result'] =  $this->db->count_all('TRANSAKSI');


        //pagination
        $config['base_url'] = base_url() . 'ticket/transaksi';
        $config['total_rows'] = $this->db->count_all('TICKET'); //total row
        $config['per_page'] = 5;  //show record per page
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        // Create Style pagination for BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['data'] = $this->Ticket_Model->dataTransaksi($config["per_page"], $data['page']);

        $data['pagination'] = $this->pagination->create_links();


        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('transaksi/index', $data);
        $this->load->view('template/footer', $data);
    }

    //Search of transaksi
    public function searchTransaksi()
    {
        //get keyword search
        $keywordlog = $this->input->post('keywordlog');

        //pagination
        $config['base_url'] = base_url() . 'ticket/searchtransaksi';
        $config['total_rows'] = count($this->Ticket_Model->result_searchTransaksi($keywordlog)); //total row
        $config['per_page'] = 15;  //show record per page
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        // Create Style pagination for BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['data'] = $this->Ticket_Model->searchTransaksi($keywordlog, $config["per_page"], $data['page']);

        $data['pagination'] = $this->pagination->create_links();

        $data['title'] = 'Transaksi';
        $data['user'] = $this->db->get_where('USER_SYS', ['EMAIL' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->Admin_Model->Sidebar();

        //count all data from table transaksi
        $data['result'] =  count($this->Ticket_Model->searchTransaksi($keywordlog, $config["per_page"], $data['page']));

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('transaksi/index', $data);
        $this->load->view('template/footer', $data);
    }

    //Change Status Transaksi
    public function detailTransaksi($id)
    {
        $data['title'] = 'Change Status';
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
            $this->load->view('transaksi/detail_transaksi', $data);
            $this->load->view('template/footer', $data);
        } else {
            // $this->Ticket_Model->edit_ticket;
            $this->Ticket_Model->changeStatus($id);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Edit Transaksi Success!</div>');
            redirect('ticket/transaksi');
        }
    }

    public function changeStatus($id){
        $this->Ticket_Model->updateTransaksi($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Edit Status Success!</div>');
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

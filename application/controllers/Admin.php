<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    //Admin Page
    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('USER_SYS', ['EMAIL' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->Admin_Model->Sidebar();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        // $this->load->view('admin/index', $data);
        $this->load->view('template/footer', $data);
    }

    //Role Page
    public function Role()
    {
        $data['title'] = 'Role';
        $data['user'] = $this->db->get_where('USER_SYS', ['EMAIL' => $this->session->userdata('email')])->row_array();
        $data['role'] = $this->db->get('USER_ROLE')->result_array();
        $data['menu'] = $this->Admin_Model->Sidebar();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('admin/role', $data);
        $this->load->view('template/footer', $data);
    }

    public function roleAccess($role_id)
    {
        $data['title'] = 'Role Access';
        $data['user'] = $this->db->get_where('USER_SYS', ['EMAIL' => $this->session->userdata('email')])->row_array();
        $data['role'] = $this->db->get_where('USER_ROLE', ['ROLE_ID' => $role_id])->row_array();

        $this->db->where('MENU_ID !=', 1);
        $data['menu'] = $this->Admin_Model->Sidebar();
    
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('admin/role-access', $data);
        $this->load->view('template/footer', $data);
    }


    public function changeAccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'ROLE_ID' => $role_id,
            'MENU_ID' => $menu_id
        ];

        $result = $this->db->get_where('USER_ACCESS_MENU', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('USER_ACCESS_MENU', $data);
        } else {
            $this->db->delete('USER_ACCESS_MENU', $data);
        }

        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Access Changed! </div>');
    }

    //Menu Management
    public function Menu()
    {
        $data['title'] = 'Menu Management';
        $data['user'] = $this->db->get_where('USER_SYS', ['EMAIL' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->Admin_Model->Sidebar();

        $this->form_validation->set_rules('menu', 'Menu', 'required');

        if ($this->form_validation->run() == false) {

            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/topbar', $data);
            $this->load->view('admin/menu/index', $data);
            $this->load->view('template/footer', $data);
        } else {
            $this->db->insert('USER_MENU', ['MENU' => $this->input->post('menu')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New menu added!</div>');
            redirect('admin/menu');
        }
    }

    public function deleteMenu($id)
    {
        $this->db->delete('USER_MENU', array('MENU_ID' => $id));
        redirect('admin/menu');
    }

    public function editMenu()
    {
        $data['title'] = 'Edit Menu';
        $data['user'] = $this->db->get_where('USER_SYS', ['EMAIL' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->Admin_Model->Sidebar();
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('menu', 'Menu', 'is_unique[USER_MENU.MENU]', [
            'is_unique' => 'This menu aready exist',
        ]);

        if ($this->form_validation->run() == false) {

            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/topbar', $data);
            $this->load->view('admin/menu/index', $data);
            $this->load->view('template/footer', $data);
        } else {
            $id = $this->input->post('menu_id');
            $menu = $this->input->post('menu');
            $this->Admin_Model->update($id, $menu);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your Menu has been updated!</div>');
            redirect('admin/menu');
        }
    }

    //Sub Menu Page
    public function submenu()
    {
        $data['title'] = 'SubMenu Management';
        $data['user'] = $this->db->get_where('USER_SYS', ['EMAIL' => $this->session->userdata('email')])->row_array();
        $this->load->model('Admin_Model', 'menu'); //alias menu

        // $data['subMenu'] = $this->db->get('user_sub_menu')->result_array();
        $data['subMenu'] = $this->menu->getSubMenu();
        $data['menu'] = $this->Admin_Model->Sidebar();

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu_id', 'required');
        $this->form_validation->set_rules('url', 'Url', 'required');
        $this->form_validation->set_rules('icon', 'Icon', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/topbar', $data);
            $this->load->view('admin/menu/submenu', $data);
            $this->load->view('template/footer', $data);
        } else {
            $data = [
                'TITLE' => $this->input->post('title'),
                'MENU_ID' => $this->input->post('menu_id'),
                'URL' => $this->input->post('url'),
                'ICON' => $this->input->post('icon'),
                'IS_ACTIVE' => $this->input->post('is_active')
            ];
            $this->db->insert('USER_SUB_MENU', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New sub menu added!</div>');
            redirect('admin/submenu');
        }
    }

    function deleteSubMenu($id)
    {
        $this->db->delete('USER_SUB_MENU', array('SUB_ID' => $id));
        redirect('admin/submenu');
    }

    public function editSubMenu()
    {
        $data['title'] = 'Edit Menu';
        $data['user'] = $this->db->get_where('USER_SYS', ['EMAIL' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->Admin_Model->Sidebar();
        if ($this->input->post('title') > 0) {

            $this->form_validation->set_rules('title', 'title', 'is_unique[user_sub_menu.title]', [
                'is_unique' => 'This menu aready exist',
            ]);

            if ($this->form_validation->run() == false) {

                $this->load->view('template/header', $data);
                $this->load->view('template/sidebar', $data);
                $this->load->view('template/topbar', $data);
                $this->load->view('admin/menu/index', $data);
                $this->load->view('template/footer', $data);
            } else {
                $id = $this->input->post('id');
                $menu_id = $this->input->post('menu_id');
                $title = $this->input->post('title');
                $url = $this->input->post('url');
                $icon = $this->input->post('icon');
                $is_active = $this->input->post('is_active');
                $this->Admin_Model->updateSubMenu($id, $menu_id, $title, $url, $icon, $is_active);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your SubMenu has been updated!</div>');
                redirect('admin/submenu');
            }
        } else {
            $id = $this->input->post('id');
            $menu_id = $this->input->post('menu_id');
            $title = $this->input->post('title');
            $url = $this->input->post('url');
            $icon = $this->input->post('icon');
            $is_active = $this->input->post('is_active');
            $this->Admin_Model->updateSubMenu($id, $menu_id, $title, $url, $icon, $is_active);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your SubMenu has been updated!</div>');
            redirect('admin/submenu');
        }
    }
}

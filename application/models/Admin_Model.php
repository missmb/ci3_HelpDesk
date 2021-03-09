<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin_Model extends CI_Model
{

    public function getSubMenu()
    {
        $query = " SELECT USER_SUB_MENU.*, USER_MENU.
        MENU
        FROM USER_SUB_MENU JOIN USER_MENU
        ON USER_SUB_MENU.MENU_ID = USER_MENU.MENU_ID";

        return $this->db->query($query)->result_array();
    }

    public function updateSubMenu($id, $menu_id, $title, $url, $icon, $is_active)
    {
        $data = array(
            'MENU_ID' => $menu_id,
            'TITLE' => $title,
            'URL' => $url,
            'ICON' => $icon,
            'IS_ACTIVE' => $is_active,
        );
        $this->db->where('SUB_ID', $id);
        $this->db->update('USER_SUB_MENU', $data);
    }

    public function update($id, $menu)
    {
        $data = array(
            'MENU' => $menu
        );
        $this->db->where('MENU_ID', $id);
        $this->db->update('USER_MENU', $data);
    }

    public function Sidebar()
    {
        // $userAccess = $ci->db->get_where('USER_ACCESS_MENU', [
        //     'ROLE_ID' => $role_id,
        //     'MENU_ID' => $menu_id
        // ]);
        // get mwnu_id where user role is (session)
        $userAccess = 'SELECT * FROM USER_ACCESS_MENU WHERE ROLE_ID = '. $this->session->userdata('role_id') ; 
        $each = $this->db->query($userAccess)->result_array();
        // foreach ($each['MENU_ID'] as $v){
        //     // $menu = 'SELECT * FROM USER_MENU WHERE MENU_ID = '. $v;
        //     echo $v;
        // }
        // $menu = 'SELECT * FROM USER_MENU WHERE MENU_ID = '. $userAccess;
        // return $this->db->get('USER_MENU')->result_array();
        return $this->db->query($userAccess)->result_array();
        // var_dump($each['MENU_ID']);die(); 
        // var_dump($this->db->query($menu)->result_array());die(); 
        // var_dump($this->db->query($userAccess)->result_array());die(); 
    }
    
    public function getAllUsers(){
        return $this->db->get('USER_SYS')->result_array();
    }
}
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
        return $this->db->get('USER_MENU')->result_array();
    }
    
    public function getAllUsers(){
        return $this->db->get('USER_SYS')->result_array();
    }
}
<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User_Model extends CI_Model
{
    public function SumUser(){
        return $this->db->count_all('USER_SYS');
    }

    public function SumTicket(){
        return $this->db->count_all('TICKET');
    }
}
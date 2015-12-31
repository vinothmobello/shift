<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller
{
    public function index()
    {
        $this->load->view('welcome_message');
    }

    public function registration()
    {
        $error = array();
        if (($this->input->post('user_type')) && ($this->input->post('user_type') != "")) {
            $user_type = $this->input->post('user_type');
            if ($user_type == USER_TYPE_COMPANY) {

            } elseif ($user_type == USER_TYPE_JOB_SEEKER) {

            }
        }
    }
}
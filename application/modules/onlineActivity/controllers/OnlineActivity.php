<?php
defined('BASEPATH') or exit('No direct script access allowed');

class OnlineActivity extends MY_Controller
{
    public function index()
    { 
        if (isset($_SESSION['userdata'])) {
            $session = $_SESSION['userdata'];
            if ($session->user_type == "2") {
                $this->student_load_page('onlineActivity');
            } else {
                redirect(base_url());
            }
        } else redirect(base_url('errors'));
    }
}

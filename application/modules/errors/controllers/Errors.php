<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Errors extends MY_Controller {
	public function index(){ 
        $this->login_load_page('errors');
	}
}


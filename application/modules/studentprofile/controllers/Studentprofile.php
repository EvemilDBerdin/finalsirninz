<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Studentprofile extends MY_Controller
{
	public function index()
	{ 
		if (isset($_SESSION['userdata'])) {
			$session = $_SESSION['userdata'];
			if ($session->user_type == "2") {
				$options['where'] = array(
					'user_type' => 1,
					'user_status' => 0
				);

				$options2['where'] = array(
					'user_type' => 1
				);
				$all_data = getrow('users', $options2);
				$all_registered = getrow('users', $options);
				$data['all_data'] = count($all_data);
				$data['all_registered'] = count($all_registered);
				$data['all_deleted'] = count($all_data) - count($all_registered);

				$this->student_load_page('studentprofile', $data);
			} else {
				redirect(base_url());
			}
		} else redirect(base_url('errors'));
	}
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends MY_Controller
{
	public function index()
	{
		if (isset($_SESSION['userdata'])) {
			$session = $_SESSION['userdata'];
			if ($session->user_type == "1") {
				$options['where'] = array(
					'user_type' => 2,
					'user_status' => 0
				);

				$options2['where'] = array(
					'user_type' => 2
				);
				$options3['where'] = array(
					'exam_status' => 0 //activated
				);

				$all_data = getrow('users', $options2);
				$all_registered = getrow('users', $options);
				$data['exam_result'] = getrow('exam', $options3);
				$data['total_epassed'] = 0;
				$data['total_efailed'] = 0;
				foreach ($data['exam_result'] as $key => $value){ 
					if($value['is_passed'] == 1){
						$data['total_epassed']++;
					} 
					else {
						$data['total_efailed']++;
					} 
				} 
				$data['all_data'] = count($all_data);
				$data['all_registered'] = count($all_registered);
				$data['all_deleted'] = count($all_data) - count($all_registered);
				
				$this->admin_load_page('admin', $data);
			} else {
				redirect(base_url());
			}
		} else redirect(base_url('errors'));
	}

	public function getAllStudent()
	{
		$limit = $this->input->post('length');
		$offset = $this->input->post('start');
		$search = $this->input->post('search');
		$order = $this->input->post('order');
		$draw = $this->input->post('draw');
		$select = "*";
		$column_order = array(
			'firstname', 'lastname', 'date_of_birth', 'contact', 'email', 'username', 'user_image', 'user_status'
		);

		$join = array();

		$where = array(
			'user_type' => 2, 
		);

		$list = datatables('users', $column_order, $select, $where, $join, $limit, $offset, $search, $order);
		$new_array = array();
		foreach ($list['data'] as $key => $value) {
			$new_array[] = $value;
		}
		$output = array(
			"draw" => $draw,
			"recordsTotal" => $list['count_all'],
			"recordsFiltered" => $list['count'],
			"data" => $new_array,
		);
		json($output);
	}

	public function getAll(){
		$options['where'] = array(
			'user_type' => 2
		);
		$res = getrow('users', $options);
		json($res);
	}
	public function adminNotification()
	{
		$session = $_SESSION['userdata'];
		if ($session->user_type == "1") {
			$options['join'] = array(
				'users' => 'users.users_id = exam.user_id'
			);
			$options['where'] = array(
				'exam_status' => 0
			);
			$res = getrow('exam', $options);
			json($res);
		} else redirect(base_url());
	}

	public function adminNotify($id)
	{
		$session = $_SESSION['userdata'];
		if ($session->user_type == "1") {
			$set = array(
				'is_view' => 1
			);
			$where = array(
				'e_id' => $id
			);
			$res = update('exam', $set, $where);
			if ($res) {
				json('success');
			} else {
				json('failed');
			}
		} else redirect(base_url());
	}
}

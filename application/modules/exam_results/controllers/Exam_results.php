<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Exam_results extends MY_Controller
{
	public function index()
	{
		if (isset($_SESSION['userdata'])) {
			$session = $_SESSION['userdata'];
			if ($session->user_type == "2") {
				$this->student_load_page('exam_results');
			} else {
				redirect(base_url());
			}
		} else redirect(base_url('errors'));
	}

	function ve_result()
	{
		// SELECT * FROM exam JOIN users ON `users`.`users_id` = `exam`.`user_id` WHERE `exam`.`exam_status` = 0 and `users`.`users_id` = 1;

		$session = $_SESSION['userdata'];
		$limit = $this->input->post('length');
		$offset = $this->input->post('start');
		$search = $this->input->post('search');
		$order = $this->input->post('order');
		$draw = $this->input->post('draw');
		$select = "*";
		$column_order = array(
			'exam.exam_type',
			'exam.all_questions',
			'exam.all_correct_answer',
			'exam.duration',
			'exam.date_submitted',
			'exam.is_passed',
			'exam.e_id'
		);
		$join = array(
			'users' => 'users.users_id = exam.user_id'
		);

		$where = array(
			'exam.exam_status' => 0,
			'users.users_id' => $session->users_id
		);

		$list = dataTables('exam', $column_order, $select, $where, $join, $limit, $offset, $search, $order);

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
}

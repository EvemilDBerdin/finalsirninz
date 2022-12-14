<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exam extends MY_Controller {
	public function index(){
		if(isset($_SESSION['userdata'])){
			$session = $_SESSION['userdata'];
			if($session->user_type == "1"){
				$this->admin_load_page('exam');    
			}
			else{
				redirect(base_url());
			}
		}else redirect(base_url('errors'));
	}

    function e_result(){
        $limit = $this->input->post('length');
		$offset = $this->input->post('start');
		$search = $this->input->post('search');
		$order = $this->input->post('order');
		$draw = $this->input->post('draw');
		$select = "*";
        $column_order = array(
			'users.firstname',
			'users.lastname',
			'users.email',
			'exam.exam_type',
			'exam.all_questions', 
			'exam.all_correct_answer', 
			'exam.date_submitted',
			'exam.is_passed',
			'exam.e_id'
		);
		$join = array(
            'users' => 'users.users_id = exam.user_id'
        );
		if($this->input->post('id') == ""){
			$where = array('exam.exam_status' => 0);
		}else{
			$where = array(
				'exam.exam_status' => 0,
				'exam.e_id' => $this->input->post('id')
			);
		}

		$list = datatables('exam',$column_order, $select, $where, $join, $limit, $offset ,$search, $order);

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

	function deleteConfirm(){
		$id = $_POST['examid'];

		$set = array('exam_status' => 1);
        $where = array(
            'e_id' => $id, 
        );

        $result = update('exam', $set, $where);
        if ($result) response(status_res('success'), "", "Exam result has been successfully deleted.");
        else response(status_res('fail'), "", "failed.");
	}
}


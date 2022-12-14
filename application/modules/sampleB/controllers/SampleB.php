<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SampleB extends MY_Controller
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
                $data['information'] = $this->MY_Model->getRows('final_exam', '', 'obj');
                // $data['user_id'] = 
                $this->student_load_page('sampleB', $data);
            } else {
                redirect(base_url());
            }
        } else redirect(base_url('errors'));
    }

    function insertDateStarted()
    {
        date_default_timezone_set("hongkong");
        $where = array(
            'exam_type' => 'Sample B',
            'date_started' =>  date("Y-m-d : G:i:s"), //Y-m-d : h:i:s a
        );
        $id = insert('exam', $where);
        if ($id) {
            $_SESSION['exam_id'] = $id;
            response(200, "", "Exam has been started");
        }
    }

    function sampleBform()
    {
        $id = $_SESSION['exam_id'];
        $session = $_SESSION['userdata'];
        $answer = $_POST['userans'];
        $q_id = $_POST['temp_id'];
        $test = "WHERE";
        $exam = array();

        foreach ($answer as $key =>  $value) {
            $exam[] = $value;
        }

        foreach ($q_id as $key => $value) {
            $test .= " q_id=" . $q_id[$key] . " OR";
        }

        date_default_timezone_set("hongkong");

        $query = "SELECT * FROM final_exam " . $test;
        $temp = rtrim($query, "OR");
        $temp .= ";";
        $exam_details = raw($temp);
        $all_questions = count($exam_details);

        $totalScore = 0;
        foreach ($exam_details as $key => $value) {
            for ($x = 0; $x < count($exam); $x++) {
                if ($key == $x) {
                    $score = $this->check_user_answer($exam_details[$key]['q_id'], $exam[$x]); //,$userAnswer[$key] 

                    if ($score) {
                        $totalScore++; //para maihap ang score, gkan sa kani nga function 'public function check_user_answer'
                    }

                    $where = array(
                        'exam_id' => $id,
                        'questionaire_id' =>  $exam_details[$key]['q_id'],
                        'user_answer' => $exam[$x], //'userans'
                        'user_id' => $_POST['temp_user_id']
                    );
                    break;
                }
            }
            insert('exam_details', $where);
        }

        $is_passed = $totalScore / $all_questions;


        if ($is_passed < 0.6) {
            $is_passed = 0;
        } else {
            $is_passed = 1;
        }


        response(200, "", "Exam has been submitted successfully.");
        $set = array( //insert database 
            'all_correct_answer' => $totalScore,
            'user_id' => $session->users_id,
            'all_questions' => $all_questions,
            'date_submitted' => date("Y-m-d : G:i:s"),
            'is_passed' => $is_passed
        );
        $id = $_POST['exam_id'];
        $where = "e_id = '$id'";

        update('exam', $set, $where);
    }


    public function check_user_answer($q_id, $user_answer)
    { //kuha sa question id ug sa answer
        $response = false;
        $param['where'] = "q_id = '$q_id' and answer = '$user_answer'";
        $result = getrow('final_exam', $param, 'row');

        if ($result) {
            $response = true;
        }
        return $response;

        // echo print_r($response);
    }
}

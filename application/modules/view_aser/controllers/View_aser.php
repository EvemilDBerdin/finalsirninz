<?php
defined('BASEPATH') or exit('No direct script access allowed');

class View_aser extends MY_Controller
{
    public function index()
    { 
        if (isset($_SESSION['userdata'])) {
            $session = $_SESSION['userdata'];
            $data['data'] = array();

            $query = "SELECT * FROM exam INNER JOIN exam_details INNER JOIN questionaire WHERE exam.e_id =" . $_GET['e_id'] . " AND exam_details.exam_id = exam.e_id AND exam_details.questionaire_id=questionaire.q_id AND exam.exam_status = 0";
            $result = raw($query);

            foreach ($result as $key => $value) {
                $data['data'][$key] = $value;
            }

            if ($session->user_type == "1") {
                $auth = $_GET['auth'];

                if ($auth == 'Assk2j^%SFYUYG^Aiusdua87FSAdioua29389OASIDg878782ijjsd!$jidsa787875QsudS$9sdsfa') {
                    $this->admin_load_page('view_aser', $data);
                } else {
                    redirect(base_url());
                }
            } else {
                redirect(base_url());
            }
        } else redirect(base_url('errors'));
    }
}

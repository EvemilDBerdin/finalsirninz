<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Manage extends MY_Controller
{
    public function index()
    { 
        if (isset($_SESSION['userdata'])) {
            $session = $_SESSION['userdata'];
            if ($session->user_type == "1") {
                $this->admin_load_page('manage');
            } else {
                redirect(base_url());
            }
        } else redirect(base_url('errors'));
    }
    function restoreStudent()
    {
        $id = $_POST['users_id'];

        $set = array('user_status' => 0);
        $where = array(
            'users_id' => $id,
            'user_type' => 2
        );

        $result = update('users', $set, $where);
        if ($result) response(status_res('success'), "", "Student has been successfully restored.");
        else response(status_res('fail'), "", "failed.");
    }
    function deleteFromDataBase()
    {
        $id = $_POST['users_id'];

        $where = array(
            'users_id' => $id
        );

        $result = delete('users', $where);
        if ($result) response(status_res('success'), "", "Student has been successfully deleted.");
        else response(status_res('fail'), "", "failed.");
    }
    function delete_student()
    {
        $id = $_POST['users_id'];

        $set = array('user_status' => 1);
        $where = array(
            'users_id' => $id,
            'user_type' => 2
        );

        $result = update('users', $set, $where);
        if ($result) response(status_res('success'), "", "Student has been successfully disabled.");
        else response(status_res('fail'), "", "failed.");
    }

    function editStudentAdminForm()
    {
        $data = array();
        foreach ($_POST as $key => $value) {
            $data[$key] = $value;
        }
        $data['user_type'] = 2;
        $data['user_status'] = 0;

        $where = array(
            'users_id' => $data['users_id']
        );

        $options['where'] = array(
            'email' => $data['email'],
            'user_status' => 0,
            'user_type' => 2
        );

        $options_verification['where'] = array(
            'users_id' => $data['users_id'],
            'user_type' => 2,
            'user_status' => 0
        );

        $res = email_exists('users', $options, $options_verification);

        if ($res) response(status_res('fail'), "", "Email already exists. please choose another one.");
        else {
            if(!empty($_FILES['fileInput']['name'])){
                $data['user_image'] = $_FILES['fileInput']['name'];
                
                $success = $this->do_upload();
    
                if ($success == true) {
                    $result = update('users', $data, $where);
                    if($result) response(status_res('success'), "", "Student updated successfully.");
                    else response(status_res('fail'), "", "Fail to update.");
                } else {
                    response(status_res('fail'), "", "Fail to upload max 25 mb.");
                }
            }
            else{
                $result = update('users', $data, $where);
                if ($result) response(status_res('success'), "", "Student updated successfully.");
                else response(status_res('fail'), "", "Failed.");
            } 
        } 
    }
    public function do_upload()
    {
        $config['upload_path'] = './assets/uploads/';
        $config['allowed_types'] = '*';
        $config['max_filename'] = '255';
        $config['encrypt_name'] = FALSE;
        $config['max_size'] = '1024'; //1 MB

        if (isset($_FILES['fileInput']['name'])) {
            if (0 < $_FILES['fileInput']['error']) {
                $response['message'] = 'Error during file upload' . $_FILES['fileInput']['error'];
                return false;
            } else {
                if (file_exists('uploads/' . $_FILES['fileInput']['name'])) {
                    $response['message'] = 'File already exists : uploads/' . $_FILES['fileInput']['name'];
                    return false;
                } else {
                    $this->load->library('upload', $config);
                    if (!$this->upload->do_upload('fileInput')) {
                        $response['message'] = $this->upload->display_errors();
                        return false;
                    } else {
                        $response['message'] = 'File successfully uploaded : uploads/' . $_FILES['fileInput']['name'];
                        return true;
                    }
                }
            }
        } else {
            $response['message'] = 'Please choose a file';
            return false;
        }
    }
    function getStudentById()
    {
        $id = $_POST['users_id'];

        $options['where'] = array(
            'users_id' => $id,
        );
        $result = getrow('users', $options);

        if (!isset($_SESSION['userdata'])) {
            redirect(base_url());
        } else {
            json($result);
        }
    }

    function viewManageModal(){
        $id = $this->input->post('users_id');
        $options['join'] = array(
            'users' => 'users.users_id = exam.user_id'
        );
        $options['where'] = array(
            'users_id' => $id,
        );
        $res = getrow('exam', $options);
        json($res);
    }
}

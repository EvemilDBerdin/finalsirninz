<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends MY_Controller
{

    public function index()
    {
        if (isset($_SESSION['userdata'])) {
            $session = $_SESSION['userdata'];
            if ($session->user_type == "1") redirect(base_url('admin'));
            if ($session->user_type == "2") redirect(base_url('student'));
        }
        $this->login_load_page('login');
    }

    function createAccount()
    {
        $data = array();
        foreach ($_POST as $key => $value) {
            $data[$key] = $value;
        }
        $data['user_type'] = 2;
        $data['user_status'] = 0;
        $data['password'] = md5($data['password']);
        if(!empty($_FILES['fileInput']['name'])){
			$data['user_image'] = $_FILES['fileInput']['name'];
			
			$success = $this->do_upload();

            if ($success == true) {
                $result = insert('users', $data);
                if($result) response(status_res('success'), "", "You are officially registered.");
                else response(status_res('fail'), "", "Fail to register.");
            } else {
                response(status_res('fail'), "", "Fail to upload max 25mb.");
            }
		}
		else{
            $data['user_image'] = 'user_default.png';
			$result = insert('users', $data);
            if ($result) {
                response(status_res('success'), "", "You are officially registered.");
            } else {
                response(status_res('fail'), "", "Fail to register.");
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

    public function userAuth()
    {
        $username = $_POST['login_username'];
        $password = $_POST['login_password'];

        $options['where'] = array(
            'username' => $username,
            'password' => md5($password),
            'user_status' => 0
        );

        $result = getrow('users', $options, 'row');
        if ((bool)$result === true) {
            $this->session->set_userdata('userdata', $result);
            response(status_res('success'), "", "You have successfully log in.");
        } else {
            response(status_res('fail'), "", "Password do not match in our database.");
        }
    }

    function logout()
    {
        if (!$_SESSION['userdata']) {
            redirect(base_url());
        } else {
            session_destroy();
            response(status_res('success'), "", "You have been logged out.");
        }
    }
}

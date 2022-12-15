<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends MY_Controller
{

    public function index()
    {
        if (isset($_SESSION['userdata'])) {
            if (isset(udata()->user_type)) {
                if (udata()->user_type == "1") redirect(base_url('admin'));
                else if (udata()->user_type == "2") redirect(base_url('student'));
            }
        }
        $_SESSION['count'] = 0;
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
        if (!empty($_FILES['fileInput']['name'])) {
            $data['user_image'] = $_FILES['fileInput']['name'];

            $success = $this->do_upload();

            if ($success == true) {
                $result = insert('users', $data);
                if ($result) response(status_res('success'), "", "You are officially registered.");
                else response(status_res('fail'), "", "Fail to register.");
            } else {
                response(status_res('fail'), "", "Fail to upload max 25mb.");
            }
        } else {
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

    // public function userAuth()
    // {
    //     $username = $_POST['login_username'];
    //     $password = $_POST['login_password'];

    //     $options['where'] = array(
    //         'username' => $username,
    //         'password' => md5($password),
    //         'user_status' => 0
    //     );

    //     $result = getrow('users', $options, 'row');
    //     if ((bool)$result === true) {
    //         $this->session->set_userdata('userdata', $result);
    //         response(status_res('success'), "", "You have successfully log in.");
    //     } else {
    //         response(status_res('fail'), "", "Password do not match in our database.");
    //     }
    // }
    function userAuth()
    {
        $username = $_POST['login_username'];
        $password = $_POST['login_password'];

        $options['where'] = array(
            'username' => $username,
        );
        $result = getrow('users', $options, 'row');
        if ((bool)$result === true) {
            if ($result->user_status == 0) {
                $options['where'] = array(
                    'username' => $username,
                    'password' => md5($password)
                );

                $res = getrow('users', $options, 'row');  
                if ((bool)$res === true) {
                    $this->session->set_userdata('userdata', $res); 
                    response(status_res('success'), "", "You are successfull login.");
                } else {
                    if (isset($_SESSION['check_idnum'])) {
                        if ($_SESSION['check_idnum'] == $username) {
                            $_SESSION['count']++;
                            $data['msg'] = "Incorrect Password! Attempt " . $_SESSION['count'] . " \r\n--> 3 Attempt and your account will be deactivated!";
                        } else {
                            $_SESSION['check_idnum'] = $username;
                            $_SESSION['count'] = 0;
                            $_SESSION['count']++;
                            $data['msg'] = "Incorrect Password! Attempt " . $_SESSION['count'] . " \r\n--> 3 Attempt and your account will be deactivated!";
                        }
                        if ($_SESSION['count'] == 3) {
                            $set = array('user_status' => 2);
                            $where = array(
                                'users_id' => $result->users_id,
                            );

                            $disable_idnum = update('users', $set, $where);
                            if ($disable_idnum) {
                                session_unset();
                                session_destroy();
                                $data['msg'] = "Your account has been deactivated!";
                            } else {
                                $data['msg'] = "ERROR!";
                            }
                        }
                    } else {
                        $_SESSION['check_idnum'] = $username;
                        $_SESSION['count']++;
                        $data['msg'] = "Incorrect Password! Attempt " . $_SESSION['count'] . " \r\n--> 3 Attempt and your account will be deactivated!";
                    }
                    response(status_res('fail'), "", $data['msg']);
                }
            } 
            else {  
                response(status_res('fail'), "", "Your account has been lock you can contact the admin according to this concern");
            }

        } else {
            response(status_res('fail'), "", "Users doesnt exists!");
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

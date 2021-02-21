<?php

/**
 * Class LoginController
 */
class LoginController extends CI_Controller
{
    /**
     * LoginController constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->load->library('session');

        $this->load->model('UserProfileModel');
    }

    public function index()
    {
        $params = array(
            'title' => 'loginpage'
        );
        $this->load->view('Login/login', $params);
    }

    /**
     *
     */
    public function process()
    {
        $data = array(
            'EMAIL_ID' => $this->input->post('username'),
            'PASSWORD' => $this->input->post('password')
        );

        $dbdata = $this->UserProfileModel->checkUserExist($data);

        if (! empty($dbdata)) {

            $newdata = array(
                'username' => $dbdata[0]->FIRST_NAME,
                'email' => $dbdata[0]->EMAIL_ID,
                'userId' => $dbdata[0]->USER_ID,
                'userType' => $dbdata[0]->USER_ROLE,
                'loggedIn' => true,
            );

            $this->session->set_userdata($newdata);

            header("Location: http://codeigniterblog/CodeIngiter-3.1/index.php/Dashboard");
            exit();
        }
        $params = array (
            'title' => 'Login failed',
            'error' => 'Your Username or password is incorrect. Please retry with the correct login',
        );

        $this->load->view('Login/login', $params);
    }

    /**
     *
     */
    public function logout()
    {
        $unsetSessionArray = array('username', 'email', 'userId', 'userType', 'loggedIn');

        //removing session
        $this->session->unset_userdata($unsetSessionArray);

        header("Location: http://codeigniterblog/CodeIngiter-3.1/index.php/LoginController");
        exit();
    }
}
<?php

/**
 * Class Registration
 */
class Registration extends CI_Controller
{

    /**
     * Registration constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->load->library('session');
        $this->load->database();
        $this->load->model('UserProfileModel');
        $this->load->helper('url');
    }

    public function index()
    {
        $params = array(
            'gender' => array('Male', 'Female', 'Other')
        );

        $this->load->view('Registration/Registration', $params);
    }

    public function create()
    {
        $data = array(
            'FIRST_NAME' => $_POST['firstName'],
            'LAST_NAME' => $_POST['lastName'],
            'EMAIL_ID' => $_POST['emailId'],
            'PHONE_NUMBER' => $_POST['phoneNumber'],
            'GENDER' => $_POST['gender'],
            'USER_ROLE' => 'CUSTOMER',
            'USER_ACTIVE_STATUS' => true,
            'PASSWORD' => base64_encode($_POST['password']),
            'CREATED_DTTM' => date('Y-m-d H:i:s'),
        );

        $id = $this->UserProfileModel->saveUserProfile($data);

        $this->sessionLogin($data, $id);

        header("Location: http://codeigniterblog/CodeIngiter-3.1/index.php/Dashboard");
        exit();
    }

    /**
     * @param array $data
     * @param int $userId
     */
    private function sessionLogin($data, $userId)
    {
        $newdata = array(
            'username' => $data['FIRST_NAME'],
            'email' => $data['EMAIL_ID'],
            'userId' => $userId,
            'userType' => $data['USER_ROLE'],
            'loggedIn' => true,
        );

        $this->session->set_userdata($newdata);

    }
}
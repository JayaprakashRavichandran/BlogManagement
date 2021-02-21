<?php

/**
 * Class ProfileManagement
 */
class ProfileManagement extends CI_Controller
{

    /**
     * ProfileManagement constructor.
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
            'title' => 'userManagement',
            'session' => $this->session,
            'normalUsers' => $this->UserProfileModel->getAllUsers(),
        );

        $this->load->view('AdminManagement', $params);
    }

    /**
     * @param int $userId
     */
    public function getProfile($userId)
    {
        $params = array (
            'title' => 'Update profile',
            'session' => $this->session,
            'userDetails' => $this->UserProfileModel->getUserProfileData($userId)
        );

        $this->load->view('profileManagement', $params);
    }

    /**
     * @param int $userId
     */
    public function updateProfile($userId)
    {
        $data = array(
            'FIRST_NAME' => $_POST['firstName'],
            'LAST_NAME' => $_POST['lastName'],
            'EMAIL_ID' => $_POST['emailId'],
            'PHONE_NUMBER' => $_POST['phoneNumber'],
            'GENDER' => $_POST['gender'],
            'CREATED_DTTM' => date('Y-m-d H:i:s'),
            'MODIFIED_DTTM' => date('Y-m-d H:i:s'),
        );

        $this->UserProfileModel->updateUserProfile($data);

        $this->getProfile($userId);
    }
}
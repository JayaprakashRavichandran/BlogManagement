<?php

/**
 * Class AdminLoginController
 */
class AdminLoginController extends CI_Controller
{
    /**
     * AdminLoginController constructor.
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
            'title' => 'loginpage',
            'session' => $this->session,
        );
        $this->load->view('Login/adminLogin', $params);
    }
}
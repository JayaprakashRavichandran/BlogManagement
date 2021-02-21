<?php

/**
 * Class Dashboard
 */
class Dashboard extends CI_Controller
{
    const DEFAULT_DIR = '/home/wwwadmin/images';
    const DASHBOARD_CONTROLLER = 'Dashboard';

    /**
     * Dashboard constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->load->library('pagination');
        $this->load->library('session');

        $this->load->helper('url');
        $this->load->Model('BlogModel');

        //$this->createDirectories();

    }

    /**
     *
     */
    public function index()
    {
        $config = $this->initializePagination();
        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;

        $params = array(
            'title' => self::DASHBOARD_CONTROLLER,
            'session' => $this->session,
            'allBlogs' => $this->BlogModel->getAllBlogs($config['per_page'], $page),
            'links' => $this->pagination->create_links()
        );

        $this->load->view('Dashboard', $params);
    }

    /**
     * @return array
     */
    private function initializePagination()
    {
        $config = array();
        $config['base_url'] = 'http://codeigniterblog/CodeIngiter-3.1/Dashboard';
        $config['total_rows'] = $this->BlogModel->get_count();
        $config['per_page'] = 4;
        $config["uri_segment"] = 2;

        $this->pagination->initialize($config);

        return $config;
    }

    private function createDirectories()
    {
        if (file_exists(self::DEFAULT_DIR)) {
            return ;
        }

        mkdir(self::DEFAULT_DIR);

        return ;
    }

}
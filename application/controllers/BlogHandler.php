<?php

/**
 * Class BlogHandler
 */
class BlogHandler extends CI_Controller
{

    /**
     * BlogHandler constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->load->library('session');
        $this->load->model('BlogModel');
    }

    public function index()
    {
        $params = array (
            'title' => 'createBlog',
            'session' => $this->session,
        );
        $this->load->view('BlogHandler', $params);
    }

    /**
     * After submitting in the data in the UI. The data will be saved in the db and it will be redirected to homepage
     */
    public function create()
    {
        if (isset($_POST["submit"])) {
            $data = array(
                'TITLE' => $_POST["title"],
                'DESCRIPTION' => substr($_POST['description'], 0, 255),
                'HASH_TAG' => isset($_POST["title"]) ? $_POST["title"] : '',
                'IMAGE_PATH' => '/home/jayaprakash/',
                'USER_ID' => $this->session->userdata('userId'),
                'CREATED_DTTM' => date('Y-m-d H:i:s'),
                'MODIFIED_DTTM' => date('Y-m-d H:i:s'),
            );
            $this->BlogModel->saveBlogData($data);

            header("Location: http://codeigniterblog/CodeIngiter-3.1/index.php/Dashboard");
            exit();
        }
        $errorMsg = 'Sorry for the inconvenience. Post has been failed to create. Please retry';
    }

    public function getBlogById($blogId)
    {
        $params = array(
            'title' => 'Update Blog',
            'session' => $this->session,
            'blogObject' =>  $this->BlogModel->getBlogObjectByBlogId($blogId),
        );

        $this->load->view('UpdateBlogHandler', $params);
    }

    /**
     * @param int $blogId
     */
    public function updateBlog($blogId)
    {
        try {
            $data = array(
                'TITLE' => $_POST['title'],
                'DESCRIPTION' => $_POST['description'],
                'MODIFIED_DTTM' => date('Y-m-d H:i:s'),
            );

            $this->BlogModel->updateBlog($blogId, $data);
        } catch (Exception $e) {
            print_r($e->getMessage());
            exit;
        }

        header("Location: http://codeigniterblog/CodeIngiter-3.1/index.php/Dashboard");
        exit();
    }

    /**
     * @param int $blogId
     */
    public function deleteBlog($blogId)
    {
        try {
            $this->BlogModel->deleteBlogByBlogId($blogId);
        } catch (Exception $e) {
            echo $e->getMessage();
            exit;
        }

        header("Location: http://codeigniterblog/CodeIngiter-3.1/index.php/Dashboard");
        exit();
    }


    private function readImage()
    {
        try {
            // This is the file we're going to add it in the database
            $imageFile = $_FILES['blogImage']['tmp_name'];

            // To open the file and store its contents in $file_contents
            $file = fopen($imageFile, 'r');
            $file_contents = fread($file, filesize($imageFile));
            fclose($file);
            /* We need to escape some stcharacters that might appear in  file_contents,so do that now, before we begin the query.*/

            return addslashes($file_contents);
        } catch (Exception $e) {
            return false;
        }
    }
}
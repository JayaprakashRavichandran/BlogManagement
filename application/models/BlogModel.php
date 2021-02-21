<?php

/**
 * Class BlogModel
 */
class BlogModel extends CI_Model
{
    /**
     * BlogModel constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @param int $blogId
     * @return mixed
     */
    public function getBlogObjectByBlogId($blogId)
    {
        $query = $this->db
            ->select('*')
            ->from('BLOG')
            ->where('BLOG_ID', $blogId)
            ->get()
            ;

        $row = $query->result();

        return $row[0];
    }

    /**
     * @param int $limit
     * @param int $start
     * @return mixed
     */
    public function getAllBlogs($limit, $start)
    {
        $query = $this->db
            ->select('*')
            ->from('BLOG')
            ->order_by('MODIFIED_DTTM', 'DESC')
            ->limit($limit, $start)
            ->get();

        return $query->result_object();
    }

    /**
     * @param $data
     * @return mixed
     */
    public function saveBlogData($data)
    {
        $this->db->insert('BLOG', $data);
        return $this->db->insert_id();
    }

    /**
     * @param int $blogId
     * @param array $data
     */
    public function updateBlog($blogId, $data)
    {
        $this->db
            ->where('BLOG_ID', $blogId)
            ->update('BLOG', $data);
    }

    /**
     * @param int $blogId
     */
    public function deleteBlogByBlogId($blogId)
    {
        $this->db->delete('BLOG', array('BLOG_ID' => $blogId));
    }

    public function get_count()
    {
        return $this->db->count_all('BLOG');
    }
}
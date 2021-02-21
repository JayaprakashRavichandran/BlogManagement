<?php

/**
 * Class UserProfileModel
 */
class UserProfileModel extends CI_Model
{
    /**
     * UserProfileModel constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @param int $userId
     * @return mixed
     */
    public function getUserProfileData($userId)
    {
        $query = $this->db->query('SELECT * FROM USER_PROFILE WHERE USER_ID = ' . $userId);

        return $query->result();
    }

    /**
     * @return mixed
     */
    public function getAllUsers()
    {
        $query = $this->db->get('USER_PROFILE');

        return $query->result();
    }

    /**
     * @param array $data
     * @return bool
     */
    public function checkUserExist($data)
    {
        $emailId = $data['EMAIL_ID'];
        $password = md5($data['PASSWORD']);

        $query = $this->db->query('SELECT * FROM USER_PROFILE WHERE EMAIL_ID = \''. $emailId . '\' AND PASSWORD = \''. $password. '\'');

        return $query->result();
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function saveUserProfile($data)
    {
        $this->db->insert('USER_PROFILE', $data);

        return $this->db->insert_id();
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function updateUserProfile($data)
    {
        $this->db->update('USER_PROFILE', $data);
    }
}
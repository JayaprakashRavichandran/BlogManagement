<?php


class Blog
{
    /**
     * @var int
     */
    private $id;

    /** 
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $image;

    /**
     * @var string
     */
    private $hashtags;

    /**
     * @var string
     */
    private $createdBy;

    /**
     * @var string
     */
    private $modifiedBy;

    /**
     * @var string
     */
    private $createdDttm;

    /**
     * @var string
     */
    private $modifiedDttm;

        /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Blog
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return Blog
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Blog
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param string $image
     * @return Blog
     */
    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }

    /**
     * @return string
     */
    public function getHashtags()
    {
        return $this->hashtags;
    }

    /**
     * @param string $hashtags
     * @return Blog
     */
    public function setHashtags($hashtags)
    {
        $this->hashtags = $hashtags;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * @param string $createdBy
     * @return Blog
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;
        return $this;
    }

    /**
     * @return string
     */
    public function getModifiedBy()
    {
        return $this->modifiedBy;
    }

    /**
     * @param string $modifiedBy
     * @return Blog
     */
    public function setModifiedBy($modifiedBy)
    {
        $this->modifiedBy = $modifiedBy;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedDttm()
    {
        return $this->createdDttm;
    }

    /**
     * @param string $createdDttm
     * @return Blog
     */
    public function setCreatedDttm($createdDttm)
    {
        $this->createdDttm = $createdDttm;
        return $this;
    }

    /**
     * @return string
     */
    public function getModifiedDttm()
    {
        return $this->modifiedDttm;
    }

    /**
     * @param string $modifiedDttm
     * @return Blog
     */
    public function setModifiedDttm($modifiedDttm)
    {
        $this->modifiedDttm = $modifiedDttm;
        return $this;
    }
}
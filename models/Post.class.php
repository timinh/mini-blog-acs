<?php
class Post
{
    private $_id;
    private $_title;
    private $_content;
    private $_author;
    private $_category;
    private $_created_at;
    private $_updated_at;


    /**
     * Class Constructor
     * @param    $donnees     
     */
    public function __construct($donnees)
    {
        $this->setId($donnees['id']);
        $this->setTitle($donnees['title']);
        $this->setContent($donnees['content']);
        $this->setAuthor($donnees['author']);
        $this->setCategory($donnees['category']);
        $this->setCreatedAt($donnees['created_at']);
        $this->setUpdatedAt($donnees['updated_at']);
    }



    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @param mixed $_id
     *
     * @return self
     */
    public function setId($_id)
    {
        $this->_id = $_id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->_title;
    }

    /**
     * @param mixed $_title
     *
     * @return self
     */
    public function setTitle($_title)
    {
        $this->_title = $_title;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return utf8_encode($this->_content);
    }

    /**
     * @param mixed $_content
     *
     * @return self
     */
    public function setContent($_content)
    {
        $this->_content = $_content;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->_author;
    }

    /**
     * @param mixed $_author
     *
     * @return self
     */
    public function setAuthor($_author)
    {
        $this->_author = $_author;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->_category;
    }

    /**
     * @param mixed $_category
     *
     * @return self
     */
    public function setCategory($_category)
    {
        $this->_category = $_category;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return date_format(date_create($this->_created_at),"d-m-Y");;
    }

    /**
     * @param mixed $_created_at
     *
     * @return self
     */
    public function setCreatedAt($_created_at)
    {
        $this->_created_at = $_created_at;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->_updated_at;
    }

    /**
     * @param mixed $_updated_at
     *
     * @return self
     */
    public function setUpdatedAt($_updated_at)
    {
        $this->_updated_at = $_updated_at;

        return $this;
    }
}
?>

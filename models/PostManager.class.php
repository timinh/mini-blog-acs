<?php
class PostManager
{
    private $_bdd;

    /**
     * Class Constructor
     * @param    $_bdd   
     */
    public function __construct($_bdd)
    {
        $this->_bdd = $_bdd;
    }

    public function liste()
    {
        $list = [];
        $response = $this->_bdd->prepare("SELECT * FROM posts ORDER BY created_at DESC");
        $response->execute();
        while ($post = $response->fetch()) {
            $list[] = new Post($post);
        }
        return $list;
    }
}

?>

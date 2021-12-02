<?php
namespace src\Entity;

class Comment{
    private $id;
    private $id_author;
    private $id_post;
    private $content;

    public function __construct($id, $id_author, $id_post, $content)
    {
        $this->$id = $id;
        $this->$id_author = $id_author;
        $this->$id_post = $id_post;
        $this->$content = $content;
    }

    public function getId()
    {
        return $this->$id;
    }
    
    public function setId($id)
    {
        $this->$id = $id;
    }

    public function getIdAuthor()
    {
        return $this->$id_author;
    }

    public function setIdAuthor($id_author)
    {
        $this->$id_author = $id_author;
    }

    public function getIdPost(){
        return $this->$id_post;
    }

    public function setIdPost($id_post)
    {
        $this->$id_post = $id_post;
    }

    public function getContent()
    {
        return $this->$content;
    }

    public function setContent($content)
    {
        $this->$content = $content;
    }
}

?>
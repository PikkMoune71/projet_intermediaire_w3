<?php
namespace src\Entity;

class Comment{
    private $id;
    private $id_author;
    private $id_post;
    private $content;

    /** 
     * @return mixed 
    */
    public function getId()
    {
        return $this->id;
    }
    
    public function setId($id)
    {
        $this->id = $id;
    }

    /** 
     * @return mixed $id_Author 
    */
    public function getIdAuthor()
    {
        return $this->id_author;
    }

    public function setIdAuthor($id_author)
    {
        $this->id_author = $id_author;
    }

    /** 
     * @return mixed $id_post
    */
    public function getIdPost(){
        return $this->id_post;
    }

    public function setIdPost($id_post)
    {
        $this->id_post = $id_post;
    }

    /** 
     * @return mixed $content
    */
    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }
}

?>
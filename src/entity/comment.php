<?php
namespace App\Entity;

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
    
    /** 
     * @return mixed $id
    */
    public function setId($id)
    {
        $this->id = $id;
    }

    /** 
     * @return mixed 
    */
    public function getIdAuthor()
    {
        return $this->id_author;
    }

    /** 
     * @return mixed $id_Author 
    */
    public function setIdAuthor($id_author)
    {
        $this->id_author = $id_author;
    }

    /** 
     * @return mixed
    */
    public function getIdPost(){
        return $this->id_post;
    }

    /** 
     * @return mixed $id_post
    */
    public function setIdPost($id_post)
    {
        $this->id_post = $id_post;
    }

    /** 
     * @return mixed
    */
    public function getContent()
    {
        return $this->content;
    }

    /** 
     * @return mixed $content
    */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
    * @return mixed
    */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }
}

?>
<?php
namespace src\Entity;

class Post{
    private $id;
    private $id_author;
    private $title;
    private $content;
    private $image;
    private $publish_date;

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
     * @return mixed $title
    */
    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
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

    /** 
     * @return mixed $image
    */
    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    /** 
     * @return mixed $publish_date
    */
    public function getPublishDate()
    {
        return $this->publish_date;
    }

    public function setPublishDate($publish_date)
    {
        $this->publish_date = $publish_date;
    }
}
?>
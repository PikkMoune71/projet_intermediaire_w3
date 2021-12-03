<?php
namespace App\Entity;

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
    public function getTitle()
    {
        return $this->title;
    }

    /** 
     * @return mixed $title
    */
    public function setTitle($title)
    {
        $this->title = $title;
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
    public function getImage()
    {
        return $this->image;
    }

    /** 
     * @return mixed $image
    */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /** 
     * @return mixed 
    */
    public function getPublishDate()
    {
        return $this->publish_date;
    }

    /** 
     * @return mixed $publish_date
    */
    public function setPublishDate($publish_date)
    {
        $this->publish_date = $publish_date;
    }
}
?>
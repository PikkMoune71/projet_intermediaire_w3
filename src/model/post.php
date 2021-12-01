<?php
require('../model/database');

class Post{
    private $id;
    private $id_author;
    private $title;
    private $content;
    private $image;
    private $publish_date;

    public function __construct($id, $id_author, $title, $content, $image, $publish_date){
        $this->$id = $id;
        $this->$id_author = $id_author;
        $this->$title = $title;
        $this->$content = $content;
        $this->$image = $image;
        $this->$publish_date = $publish_date;
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

    public function getTitle()
    {
        return $this->$title;
    }

    public function setTitle($title)
    {
        $this->$title = $title;
    }

    public function getContent()
    {
        return $this->$content;
    }

    public function setContent($content)
    {
        $this->$content = $content;
    }

    public function getImage()
    {
        return $this->$image;
    }

    public function setImage($image)
    {
        $this->$image = $image;
    }

    public function getPublishDate()
    {
        return $this->$publish_date;
    }

    public function setPublishDate($publish_date)
    {
        $this->$publish_date = $publish_date;
    }
}
?>
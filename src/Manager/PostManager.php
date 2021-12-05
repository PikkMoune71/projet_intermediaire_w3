<?php


class PostManager
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo=$pdo;
    }

    /**
     * @return Post[]
     */
    public function getAllPosts()//:array
    {
        $query = 'SELECT p.*, CONCAT(u.firstname," ",u.lastname) as username FROM post p JOIN users u ON p.id_author = u.id_user;';
        $response = $this->pdo->query($query);
        return $response->fetchAll(PDO::FETCH_CLASS, 'App\Entity\Post');
 
    }

    /**
     * @return Post
     */
    public function getPostByID(int $id)
    {
        $query = 'SELECT p.*, CONCAT(u.firstname," ",u.lastname) AS username FROM post p JOIN users u ON p.id_author = u.id_user WHERE p.id_author = :id';
        $response = $this->pdo->prepare($query);
        $response->bindValue(':id', $id, PDO::PARAM_INT);
        $response->setFetchMode(PDO::FETCH_CLASS, 'App\Entity\Post');
        $response->execute();
        return $response->fetch();
    }

    public function createPost()
    {
        $insert = $this->pdo->prepare('INSERT INTO post(title, content, "image", createdAt) VALUES(?, ?, ?, ?, ?)');
        $dateNow = date("Y-m-d");
        $insert -> execute(array($title, $content, $author, $image, $dateNow));
        return true;
    }

    public function updatePost()
    {
        $insert = $this->pdo->prepare('INSERT INTO post(title, content, "image", createdAt) VALUES(?, ?, ?, ?, ?)');
        $dateNow = date("Y-m-d");
        $insert -> execute(array($title, $content, $author, $image, $dateNow));
        return true;
    }
}
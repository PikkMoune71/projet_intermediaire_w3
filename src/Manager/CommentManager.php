<?php
namespace App\Manager;

class CommentManager{

    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo=$pdo;
    }

     /**
     * @return Post[]
     */
    public function getAllComment()//:array
    {
        $query = 'SELECT * FROM `commentaire`';
        $response = $this->pdo->query($query);
        return $response->fetchAll(PDO::FETCH_CLASS, 'App\Entity\comment');

    }
}
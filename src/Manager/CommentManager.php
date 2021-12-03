<?php

class CommentManager{

    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo=$pdo;
    }

    /**
     * @return Comment
     */
    public function getCommentByPostID(int $postId)
    {
        $query = 'SELECT c.*, CONCAT(u.firstname," ",u.lastname) AS username FROM post c JOIN users u ON c.id_author = u.id_user WHERE c.id_user = :postId';
        $response = $this->pdo->prepare($query);
        $response->bindValue(':postId', $postId, PDO::PARAM_INT);
        $response->setFetchMode(PDO::FETCH_CLASS, 'App\Entity\Comment');
        $response->execute();
        return $response->fetchAll();
    }
}
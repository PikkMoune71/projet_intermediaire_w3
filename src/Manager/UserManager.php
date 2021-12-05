<?php

class UserManager
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo=$pdo;
    }

    /**
     * @return User[]
     */
    public function getAllUser()
    {
        $query = 'SELECT * FROM users';
        $response = $this->pdo->query($query);
        return $response->fetchAll(PDO::FETCH_CLASS, 'App\Entity\User');
    }

    public function deleteUser(int $id){
        $query = 'DELETE FROM users WHERE id = :id';
        $response = $this->pdo->prepare($query);
        $response->bindValue(':id', $id, PDO::PARAM_INT);
        $response->execute();
    }

    public function updateUser()
    {
        $query = 'SELECT * FROM users';
        $response = $this->pdo->query($query);
        return $response->fetchAll(PDO::FETCH_CLASS, 'App\Entity\User');
    }
}
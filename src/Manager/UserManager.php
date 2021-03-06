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

    public function getUserByID(int $id)
    {
        $query = 'SELECT * FROM users WHERE u.id = :id';
        $response = $this->pdo->prepare($query);
        $response->bindValue(':id', $id, PDO::PARAM_INT);
        $response->setFetchMode(PDO::FETCH_CLASS, 'Entity\Post');
        $response->execute();
        return $response->fetch();
    }

    public function deleteUser($id){
        $query = "DELETE FROM `users` WHERE id_user='$id'";
        $response = $this->pdo->query($query);
        return $response->fetchAll(PDO::FETCH_CLASS, 'App\Entity\User');
        
    }

    public function updateUser($email, $password, $lastname, $firstname)
    {
        $query = "UPDATE users SET email='$email',password='$password',lastname='$lastname',firstname='$firstname' WHERE id_user=1";
        $response = $this->pdo->query($query);
        return $response->fetchAll(PDO::FETCH_CLASS, 'App\Entity\User');
    }
}
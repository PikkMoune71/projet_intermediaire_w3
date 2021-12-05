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

    public function deleteUser(int $id){
        $query = 'DELETE FROM users WHERE id = :id';
        $response = $this->pdo->prepare($query);
        $response->bindValue(':id', $id, PDO::PARAM_INT);
        $response->execute();
    }

    public function updateUser($email, $password, $lastname, $firstname, $is_admin, $id)
    {
        $query = "UPDATE UPDATE users SET email='$email',password='$password',lastname='$lastname',firstname='$firstname',`is_admin`='$is_admin' WHERE id_user='$id'";
        $response = $this->pdo->query($query);
        return $response->fetchAll(PDO::FETCH_CLASS, 'App\Entity\User');
    }
}
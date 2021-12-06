<?php

class UserController extends BaseController
{
    public function updateUser($email, $password, $lastname, $firstname, $id)
    {
        $query = "UPDATE users SET email='$email',password='$password',lastname='$lastname',firstname='$firstname' WHERE id_user='$id'";
        $response = $this->pdo->query($query);
        return $response->fetchAll(PDO::FETCH_CLASS, 'App\Entity\User');
    }

    public function createUser($email, $password, $lastname, $firstname)
    {
        $query = "INSERT ";
        $response = $this->pdo->query($query);
        return $response->fetchAll(PDO::FETCH_CLASS, 'App\Entity\User');
    }
}

?>
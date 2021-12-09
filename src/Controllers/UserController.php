<?php

class UserController extends BaseController
{
    public function updateUser($email, $password, $lastname, $firstname)
    {
        extract($_POST);
        $manager = new UserManager(PDOFactory::getMySqlConnection());
        $data = $manager->updateUser($_POST["email"], $_POST["password"],$_POST["lastname"],$_POST["firstname"]);
        
        if(!$data) {
            Header('Location: /editUser');
            exit;
        } else {
            Header('Location: /');
            exit; 
        }
    }

    public function createUser($email, $password, $lastname, $firstname)
    {
        $query = "INSERT ";
        $response = $this->pdo->query($query);
        return $response->fetchAll(PDO::FETCH_CLASS, 'App\Entity\User');
    }

    public function deleteUser($id)
    {
        extract($_POST);
        $manager = new UserManager(PDOFactory::getMySqlConnection());
        $data = $manager->deleteUser($_POST["id"]);
        Header("Location : https://google.fr");
    }
}

?>
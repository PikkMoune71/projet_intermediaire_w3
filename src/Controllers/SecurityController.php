<?php
class SecurityController extends BaseController
{
    public function signIn()
    {
        $manager = new SecurityManager(PDOFactory::getMySqlConnection());
        return $this->render("Connexion", [],"Security/signin");
    }

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
    public function deleteUser($id)
    {
        extract($_POST);
        $manager = new UserManager(PDOFactory::getMySqlConnection());
        $data = $manager->deleteUser($_POST["id"]);
    }
    
    

    public function login() {
        $manager = new SecurityManager(PDOFactory::getMySqlConnection());
        $data = $manager->signIn($_POST["email"], $_POST["password"]);
        
        if(!$data) {
            Header('Location: /signin');
            exit;
        } else {
            Header('Location: /');
            exit; 
        }
    }

    public function logout()
    {
        $manager = new SecurityManager(PDOFactory::getMySqlConnection());
        $manager->logOut();

        Header('Location: /');
        exit;
    }
    
    function signUp()
    {
        $manager = new SecurityManager(PDOFactory::getMySqlConnection());
        return $this->render("Inscription", [], "Security/signup");
    }

    public function inscription($email, $password, $lastname, $firstname)
    {
        $manager = new SecurityManager(PDOFactory::getMySqlConnection());
        $data = $manager->signUp($_POST["email"], $_POST["firstname"], $_POST["lastname"], $_POST["password"]);
        
        if(!$data) {
            Header('Location: /signup');
            exit;
        } else {
            Header('Location: /signin');
            exit; 
        }

    }
}

?>
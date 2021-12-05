<?php
class SecurityController extends BaseController
{
    public function signIn()
    {
        $manager = new SecurityManager(PDOFactory::getMySqlConnection());
        return $this->render("Connexion", [],"Security/signin");
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

    public function inscription()
    {
        $manager = new SecurityManager(PDOFactory::getMySqlConnection());
        $data = $manager->signUp($_POST["email"], $_POST["password"], $_POST["lastname"], $_POST["firstname"], $_POST['is_admin']);
        
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
<?php

class SecurityManager
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo=$pdo;
    }

    /**
     * @return Security
     */
    public function signIn($email, $password)
    {
        $sql = $this->pdo->prepare("SELECT * FROM users WHERE email = '$email'");
        $sql->execute(array($email));
        
        $data = $sql->fetch(\PDO::FETCH_ASSOC);
        if($password == $data["password"]) {
            $_SESSION["users"] = $data;
            return true;
        }
        return false;
    }

    public function logOut()
    {
        session_destroy();
    }

    public function signUp($email, $password, $lastname, $firstname)
    {
        $query = "INSERT INTO users(email, password, lastname, firstname) VALUES ('$email','$password','$lastname','$firstname')";
        $response = $this->pdo->query($query);
        return $response->fetch();
    }

    // public function logOut()
    // {
    //     session_destroy();
    // }
}
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
        $sql = $this->pdo->prepare("SELECT * FROM users WHERE email = ?");
        $sql->execute(array($email));
        $data = $sql->fetch(\PDO::FETCH_ASSOC);

        if(password_verify($password, $data["password"])) {
            $_SESSION["users"] = $data;
            return true;
        }
        return false;
    }

    public function logOut()
    {
        session_destroy();
    }

    public function signUp($email, $password, $lastname, $firstname, $is_admin)
    {
        
        $check = $this->pdo->prepare('SELECT email, password, firstname, lastname, is_admin FROM users WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch(); 
        $row = $check->rowCount();

        if($row == 0) {
            if(preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $email)) {
                if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $password = password_hash($password, PASSWORD_DEFAULT);
                    $insert = $this->pdo->prepare('INSERT INTO users(email, password, lastname, firstname, is_admin) VALUES(?, ?, ?, ?, ?)'); // prepare pour y inserer dans la base ":" preparation du tableau associatif
                    $insert -> execute(array($email, $password, $lastname, $firstname, $is_admin));
                    return true;
                }
            }
        } else {
            return false;
        }
    }

    // public function logOut()
    // {
    //     session_destroy();
    // }
}
<?php
namespace src\Entity;

class User{
    private $id;
    private $email;
    private $password;
    private $lastname;
    private $firstname;
    private $isAdmin;

    public function __construct($id, $email, $password, $lastname, $firstname, $isAdmin){
        $this->$id = $id;
        $this->$email = $email;
        $this->$password = $password;
        $this->$lastname = $lastname;
        $this->$firstname = $firstname;
        $this->$isAdmin = $isAdmin;
    }

    public function getId()
    {
        return $this->$id;
    }

    public function setId($id)
    {
        $this->$id = $id;
    }

    public function getEmail()
    {
        return $this->$email;
    }

    public function setEmail($email)
    {
        $this->$email = $email;
    }

    public function getPassword()
    {
        return $this->$password;
    }

    public function setPassword($password)
    {
        $this->$password = $password;
    }

    public function getLastname()
    {
        return $this->$lastname;
    }
    
    public function setLastname($lastname)
    {
        $this->$lastname = $lastname;
    }

    public function getFirstname()
    {
        return $this->$firstname;
    }

    public function setFirstname($firstname)
    {
        $this->$firstname = $firstname;
    }

    public function getIsAdmin()
    {
        return $this->$isAdmin;
    }
    
    public function setIsAdmin($isAdmin)
    {
        return $this->$isAdmin;
    }


}
?>
<?php
namespace src\Entity;

class User{
    private $id;
    private $email;
    private $password;
    private $lastname;
    private $firstname;
    private $isAdmin;

    /**
     * @return mixed
     */

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed $email
     */

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    /** 
     * @return mixed $password
    */
    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed $lastname
     */
    public function getLastname()
    {
        return $this->lastname;
    }
    
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /** 
     * @return mixed $firstname
    */
    public function getFirstname()
    {
        return $this->firstname;
    }

    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /** 
     * @return mixed $isAdmin
    */
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
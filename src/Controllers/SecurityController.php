<?php

class SecurityController
{

    function signIn()
    {
        $manager = new SecurityManager(PDOFactory::getMySqlConnection());
        var_dump($manager->connexion("antoine@gmail.com", "test"));
    }
    
    function signUp()
    {
        $managerInscription = new SecurityManager(PDOFactory::getMySqlConnection());
        var_dump($managerInscription->inscription("antoine@gmail.com", "Antoine", "Picard", "test"));
    }
}



?>
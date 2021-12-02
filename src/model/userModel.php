<?php
namespace \App\Model;

use \App\model\Connexion;

class userModel {

    public function getAllUser(){

        $query = $db->prepare('SELECT * FROM users');
        $query->execute();

        return $query->fetchAll();
    }
}
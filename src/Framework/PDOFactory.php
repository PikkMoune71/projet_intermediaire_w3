<?php
namespace App\Framework;

class PDOFactory{
    public static function getMySqlConnection(): PDO
    {
        return new PDO('mysql:host=db;dbname=projet_intermediaire_w3', 'root', 'example');
    }
}
<?php
define('HOST','db');
define('DB_NAME','projet_intermediaire_w3');
define('USER','root');
define('PASS','example');

try{
    $db = new PDO("mysql:host=" . HOST .";dbname=" . DB_NAME, USER, PASS);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo $e;
}
?>
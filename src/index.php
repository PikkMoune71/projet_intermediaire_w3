<?php
// require 'vendor/autoload.php';
// use App\Controllers\Core\Router;
require 'Controllers/FrontController.php';
require 'Manager/PostManager.php';
require './Entity/post.php';
require 'Framework/PDOFactory.php';


isset($_GET['p']) ? $path = $_GET['p'] : $path = null;

switch ($path) {
    case null:
        // Faire un routeur
        $Controller = new FrontController();
        $Controller->home();
        break;
        
    case 'show':
        $Controller = new FrontController();
        $Controller->show();
        break;

}

?>
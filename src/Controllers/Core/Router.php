<?php 
namespace App\Controllers\Core;

class Router {

    public function Routing(){
        isset($_GET['p']) ? $path = $_GET['p'] : $path = null;

        switch($path){
            case 'users':
                $controller = new \App\Controllers\userController();
                $controller->getAllUser();
                break;
        }
    }
}
?>
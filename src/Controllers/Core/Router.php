<?php 
namespace App\Controller\Application;

class Router {

    public function Routing(){
        isset($_GET['p']) ? $path = $_GET['p'] : $path = null;

        switch($path){
            case 'showUser':
                $controller = new \App\controller\userController();
                $controller->getAllUser();
                break;
        }
    }
}
?>
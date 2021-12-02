<?php 
namespace App\controller\Application;

class Router {

    public function Routing(){
        isset($_GET['p']) ? $path = $_GET['p'] : $path = null;

        switch($path){
            case 'show':
                $controller = new \App\controller\userController();
                $controller->getAllUser();
                break;
        }
    }
}
?>
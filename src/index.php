<?php
session_start();

//Autoload à faire avec composer
require './Framework/PDOFactory.php';
require './Controllers/BaseController.php';
require './Controllers/FrontController.php';
require './Controllers/SecurityController.php';
require './Controllers/UserController.php';

require './Manager/PostManager.php';
require './Manager/SecurityManager.php';
require './Manager/CommentManager.php';
require './Manager/UserManager.php';

require './Entity/post.php';
require './Entity/user.php';


isset($_GET['p']) ? $path = $_GET['p'] : $path = null;
$link = explode('/',$_GET['p']);
$path = $link[0];
$param = $link[1];

switch ($path) {
    case null:
        $Controller = new FrontController();
        $Controller->home();
        break;
        
    case 'post':
        $Controller = new FrontController();
        $Controller->show($param);
        break;

    case 'signin':
        $ControllerSecurity = new SecurityController();
        $ControllerSecurity->signIn();
        break;

    case 'login':
        $ControllerSecurity = new SecurityController();
        $ControllerSecurity->login();
        break;

    case 'logout':
        $ControllerSecurity = new SecurityController();
        $ControllerSecurity->logout();
        break;
    
    case 'logout':
        $ControllerSecurity = new SecurityController();
        $ControllerSecurity->logout();
        break;
    
    case 'signup':
        $ControllerSecurity = new SecurityController();
        $ControllerSecurity->signUp();
        break;

    case 'inscription':
        $ControllerSecurity = new SecurityController();
        $ControllerSecurity->inscription($email, $password, $lastname, $firstname);
        break;

    case 'userList':
        $Controller = new FrontController();
        $Controller->userList();
        break;

    case 'userDelete':
        $Controller = new FrontController();
        $Controller->userDelete($param);
        break;

    case 'userCrud':
        $Controller = new FrontController();
        $Controller->userCrud();
        break;

    case 'createPost':
        $Controller = new FrontController();
        $Controller->createPost();
        break;

    case 'postCrud':
        $Controller = new FrontController();
        $Controller->postCrud();
        break;

    case 'user':
        $Controller = new FrontController();
        $Controller->user();
        break;

    case 'editUser':
        $Controller = new FrontController();
        $Controller->editUser();
        break;
        
    case 'updateUser':
        $Controller = new SecurityController();
        $Controller->updateUser($email, $password, $lastname, $firstname);
        break;
        
    case 'deleteUser':
        $Controller = new SecurityController();
        $Controller->deleteUser($id);
        break;
}

?>
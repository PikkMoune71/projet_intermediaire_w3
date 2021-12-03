
<?php
//Autoload
//require 'vendor/autoload.php';
require './Controllers/FrontController.php';
require './Manager/PostManager.php';
require './Framework/PDOFactory.php';
require './Controllers/SecurityController.php';
require './Manager/SecurityManager.php';
require './Entity/post.php';
require './Manager/CommentManager.php';

// use App\Controllers\FrontController;
// use App\Controllers\SecurityController;


isset($_GET['p']) ? $path = $_GET['p'] : $path = null;
$link = explode('/',$_GET['p']);
$path = $link[0];
$param = $link[1];

switch ($path) {
    case null:
        $Controller = new FrontController();
        $Controller->home();

        $Controller = new SecurityController();
        $Controller->signIn();

        $Controller = new SecurityController();
        $Controller->signUp();
 
        break;
        
    case 'post':
        $Controller = new FrontController();
        $Controller->show($param);
        break;
}

?>
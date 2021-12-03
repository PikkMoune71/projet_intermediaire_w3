<pre>
<?php
//Autoload
require 'vendor/autoload.php';

use App\Controllers\FrontController;


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
}

?>
<?php
require_once __DIR__.'/vendor/autoload.php';
$app = new App\Application();

$app->router->Routing();

echo '<p>Hello World !</p>';


?>
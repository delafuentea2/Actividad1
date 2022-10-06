<?php
/*$ruta=$_GET['url'];
$url=$_SERVER['REQUEST_URL'];
$ar_url=parse_url($url);
var_dump($ruta);

if($ar_url['path'] == 'login'){
    header('Location:login.php');
}*/

session_start();
//config entorno

define ("APP", __DIR__);


require 'config.php';
require 'src/route.php';
require 'src/routes.php';
//require busca contenido solo cuando se requiere, include vuelca el contenido

//enroutamiento
$controller= getRoute($routes);
//echo $controller;

require 'src/controllers/'.$controller.'.php';
//llamar al controlador


?>

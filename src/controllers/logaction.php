<?php

require 'src/db.php';


$db= connectMySql($dsn,$dbuser,$dbpass);
/*var_dump($db);
$db= null;
die($dsn);*/

if(!empty($_POST['user'])&& !empty($_POST['pass'])){
    if(iseet($_POST['user']) && iseet($_POST['pass'])){
        $user=$_REQUEST['user'];
        $pass=$_REQUEST['pass'];
        //echo $user;
        if(auth($db,$dbuser,$dbpass)){

        }
    }return $db;

}

?>
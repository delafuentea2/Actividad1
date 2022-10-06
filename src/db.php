<?php

try{
    //Crear connexio
    $db = new PDO('mysql:host=localhost;dbname=DATABASENAME;charset=utf8mb4', 'USERNAME', 'PASSWORD');
    
    $db = new PDO('sqlite:database.squlite');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//https://www.php.net/manual/en/pdo.setattribute.php
   
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
    echo $db->getAttribute(PDO::ATTR_CONNECTION_STATUS);
} catch (PDOException $e){
    echo $e->getMessage();
    }



function auth(string $db, string $user, string $pass):bool{

    $stmt=$db->prepare("SELECT * From users WHERE email=: email LIMIT 1");
    if($stmt->execute([':email=>$user'])){
        $row=$stmt->fetchAll();
        var_dump($row);
        die();
    }else{
        return false;
    }
}



?>
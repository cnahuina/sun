<?php
    $server = "localhost";
    $database = "cms_suntime";
    $user = "root";
    $pwd = "DoweG5qnmlP3myYb";

    try{
        $pdo = new PDO ("mysql:host=$server;dbname=$database","$user","$pwd");
        $pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    }catch(Exception $e){
        echo 'Exception : <br>'.$e->getMessage().'<br>';
    }

   
?>
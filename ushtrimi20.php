<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=#, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php


    $host="localhost";
    $username="root";
    $password="";

    try{
        $dsn="mysql:host=$host";
        $conn=new PDO($dsn,$username,$password);
        print "lidhja u krye me sukses";
    }
    catch(PDOException $e){
        print "lidhja me serverin deshtoi:gabimi:".$e ->getMessage();
    }






?>
    
</body>
</html>
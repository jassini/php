<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <?php


            $host="localhost";
            $username="root";
            $password="";
            $dbname="db111";

            try{
                $dsn="mysql:host=$host";
                $conn=new PDO($dsn,$username,$password);
                $sql="CREATE DATABASE $dbname";
                $conn->exec($sql);
                print "Databasa $dbname u krijua me sukses";
            }
            catch(PDOException $e){
                print "databvaza nuk u krijua: Gabim-".$e ->getMessage();
            }





    
    ?>
    
</body>
</html>
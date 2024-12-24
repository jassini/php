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
    $dbname="db1";

    try{
        $dsn="mysql:host=$host; dbname=$dbname";
        $conn=new PDO( $dsn,$username,$password);
        print "lidhja me serverin dhe databazen $dbname u realizua me sukses";
    }
    catch(PDOException $a){
        print "Lidhja nuk u reakizya me sukses gabimi eshte :".$a-> getMessage();
    }





    ?>
    
</body>
</html>
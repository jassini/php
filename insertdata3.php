<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="insertdata3.php" method="post">

        <label>Emri</label>
        <input type="text" name="emri">
        <br>

        <label>Mbiemri </label>
        <input type="text" name="mbiemri">
        <br>

        <input type="submit" name="btn" value="SAVE">

</form>


    <?php

        $host='localhost';
        $username="root";
        $password="";
        $dbname="hh";
        $table="hhh";

        if(isset($_POST["btn"])){
            $name=$_POST["emri"];
            $surname=$_POST["mbiemri"];
        }
        if(empty($name) || empty($surname)){
            print "please fill all inputs";
        }
        try{
            $dsn="mysql:host=$host; dbname=$dbname";
            $conn=new PDO($dsn, $username, $password);
            $sql="INSERT INTO $table(Name,Surname) VALUES(:name,:surname)";
            $stmt=$conn->prepare($sql);
            $stmt->execute([":name"=>$name,":surname"=>$surname]);
            print "Data inserted into Database succesfully";
        }
        catch(PDOExeption $a){
            print "error: ".$a->getMessage();
        }





    ?>
    
</body>
</html>
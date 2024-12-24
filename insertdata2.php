<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="insertdata2.php" method="post">

<label>shenoni nje email</label>
<input type="text" name="email">

<label>shenoni nje password </label>
<input type="text" name="pass">

<input type="submit" value="LOGIN">

</form>

<?php
$host='localhost';
$username="root";
$password="";
$dbname="insertdata1";
$table="inserdata2";

$email=$_POST["email"];
$pass2=$_POST["pass"];
$pass=password_hash($pass2,PASSWORD_DEFAULT);
        if(empty($email) || empty($pass)){
            die("ju lutemi plotesoni inputet");
        }
        try{
            $dsn="mysql:host=$host; dbname=$dbname";
            $conn=new PDO($dsn,$username,$password);
            $stmt=$conn->prepare("INSERT INTO $table(Email,Password) VALUES(:name,:password)");
            $stmt->execute([":name"=>$email,":password"=>$pass]);
            print "te dhenat jane shtuar me sukses ne tabelen e $table";
        }
        catch(PDOException $a){
            print "error: ".$a->getMessage();
        }








?>
    
</body>
</html>
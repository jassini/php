<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

        <form action="insertdata1.php" method="post">
            <input type="text" name="emri" placeholder="shenoni emrin tuaj">
            <input type="submit" value="shto te dhenat ne tabele">
          
        </form>    






    <?php
    
        $host='localhost';
        $username="root";
        $password="";
        $dbname="insertdata1";
        $table="inserdata1";

        $emri=$_POST["emri"];
        if(empty($emri)){
            die("ju lutemi plotesoni inputin");
        }
        try{
            $dsn="mysql:host=$host; dbname=$dbname";
            $conn=new PDO($dsn,$username,$password);
            $stmt=$conn->prepare("INSERT INTO $table(EMRI) VALUES(:name)");
            $stmt->execute([":name"=>$emri]);
            print "te dhenat jane shtuar me sukses ne tabelen e databases";
        }
        catch(PDOException $a){
            print "error: ".$a->getMessage();
        }








    ?>
    
</body>
</html>
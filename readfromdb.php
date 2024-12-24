<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    

        $host='localhost';
        $username="root";
        $password="";
        $dbname="hey1";
        $table="h1";
        try{
            $dsn="mysql:host=$host; dbname=$dbname";
            $conn=new PDO($dsn, $username, $password);
            $sql="SELECT Emri,Mbiemri From $table WHERE ID=:id";
            $id=1;
            $stmt=$conn->prepare($sql);
            $stmt->execute(["id"=>$id]);
            $result=$stmt->fetch(PDO::FETCH_ASSOC);
        
        
        if($result){
            print "<h1>Emri Juaj eshte: " . htmlspecialchars($result["Emri"]) . " kurse mbiemri juaj eshte: " . htmlspecialchars($result["Mbiemri"]) . "</h1>";
        }
        else{
            print "<h1> no record found</h1>";
        }
    }
        catch(PDOExeception $a){
            print "error: ".$a->getMessage();
        }
    





    ?>
    
</body>
</html>
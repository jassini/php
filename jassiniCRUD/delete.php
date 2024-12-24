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
        $dbname="jassinicrud";
        $table="crud1";

        if(isset($_GET['ID'])){
            $id=$_GET['ID'];
            try{
                $dsn="mysql:host=$host; dbname=$dbname";
                $conn=new PDO($dsn,$username,$password);
                $sql="DELETE FROM $table WHERE ID=:id";
                $stmt=$conn->prepare($sql);
                $stmt->execute([':id'=>$id]);
                header("Location: read.php?success");
                exit;
            }
            catch(PDOException $a){
                print "Error: ".$a->getMessage();
            }
        }




    ?>

    <a href="create.php">Create a User</a>

    


    
</body>
</html>
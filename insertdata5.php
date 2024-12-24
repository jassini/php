<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{background-color:#4B4A4A}
        form{
            width: 400px;
            height:auto;
            border: 3px solid black;
            border-radius:10px;
            display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:center;
            grid-gap:10px;
            margin:20px auto;
            padding:15px;
        }

        input{
            width: 80%;
            height:30px;
            border-radius:8px;
        }
        .btn{
            background-color:#4B4A4A
            width: 50%;
            background-color:lightgrey;
            transition:0.3s;
        }
        .btn:hover{
            background-color:lightgrey;
            color:white;
            transform:scale(1.1);
        }
        a{
            display:black;
            width: 150px;
            height:auto;
            background-color:lightcyan;
            text-decoration:none;
            font-size:20px;
            display:flex;
            justify-content:center;
            align-items:center;
            border:1px solid black;
            margin: 15px auto;
            border-radius:8px;
        }




    </style>    
</head>
<body>

    <form action="insertdata5.php" method="post">
        <input type="text" name="emri" placeholder="shenoni emrin tuaj">
        <input type="text" name="mbiemri" placeholder="shenoni mbiemrin tuaj">

        <input type="text" name="emaili" placeholder="shenoni emailin tuaj">

        <input type="text" name="passwordi" placeholder="shenoni passwordin tuaj">
        <input class="btn" type="submit" name="submit" value="Regjistrohu">
    </form>    


    <?php

        $host='localhost';
        $username="root";
        $password="";
        $dbname="hh";
        $table="tabela2";

        if(isset($_POST["submit"])){
            $emri=$_POST["emri"];
            $mbiemri=$_POST["mbiemri"];
            $email=$_POST["emaili"];
            $pass=$_POST["passwordi"];

            if(empty($emri) || empty($mbiemri) ||  empty($email) || empty($pass)){
                die("<h3 style='text-align:center'> you must fill all inputs");
            }

            try{
                $dsn="mysql:host=$host; dbname=$dbname";
                $conn=new PDO($dsn, $username, $password);
                $sql="INSERT INTO $table(Name,Surname,Email,Password) VALUES(:emri,:mbiemri,:emaili,:passwordi)";
                $stmt=$conn->prepare($sql);
                $stmt->execute([":emri"=>$emri,":mbiemri"=>$mbiemri , ":emaili"=>$email, ":passwordi"=>$pass]);
                print "<h3 style='text-align:center'> Data inserted into Database succesfully";
            }
            catch(PDOException $a){
                print "<h3 style='text-align:center'> error: ".$a->getMessage()."</h3>";
        }
    }






    ?>
    <a href="readdata.php">SHIKO TE DHENA</a>
</body>
</html>
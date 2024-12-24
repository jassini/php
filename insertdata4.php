<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            width: 500px;
            margin:auto;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: start;
            border:3px solid black
            
        }
        input{
            width: 70%;
            height: 30px;
            font-size: 22px;
            margin: 10px;
            border-radius:8px;
        }






    </style>    
</head>
<body>
    
        <form action="insertdata4.php" method="post">

        <label>Emri</label>
        <input type="text" name="emri">
        <br>

        <label>Mbiemri </label>
        <input type="text" name="mbiemri">
        <br>
        
        <label>mosha </label>
        <input type="text" name="mosha">
        <br>
        <label>gjinia </label>
        <input type="text" name="gjinia">
        <br>
        <label>email </label>
        <input type="text" name="emaili">
        <br>
        <label>password </label>
        <input type="text" name="passwordi">
        <br>

        <input type="submit" name="submit" value="Surname">

        </form>





    <?php
    $host='localhost';
    $username="root";
    $password="";
    $dbname="hey1";
    $table="h1";

    if(isset($_POST["submit"])){
        $emri=$_POST["emri"];
        $mbiemri=$_POST["mbiemri"];
        $mosha=$_POST["mosha"];
        $gjinia=$_POST["gjinia"];
        $emaili=$_POST["emaili"];
        $passwordi=$_POST["passwordi"];
    
    if(empty($emri) || empty($mbiemri) || empty($mosha) || empty($gjinia) || empty($emaili) || empty($passwordi)){
        die("you must fill all inputs");
    }
}

try{
    $dsn="mysql:host=$host; dbname=$dbname";
    $conn=new PDO($dsn, $username, $password);
    $sql="INSERT INTO $table(Emri,Mbiemri,Mosha,Gjinia,Email,Password) VALUES(:emri,:mbiemri,:mosha,:gjinia,:email,:password)";
    $stmt=$conn->prepare($sql);
    $stmt->execute([":emri"=>$emri,":mbiemri"=>$mbiemri ,":mosha"=>$mosha, ":gjinia"=>$gjinia, ":email"=>$emaili, ":password"=>$passwordi]);
    print "Data inserted into Database succesfully";
}
catch(PDOException $a){
    print "error: ".$a->getMessage();
}



    ?>
    
</body>
</html>
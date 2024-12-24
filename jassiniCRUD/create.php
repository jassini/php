<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Basic styling for the body */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        /* Form container styling */
        form {
            width: 400px;
            margin: 50px auto;
            padding: 30px;
            border: 2px solid #ddd;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        /* Input field styling */
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
            box-sizing: border-box;
        }

        /* Submit button styling */
        input[type="submit"] {
            width: 50%;
            margin: 10px auto 0;
            padding: 12px;
            background-color: #4CAF50;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        /* Link button to navigate */
        a {
            display: block;
            width: 150px;
            margin: 20px auto;
            padding: 12px;
            background-color: #ff6347;
            color: white;
            text-align: center;
            font-size: 16px;
            border-radius: 8px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #e55347;
        }

        /* Error message styling */
        .error-message {
            color: red;
            font-size: 16px;
            text-align: center;
            margin-top: 20px;
        }

    </style>
</head>
<body>
    <form action="create.php" method="post">
        <input type="text" name="emri" placeholder="shenoni emrin tuaj">
        <input type="text" name="mbiemri" placeholder="shenoni mbiemrin tuaj">
        <input type="number" name="mosha" placeholder="shenoni moshen tuaj">
        <input type="text" name="gjinia" placeholder="shenoni gjinin tuaj">
        <input type="text" name="qyteti" placeholder="shenoni qytetin tuaj">
        <input type="number" name="nrpersonal" placeholder="shenoni nrpersonal tuaj">
        <input type="submit" name="regjistrohu" value="regjistrohu">
    </form>

        <?php
        $host='localhost';
        $username="root";
        $password="";
        $dbname="jassinicrud";
        $table="crud1";

        if(isset($_POST['regjistrohu'])){
            $emri=$_POST['emri'];
            $mbiemri=$_POST['mbiemri'];
            $mosha=$_POST['mosha'];
            $gjinia=$_POST['gjinia'];
            $qyteti=$_POST['qyteti'];
            $nrpersonal=$_POST['nrpersonal'];

            if(empty($emri)||empty($mbiemri)||empty($mosha)||empty($gjinia)||empty($qyteti)||empty($nrpersonal)){
                die("Ju lutem plotesoni te gjitha fushat");
            }

            try{

                $dsn="mysql:host=$host;dbname=$dbname";
                $conn=new PDO($dsn,$username,$password);
                $sql="INSERT INTO $table (Emri,Mbiemri,Mosha,Gjinia,Qyteti,Nrpersonal) VALUES (:emri,:mbiemri,:mosha,:gjinia,:qyteti,:nrpersonal)";
                $stmt=$conn->prepare($sql);
                $stmt->execute([':emri'=>$emri,':mbiemri'=>$mbiemri,':mosha'=>$mosha,':gjinia'=>$gjinia,':qyteti'=>$qyteti,':nrpersonal'=>$nrpersonal]);
                print "te dhenat u shtuan me sukses ne tabele";
                header("Location:read.php?lajmrim");

            }
            catch(PDOException $a){
                print "error: ".$a->getMessage();
            }

        }




        ?>
    <a href="read.php">Shiko Informatat</a>



    
</body>
</html>
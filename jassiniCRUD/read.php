<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* General body styling */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        /* Styling for the table */
        .tbl1 {
            width: 80%;
            margin: 30px auto;
            border-collapse: collapse;
            background-color: #ffffff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .tbl1 th, .tbl1 td {
            padding: 12px 15px;
            text-align: center;
            border: 1px solid #ddd;
        }

        .tbl1 th {
            background-color: #4CAF50;
            color: white;
        }

        .tbl1 td {
            background-color: #f9f9f9;
        }

        /* Hover effect on table rows */
        .tbl1 tr:hover {
            background-color: #f1f1f1;
        }

        /* Button (links) styling */
        a {
            display: inline-block;
            padding: 8px 20px;
            margin: 5px;
            background-color: #f44336;
            color: white;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #d32f2f;
        }

        /* Create button for adding new records */
        .add-button {
            display: inline-block;
            margin: 20px auto;
            padding: 10px 25px;
            background-color: #2196F3;
            color: white;
            font-weight: bold;
            text-align: center;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .add-button:hover {
            background-color: #1976D2;
        }
    </style>
</head>
<body>
    <?php
    $host='localhost';
    $username="root";
    $password="";
    $dbname="jassinicrud";
    $table="crud1";

    try{

        $dsn="mysql:host=$host;dbname=$dbname";
        $conn=new PDO($dsn,$username,$password);

        $sql="SELECT * FROM $table";
        $stmt=$conn->prepare($sql);
        $stmt->execute();

        $result=$stmt->fetchAll();
        if($result){
           /* foreach($result as $x){
            print "Emri juaj: ".$x['Emri']." ";
            print "MbiEmri juaj: ".$x['Mbiemri']." ";
            print "Mosha juaj: ".$x['Mosha']." ";
            print "gjinia juaj: ".$x['Gjinia']." ";
            print "Qyteti juaj: ".$x['Qyteti']." ";
            print "nrPErsonal juaj: ".$x['Nrpersonal']." ";
            print "<br>";
            }*/
            print "<table class='tbl1'>
            <tr>
            <th>Emri</th><th>Mbiemri</th><th>Mosha</th><th>gjinia</th><th>qyteti</th><th>nrPersonal</th><th>UPDATE / DELETE</th>
            </tr>
            ";
            foreach($result as $x){
                print "<tr>";
                print "<td>{$x['Emri']}</td>";
                print "<td>{$x['Mbiemri']}</td>";
                print "<td>{$x['Mosha']}</td>";
                print "<td>{$x['Gjinia']}</td>";
                print "<td>{$x['Qyteti']}</td>";
                print "<td>{$x['Nrpersonal']}</td>";

                print "<td>
                            <a href='update.php?ID={$x['ID']}''>UPDATE</a>
                            <a href='delete.php?ID={$x['ID']}'>DELETE</a>

                        </td>";
                
                print "</tr>";
            }
        }
    }
        catch(PDOException $a){
            print "Error: ".$a->getMessage();
        }


    ?>
    <a href="create.php">Shiko Informatat</a>
    <?php

        if(isset($_GET['success'])){
            print "<h2 id='h1'>Rekordi u fshi me success</h2>";
        }
        print "<script>
        setTimeout(function(){
            document.getElementById('h1').style.display='none'
    },5000)
    </script>";
    
        

    ?>

<?php

if(isset($_GET['lajmrim'])){
    print "<h2 id='h1'>Rekordi u shtua me success</h2>";
}
print "<script>
setTimeout(function(){
    document.getElementById('h1').style.display='none'
},5000)
</script>";



?>
    
</body>
</html>
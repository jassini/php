<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="detyra3.php" method="post">

    <input type="text" name="shteti" placeholder="Shenoni nje shtet">
    <input type="submit" value="gjej kryeqytetin">




<?php
$shtetet=["ALBANIA"=>"Tirana","KOSOVA"=>"prishtina","MACEDONIA"=>"shkupi","MALIZI"=>"podgorica"];
if(isset($_POST["shteti"])){
    $shteti=$_POST["shteti"];
    $shteti2=strtoupper($shteti);
    $kryeqyteti=$shtetet[$shteti2];
    print "shteti me emrin $shteti e ka kryeqytet $kryeqyteti";
}






?>
    
</body>
</html>
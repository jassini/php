<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php


    try{
        $x=rand(1,30);
        if($x>20){
            throw new Exception("vlere e pa deshiruar sepse eshte me e madhe se 20");
        }
        print "vlere e deshiruar sepse eshte ndermjet 1 dhe 20";
    }
    catch(Exception $e){
        print "gabim:".$e ->getMessage();
    }

    print "<hr>";



    try{
    $a=rand(1,10);
    $b=rand(1,10);
    $prodhimi=$a*$b;
    if($prodhimi>50){
        throw new Exception(">50 error");
    }
        print "<50 e sakte";
    }
    catch(Exception $t){
        print "gabim:".$t -> getMessage();
    }
    print "<hr>";

    try{
        $c=[12,48,50,24];
        $d=array_sum($c);
        if($d>130){
            throw new Exception("vlere shume e madhe");
        }
        print "vlere e deshirume";
    }
    catch(Exception $g){
        print $g -> getMessage();
    }

    print "<hr>";

    try{
        $stringu="Kosova shtet i kosoves ";
        $h=strlen($stringu);
        if($h>20){
            throw new Exception("fjalia shume e gjate");
        }
        print "fjalia ka plotesi te te shkronjave";
    }
    catch(Exception $l){
        print $l -> getMessage();
    }





?>
    
</body>
</html>
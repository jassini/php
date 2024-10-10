<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $a=array(2,4,6,8,10);
    print count($a);
    print "<hr>";

    print "elementi i fundit i matrixes a eshte ".$a[count($a)-1]; 

    print "<hr>";

    foreach($a as $x){
        print "$x ";
    }

    print "<hr>";


    foreach($a as $x){
        print "php ";
    }

    print "<hr>";
 
    $b=array(2,4,6,8,10);
    $c=array(1,3,5,7,9);
    $d=array_merge($b,$c);
    foreach($d as $x){
        print "$x ";
    }
    print "<hr>";

    sort($d);
    foreach($d as $z){
        print "$z ";
    }
    print "<hr>";

    $e=array("z","v","g");
    foreach($e as $t){
        print ($t );
    }

    print "<hr>";

    $g=array(7,4,5,6,2,8);
    array_pop($g);
    foreach($g as $x){
        print "$x, ";
    }
    print "<hr>";

    array_push($g,"a","n");
    foreach($g as $x){
        print $x;
    }
    print "<hr>";

    $arreja=array(1,3,5,7,9,2,4,8);
    for($i=0; $i<=5; $i++){
        array_pop($arreja);
    }
    foreach($arreja as $x){
        print "$x ";
    }
    print "<hr>";

    $arr=array(1,2,3,4,5);
    for($i=4; $i<=7; $i++){
        array_unshift($arr,$i);
    }
    foreach($arr as $x){
        print "$x, ";
    }
    print "<hr>";

    $ii=array(2,7,3,6);
    array_splice($ii,2,1,7);
    foreach($ii as $x){
        print "$x ";
    }
    print "<hr>";

 
    $iii=array(1,3,5,7,9,8,6,4,2);
    for($i=0; $i<=8; $i++){
        array_splice($iii,$i,1,$i);
    }
    foreach($iii as $x){
        print "$x ";
    }
    print "<hr>";

    $ij=array(18,72,46,12);
    $kk=array_sum($ij);
    print "$kk";
    print "<hr>";
    $ll=array_product($ij);
    print "$ll ";
    print "<hr>";


    $h=array(100,200,300);
    $hh=array(10,20,30);

    $hhh=array_merge($h,$hh);
    $h1=array_sum($hhh);
    print "$h1 ";
    print "<hr>";

    $h2=array(7,8,2,2,4,7);
    $h3=array_unique($h2);
    foreach($h3 as $x){
        print "$x ";
    }
    print "<hr>";

    $pp=array("k","o","t","x","x");
    if(count($pp)>5){
        array_splice($pp,3,1,5);
    }
    else{
        array_splice($pp,1,0,"z");
    }
    foreach($pp as $x){
        print "$x ";
    }










    ?>
    
</body>
</html>
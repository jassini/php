<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

    $a=12.78;
    $b=7.4;
    $c=floor($a);
    $d=floor($b);
    $prodhimi1=$a*$b;
    $prodhimi2=$c*$d;


    print "prodhimi i numrave me presje $a dhe $b eshte: $prodhimi1";
    print "<br>";
    print "prodhimi i numrave te plote $c dhe $d eshte: $prodhimi2";

    $e=rand(1,20);
    $f=rand(1,20);

    $g=$e+$f;
    print "<br>";


    if($g%2==0){
        print " Shuma e rezultateve te numrave random eshte cift $g";
    }
    else{
        print "shuma e rezultateve te numrave random eshte tek $g";
    }
    print "<br>";

    $nr1=118;
    $nr2=2;
    $shenja="-";

    switch($shenja){
        case "+": $shuma=$nr1+$nr2;
        print "perdoruesi zgjodhi shenjen + dhe shuma e numrave eshte: $shuma";
        break;
        case "-": $shuma=$nr1+$nr2;
        print "perdoruesi zgjodhi shenjen - dhe ndryshimi  numrave eshte: $shuma";
        break;
        case "/": $shuma=$nr1+$nr2;
        print "perdoruesi zgjodhi shenjen / dhe pjestimi e numrave eshte: $shuma";
        break;
        case "*": $shuma=$nr1+$nr2;
        print "perdoruesi zgjodhi shenjen * dhe prodhimi e numrave eshte: $shuma";
        break;
        default: print "ju lutem zgjedhni njeren nga shenjat +,-,*,/";
    }
    
    print "<br>";


    $string="kidsjfvoiushd aidugfiuasdfdu iougafuiauihgf";
    $h=strlen($string);

    if($h%2==0){
        print "stringu a numer qift te karaktereve ";
    }
    else{
        print "stringu ka numer tek te karaktereve";
    }
    print "<br>";

    $numri=rand(1,350);
    $tekqift=($numri%2==0)?"qift":"tek";

    if($numri>50 && $numri<250 && $tekqift=="qift"){
        print "numri eshte qift dhe brenda rqangut 20 dhe 250";
    }
    elseif($numri>50 && $numr<250 && $tekqift=="tek"){
        print "numri eshte tek dhe brenda rangut 50 dhe 250";
    }
    elseif($numri<50 || $numri>250 && $tekqift=="tek"){
        print "numri eshte tek dhe jashte rangut 50 dhe 250";
    }
    elseif($numri<50 || $numri>250 && $tekqift=="qift"){
        print "numri eshte qift dhe jashte rangut 50 dhe 250";
    }



    








?>

    
</body>
</html>
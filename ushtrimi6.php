<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$mosha=18;
if($mosha<18){
    print "Mosha adoleshent";
}
else{
    print "I rritur";
}
print "<br>";

$a=72;
$b=36;
 if($a<$b){
    print "a ma e vogel se b";
 }
 elseif($a==$b){
    print "a dhe b jane te barabarta";
 }
 else{
    print "a eshte me e madhe se b";
 }

 $ora=rand(0,24);
 if($ora<=6){
    print "naten vone";
 }
 elseif($ora<=18){
    print "miredita";
 }
 elseif($ora<=24){
    print "miremrama";
 }
print "<hr>";

$r=rand(0,10000);

if($r<=9){
    print"<p style='color:red'>numer njeshifror";
}
elseif($r<=99){
    print "<p style='color:green'>numer dyshifror";
}
elseif($r<=999){
    print "<p style='color:blue'>numer treshifror";
}
elseif($r<=9999){
    print "<p style='color:purple'>numer katershifror";
}
else{
    print"<p style='color:brown'>pesshifror";
}
print "<hr>";


$dita=rand(1,7);
switch ($dita) {
    case "1":
        echo "Sot është e hënë!";
        break;
    case "2":
        echo "Sot është e martë!";
        break;
    case "3":
        echo "Sot është e mërkurë!";
        break;
    case "4":
        echo "Sot është e enjte!";
        break;
    case "5":
        echo "Sot është e premte!";
        break;
    case "6":
        echo "Sot është e shtunë!";
        break;
    case "7":
        echo "Sot është e diel!";
        break;
    default:
        echo "Dita nuk është e njohur.";
        break;}

print "<hr>";

switch($dita){
    case($dita>=1 and $dita<=5):echo "dite pune";
    break;}

    switch($dita){
        case($dita>=6 and $dita<=7):echo "dite vikend";
}
print "<hr>";
$numri = rand(1, 100);
echo "Numri i gjeneruar është: $numri<br>";

// Zbritja prej 5%
switch (true) {
    case ($numri >= 1 && $numri <= 100):
        $zbritje = 0.05; // 5% zbritje
        $vlereZbritur = $numri * (1 - $zbritje);
        echo "Zbritja prej 5% aplikohet. Vlera e re është: $vlereZbritur";
        break;
   
}
switch (true) {
    case ($numri >= 101 && $numri <= 500):
        $zbritje = 0.1; // 10% zbritje
        $vlereZbritur = $numri * (1 - $zbritje);
        echo "Zbritja prej 10% aplikohet. Vlera e re është: $vlereZbritur";
        break;
   
}
switch (true) {
    case ($numri >= 500 && $numri <= 1000):
        $zbritje = 0.15; // 5% zbritje
        $vlereZbritur = $numri * (1 - $zbritje);
        echo "Zbritja prej 15% aplikohet. Vlera e re është: $vlereZbritur";
        break;
   
}
print "<hr>";

$bmi=rand(15,35);
switch($bmi){
    case($bmi<18.5): print "<p stle='font-size:10px'>nenpeshe</p>";
    break;
}
switch($bmi){
    case($bmi>=18.5 && $bmi <24.9): print "<p stle='font-size:20px'>normal</p>";
    break;
}
switch($bmi){
    case($bmi>=25 && $bmi <30): print "<p stle='font-size:30px'>mbipesh</p>";
    break;
}
switch($bmi){
    case($bmi>30): print "<p style='font-size:40px'>obez</p>";
    break;
}
print "<hr>";

$piket=rand(1,100);
switch($piket){
    case($piket<20):print "1";
}
switch($piket){
    case($piket<=40):print "1";
}
switch($piket){
    case($piket<20):print "1";
}
switch($piket){
    case($piket<20):print "1";
}
switch($piket){
    case($piket<20):print "1";
}












?>
    
</body>
</html>
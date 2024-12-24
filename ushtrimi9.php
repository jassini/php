<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $b=2;
    do{
        print "$b <br>";
        $b++;
    }
    while($b<=5);
    print "<hr>";

    for($c=1;$c<=7; $c+=2){
        print "$c<br>";
    }
    print "<hr>";

    $d=2;
    while($d<=10){
        if($d==6){
            break;
        }
        print "$d <br>";
        $d++;
    }

    print "<hr>";

    $e=1;
    while($e<=15){
        if($e==5 or $e==7 or $e==10){
            print "loop eshte ndaluar";
            break;
        }

        print "$e <br>";
        $e+=3;
    }
    print "<hr>";

    $f=1;
    while($f<=7){
        if($f==3){
            $f++;
            continue;
        }
        print "$f <br>";
        $f++;
    }
    print "<hr>";

    for($z=1;$z<=10;$z++){
        print "sot eshte dita e $z e pushimit <br>";
    }
    print "sot rifilluat punen";
    print "<hr>";

    $shuma=0;
    $kursime=150;

    for($muaji=1;$muaji<=12;$muaji++){
        $shuma+=$kursime;
        print "Muaji i $muaji :ju keni kursyer $shuma euro <br>";
    }
    print "<hr>";


    $dita=1;
    for($liter=2;$liter<=40;$liter+=2){
        print "dita e $dita:ju keni pire $liter liter uje <br>";
        $dita++;
    }

    print "<hr>";

    $dita=1;
    for($dita=1;$dita<=7;$dita++){
        switch($dita){
            case 1: print "sot dite e Hene ju keni ushtrime <br>";
            break;
            case 2: print "sot dite e marte ju nuk keni ushtrime<br>";
            break;
            case 3: print "sot dite e merkure ju keni ushtrime<br>";
            break;
            case 4: print "sot dite e ejte ju nuk keni ushtrime<br>";
            break;
            case 5: print "sot dite e premte ju keni ushtrime<br>";
            break;
            case 6: print "sot dite e shtune ju nuk keni ushtrime<br>";
            break;
            case 7: print "sot dite e dille ju keni ushtrime<br>";
            break;
        }
    }
    print "<hr>";
    $dita=1;
    for($dita=1;$dita<=5;$dita++){
        switch($dita){
            case 1: print "sot dite e Hene meny detore eshte file pule <br>";
            break;
            case 2: print "sot dite e marte meny ditore sallat pule<br>";
            break;
            case 3: print "sot dite e merkure sallat viqi<br>";
            break;
            case 4: print "sot dite e ejte meny ditore berxoll<br>";
            break;
            case 5: print "sot dite e premte meny ditore biftek<br>";
            break;
            
        }
    }















    ?>
    
</body>
</html>
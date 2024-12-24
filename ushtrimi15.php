<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    function f1(...$x){
        $shuma=0;
        foreach($x as $y){
            $shuma+=$y;
        }
        print "shuma e te gjitha elementeve te matrices eshte $shuma";
    }
    f1(3,7,12,43,98);



    print "<hr>";

    $a=1;
    if(is_string($a)and strlen(trim($a))>0){
        print "variabla eshte string dhe ka karaktere";
    }
    else{
        print "variabla ose nuk eshte string ose eshte string bosh";
    }

    print "<hr>";

    
    $b=1.7;
    if(is_int($b) or is_float($b)){
        
        print "variabla eshte tip number, ";
        if(is_int($b)){
            echo " dhe eshte numer i plote";
        }
        else{
            print "dhe eshte number me presje";
        }
    }

    else{
        print "variabla nuk eshte tip number";
    }
    print "<hr>";

    $c="g";
    if(is_string($c)){
        print "variabla eshte string";
    }
    else{
        print "variabla eshte numer";
    }

    print "<hr>";

    $emri="php";

    if(preg_match("/[a-z]/",$emri)){
        print "stringu ka shkronja te vogla";
    }
    else{
        print "stringu nuk ka shgkronja te vogla";
    }

    print "<hr>";  

    $passwordi="hey123@`1H";
    if(preg_match("/[a-z]/",$passwordi) and preg_match("/[A-Z]/",$passwordi) and preg_match("/[0-9]/",$passwordi) and preg_match("/[^a-zA-Z0-9]/",$passwordi) and strlen($passwordi)>8){
        print "passwordi eshte i sakte";
    }
    else{
        print "passwordi eshte i pasakte ju lutem perdor numra shkronja dhe karaktere";
    }



    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $a=rand(-20,20);
    print $a;
    print "<br>";

    if($a<0){
        print "numri eshte negativ";
    }
    elseif($a>0){
        print "numri eshte pozitiv";

    }
    else{
        print "numeri 0";
    }
    print "<hr>";


    $b=rand(15,35);
    print $b;
    print "<br>";
    if($b<18){
        print "<p style='color:blue'>temperatura dhomes ftohte</p>";
    }
    elseif($b<=24){
        print "<p style='color:yellow'>temperatura dhomes normale</p>";
    }
    else{
        print"<p style='color:red'>temperatura dhomes nxehte</p>";
    }

    print "<hr>";

    $username="shkolladigjitale123";
    $password="shkolladigjitale";

    if($username=="shkolladigjitale123" and $password!="shkolladigjitale"){
        print "passwordi eshte i shenuar gabim";
    }
    elseif($username!="shkolladigjitale123" and $password!="shkolladigjitale"){
        print "password dhe username nuk jane te sakte";
    }
    elseif($username!="shkolladigjitale123" and $password=="shkolladigjitale"){
        print " username nuk eshte i sakte";
    }
    else{
        print "LOG IN";
    }

    print "<hr>";

    $c=rand(1,600);
    print $c;
    print "<br>";
    
    if($c<100){
        print "duhet te prodhohen produkte te reaja";
    }
    elseif($c<500){
        print "numri i stokut eshte ne rregull";
    }
    else{
        print "duhet te ndalet prodhimi";
    }
    print "<hr>";

    $d="jasinkrasniqiiiiiiiii";
    $shkronjat=strlen($d);

    if($shkronjat<5){
        print "stringu ka me pak se 5 shkronja";
    }
    elseif($shkronjat>5 and $shkronjat<10){
        print "stringu ka me shum se 5 dhe me pak se 10 shkronja";
    }
    else{
        print "ka me shume se 20shkronja";
    }
    
    print "<hr>";

    $e=rand(1,100);

    if($e<49){
        print "ju keni $e pike dhe nota juaj eshte 5";
    }
    elseif($e<59){
        print "ju keni $e pike dhe nota juaj eshte 6";
    }
    elseif($e<69){
        print "ju keni $e pike dhe nota juaj eshte 7";
    }

    elseif($e<79){
        print "ju keni $e pike dhe nota juaj eshte 8";
    }

    elseif($e<89){
        print "ju keni $e pike dhe nota juaj eshte 9";
    }
    else{
        print "ju keni $e pike dhe nota juaj eshte 10";
    }


    







    ?>
    
</body>
</html>
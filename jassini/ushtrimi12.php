<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>




<?php

    $a=[function(){
        $b=3;
        $c=7;
        $d=$b*$c;
        return $d;
    },8,4,2,9];
    print "Rezultati i prodhimit eshte: ".$a[0]();
    print "<hr>";
    //////////////////////////////////

    $b=[function(){
        print "Hello";
    },
    function(){
        print " world";
    },
    function(){
        print " from Kosova";
    }];

    print $b[0]()."  ".$b[1]()." ".$b[2]();
    foreach($b as $x){
        print $x()." ";
    }
    print "<hr>";

    /////////////////////////////////////////////////
    $c=[18,95,78,function(){
        print "elemnti i fundit i array eshte 99";
    }];
    foreach($c as $x){
        if(is_callable($x)){
            print $x()."<br>";}
            else {
                print $x."<br>";
            }
         
        }
        //////////////////////////////////////
        print "<hr>";


        $y=["Ardit"=>"programer","elmedini"=>"bujk","qendrimi"=>"inxhinier","erioni"=>"programer","jasini"=>"president"];
        foreach($y as $x=>$y){
            print "ju jeni $x dhe profesioni juaj eshte $y <br>";
        }
        









?>
    
</body>
</html>
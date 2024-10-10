<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php


        define("a",72);
        define("b",12);
        define("c",a*b);
        print "shumezimi i numrit ".a."me numrin".b."eshte".c;

       print " <br>";

       if(a<b){
        print "konstantja a eshte me e vogel se konstantja b";
       }
       elseif(a==b){
        print "konstantja a eshte e barabart me konstanten b";
       }
       else{
        print "konstantja b eshte me e vogel se konstantja a";
       }

       print " <br>";

        $a=24;
        $a=(string)$a;
        var_dump($a);
        
        print " <br>";

        $b=false;
        $b=(string)$b;
        var_dump($b);

        print " <br>";

        $c="72";
        $c=(int)$c;
        var_dump($c);
        print " <br>";

        $d="tituj kampioni 72";
        $d=(int)$d;
        var_dump($d);

        print " <br>";

       $e=true;
       $e=(int)$e;
       var_dump($e);
       print " <br>";


       $f=4;
       $shuma=$e+$f;
       print $shuma;
       print " <br>";

       $g=39;
       $g=(bool)$g;
       var_dump($g);
       print " <br>";

       $j="";
       $j=(bool)$j;
       var_dump($j);
       print " <br>";

       if(7<4 xor 9>1){
        print ' e sakte';
       }
       else{
        print 'e pasakte';
       }
       print " <br>";

       $x=7;
       print $x++;
       print " <br>".$x;

       print " <hr>";
       $y=7;
       print ++$y




















    ?>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello PHP</h1>
    <p>HELLO PARAGRAFI PARE</p>
    <img src='foto1.png' width='100px' height='100px'>
<br>
    <?php

        print'HELLO PHP';
        echo'<br>Hello PHP me print';
        print'<hr>';
        print'<h1>Header 1 ne php</h1>';
        print"<img src='foto1.png' width='100px' height='100px'>";
        print'<hr>';

        print"<a href='https://google.com'>HOLA HOLA</a>";
        print"<a href='https://google.com'><img src='foto1.png' width='100px' height='100px'></a>";

        print'<hr>';
         print"<ol><li>Lista1</li><li>Lista2</li></ol>";
         print'<hr>';

         print "<p style='color:red'> Hello world me ngjyr te kuqe</p>";

         $x=4;

         print $x;
         $a=12;
         $b=19;
         $c=$a+$b;
         print "<br>$c";

          $d=$e=$f=12;
          print"<br>";
         print "$d $e $f";


         function f1(){
            $x=6;
            return $x;
         }
         print f1();

         function f2(){
            $z=3;
            $v=6;
           return  $z*$v;
         }
         print "<br>".f2();
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    $numri=81;
    $rrenja=sqrt($numri);
    print "<h1>  Rrenja katrore e numrit $numri eshte: $rrenja</h1>";

    $baza=6;
    $eksponenti=3;
    $fuqizimi=pow($baza,$eksponenti);
    print "<h3>Numri me baze $baza dhe eksponent $eksponenti kur ngritet ne fuqi eshte $fuqizimi";

    $roundi=round(98.4);
    print "<br>".$roundi;

    $flori=floor(99.9);
    print "<br>".$flori;

    $ceili=ceil(99.001);
    print "<br>".$ceili;

    $randomi=rand(1,10);
    print "<br>".$randomi;

    $randomi2=rand(50,100);
    $randomi3=rand(1,10);
    $a=$randomi2/$randomi3;
    $b=floor($a);
    print "<br>".$b;


    $c=max(13,54,1,4,5);
    $d=min(13,52,41,85,44);
    $e=$c/$d;
    $f=floor($e);
    print "<br>".$f;


    $g=sqrt(49);
    $h=pow($g,2);
    print "<br>".$h










    ?>




    
</body>
</html>
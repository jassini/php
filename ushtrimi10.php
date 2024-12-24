<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $arreja=array(1,3,5,7);
    print count($arreja);
    print $arreja[3];

    print "<hr>";

    foreach($arreja as $x){
        print "$x";
    }
    print "<hr>";

    $shkronjat=array("A","X","R","B");
    sort($shkronjat);
    foreach($shkronjat as $a){
    print "$a";
    }
    print "<hr>";

    $numrat=array(8,4,6,2,8,7,9,4,2);
    sort($numrat);
    foreach($numrat as $n){
        print "$n";
    }
    print "<hr>";
    $numrat=array(8,4,6,2,8,7,9,4,2);
    rsort($numrat);
    foreach($numrat as $n){
        print "$n";
    }
    print "<hr>";











    ?>
    
</body>
</html>
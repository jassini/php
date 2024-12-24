<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php


    $a="programimi me i mire eshte ne javascript";
    $b=str_word_count($a);
    print "numri i fjaleve ne string eshte: $b";

    print " <br>";

    $c=str_replace("javascript","PHP",$a);
    print $c;
    print " <br>";

    $d="sfgsgsrgsrhsr";
    $e="dhdthjersgsdgeag";

    $f=strlen($d);
    $g=strlen($e);

    if($g<$g){
        print ("variabla e dyte ka me pak karaktere");

    }
    else{
        print "    variabla e pare ka me pak karaktere";
    }
    print " <br>";

    $aa=rand(1,10);
    $bb=rand(1,10);
    if($aa>$bb){
        print("numrti i pare eshte me i madh se i dyti");
    }
    elseif($aa<$bb){
        print("numri i dyte eshte me i madh se i dyti");
    }
    else{
        print("jane te barabarrt");
    
    }








    ?>
    
</body>
</html>
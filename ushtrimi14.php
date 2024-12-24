<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $numri=[2,12,22,32];
    $numri2=array_map(function($x){
        return $x +10;},$numri);



        foreach($numri2 as $x){
            print "$x";
        }


        print "<hr>";




        $numri3=[10,19,39,79,85];
        
        $numri4=array_map(function($x){
        if($x>40){
            return $x+50;
        }
        else{
            return $x;
        }
        },$numri3);
       



        foreach($numri4 as $x){
            print "$x ";
        }
        print "<hr>";


        $numrii=[10,19,39,79,85];
        $numrii2=[20,40,60,80];
        $shuma=array_map(function($a,$b){
            return ($a+$b);
        },$numrii,$numrii2);


        foreach($shuma as $x){
            print "$x ";
        }

        
        print "<hr>";

        $stringu=["detar","elton","ard","melos"];
        $stringu2=array_map(function($a){
            return ("une jam ".$a."i");
        },$stringu);

        foreach($stringu2 as $x){
            print "$x <br>";
        }

        
        print "<hr>";

        $nr=[79,88,12,37,42];
        $nr2=array_filter($nr,function($x){
            return $x%2==1;
        });

        foreach($nr2 as $x){
            print "$x ";
        }


        print "<hr>";

        $nr=[79,88,12,37,42];
        $nr2=array_filter($nr,function($x){
            return $x>40;
        });

        foreach($nr2 as $x){
            print "$x ";
        }

        print "<hr>";

        $nr1=[20,60,10,50];
        $nr2=array_map(function($a){
            return $a/5;
        },$nr1);
        $nr3=array_filter($nr2,function($x){
            return $x>=10;
        });
        rsort($nr3);
        foreach($nr3 as $x){
            print "$x <br>";
        }

        print "<hr>";


        $emri="lipjan";
        $isstring=is_string($emri);
        if ($isstring==true){
            print "variabla eshte string";
        }
        else{
            print "variabla nuk eshte string";
        }

        print "<hr>";


        $numri10="76";
        if(is_numeric($numri10)){
            print "variabla eshte numer";
        }
        else{
            print "variabla nuk eshte numer";
        }

        print "<hr>";

        $nrp=72;
        if(is_int($nrp)){
            print "eshte numer i plote";
        }
        else{
            print "nukj eshte numer i plote";
        }

        print "<hr>";


        $nrp=72.3;
        if(is_int($nrp)){
            print "eshte numer i plote";
        }
        else{
            print "nukj eshte numer i plote";
        }



        



    









    ?>
    
</body>
</html>
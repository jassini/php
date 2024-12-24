<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function f1(){
        print "Hello";
    }
    echo f1();
    print "<hr>";

    function f3($a){
        print "welcome on board $a";
    }
    f3("Arditi");
    function f4(...$x){
        foreach($x as $y){
            print "$y ";
        }
    }
    print "<hr>";

    f4(76,32,69,48);
    print "<hr>";

    function f5($x,$y,$z){
        if($x+$y>$z){
            print "yes";
        }
        else{
            print "no<br>";
        }
    }
    f5(4,3,8);
    f5(2,9,7);

    print "<hr>";

    function f6(...$x){
        $parametrat=count($x);
        print "numri i parametrav te funksionit eshte: $parametrat";
    }
    
    f6(1,2,3,4,5,6,7,8,9);
    print "<hr>";

    function f7($mbiemri,...$emrat){
        foreach($emrat as $x){
            print "ju jeni $x $mbiemri <br>";
        }
    }
    f7("piraj","florian","hamdi","enes");
    print "<hr>";

    function f8($username,$password){
        print "username i juaj eshte: $username,kurse passwordi juaj eshte $password<br>";
    }
    f8("Arditi",1234);
    f8("erioni",11112222);
    f8("jasini",8765421);
    print "<hr>";

    function f9($emri,$mosha){
        if($mosha<18){
            print "ju jeni $emri dhe ne baze te moshes ju jeni person adoleshent<br>";
        }
        else{
            print "ju jenni $emri dhe ne baze te moshes ju jeni te rritur";
        }
    }
    f9("Jasin", 19);
    f9("erion",15);

    print "<hr>";

    function f10($a,$b){
        if($a<$b){
            print "numri pare $a eshte me i vogel se numri i dyte $b <br> ";
        }
        else{
            print "numri i dyte $b eshte me i vogel se numri i pare $a <br> ";
        }
    }
    f10(1,4);
    f10(3,5);
    f10(3,2);
    print "<hr>";

    function f11(...$x){
        foreach($x as $z){
            if($z%2==0){
                print "numri $z plotpjestohet me 2 <br> ";
            }
            else{
                print "numri $z nuk plotpjestohet me 2<br> ";
            }
        }
    }
    f11(rand (1,10),rand (1,10),rand (1,10),rand (1,10),rand (1,10),);
    print "<hr>";

    function f12(...$x){
        $shuma=0;
        foreach($x as $a){
            $shuma+=$a;
        }
        print "shuma totale e parametrave te funksionit eshte $shuma";
    }
    f12(23,54,87,59,38,70);
    print "<hr>";

    function f13(...$w){
        $t=array_sum($w);
        print "$t";
    }
    f13(23,54,87,59,38,70);
    print "<hr>";

    function f14(...$x){
        $shuma=array_sum($x);
        $mesatarja=$shuma/count($x);
        print "mosha mesatare e eklases sone eshte : $mesatarja";
    }
    f14(31,16,15,18,18,18,18,17,18,19);
    print "<hr>";
    print "<hr>";

    function f15(...$numri){
        print "vlerat e parametrave te funksionit janee: "
        foreach ($numri as $x){
            print "$x ";
        }
        print "<br>";
        rsort ($numri);
        print "numrat e renditur tek me i madhi tek me i vogli jane: ";
        foreach($numri)
    }
    
    









?>
    
</body>
</html>
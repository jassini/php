<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="detyra2.php" method="get" placeholder="shenoni gjatesine ne meter">
<label>numri ne meter</label>
<input type="number" name="numri">

</form>

<form action="detyra2.php" method="get" placeholder="shenoni numrin fillestar">

    <label>numri fillestar</label>
    <input type="number" name="fillestare">

    <label>numri final</label>
    <input type="number" name="final">

    <label>nr rrites</label>
    <input type="number" name="rrites">

    <input type="submit" value="LOOP">
    <form action="detyra2.php" method="get" placeholder="shenoni numrin fillestar">
    <input type="number" name="mosha" placeholder="shenoni  moshen tuaj">
    <input type="submit" value="dekada"








    <?php
        
        if(isset($_GET["mosha"])){
            $mosha=$_GET["mosha"];
            if($mosha>0 and $mosha<=10){
                print "ju jeni duke jetuar ne dekaden e pare te jetes suaj";
            }
            elseif($mosha>20 and $mosha<=20){
                print " ju jeni duke jetuar ne dekaden e dyte te jetes suaj";
            }
            elseif($mosha>30 and $mosha<=30){
                print " ju jeni duke jetuar ne dekaden e dyte te jetes suaj";
            }
            elseif($mosha>40 and $mosha<=40){
                print " ju jeni duke jetuar ne dekaden e dyte te jetes suaj";
            }
            elseif($mosha>50 and $mosha<=50){
                print " ju jeni duke jetuar ne dekaden e dyte te jetes suaj";
            }

        }






       /* if(isset($_GET["numri"])){
            $numri=$_GET["numri"];
            $cm=$numri*100;
            print "vlera $numri ne meter eshte  e barabrte me $cm cm";
        }

        if(isset($_GET["fillestare"]) && isset($_GET["final"]) && isset($_GET["rrites"])){

            $fillestare=$_GET["fillestare"];
            $final=$_GET["final"];
            $rrites=$_GET["rrites"];

            for($fillestare; $fillestare<=$final; $fillestare+=$rrites){
                print "$fillestare";
            }

        }*/





       // $hey1=$_POST["numri"];
        //$hey2=$hey1*100;
       // print "vlera ne meter eshte e barabrte me $hey2";






    ?>
    
</body>
</html>
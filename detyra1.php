<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="detyra1.php" method="post">

<label>mosha1</label>
<input type="number" name="mosha1">

<label>mosha2</label>
<input type="number" name="mosha2">

<input type="submit" value="krahaso">

</form>

<form action="detyra1.php" method="post">

<label>numri</label>
<input type="number" name="hey1">

<input type="submit" value="shpjego">

</form>
<hr>
<?php
if(isset($_POST["hey1"])){
    $hey1=$_POST["hey1"];
    if($hey1%2==0 && $hey1<100){
        print "numri eshte qift dhe me i vogel se 100";
    }
    elseif($hey1%2==1 && $hey1<100){
        print "numri eshte tek dhe me i vogel se 100";
    }
    elseif($hey1%2==0 && $hey1>=100){
        print "numri eshte qift dhe i barabarte ose me i madh se 100";
    }
    elseif($hey1%2==1 && $hey1>=100){
        print "numri eshte tek dhe eshte me i madh ose i barbarte me 100";
    }
}

if(isset($_POST["mosha1"])){
    $inputi1=$_POST["mosha1"];
    $inputi2=$_POST["mosha2"];
    if($inputi1==$inputi2){
        print "keta te dy jane te njejt me vjet";
    }
    elseif($inputi1<$inputi2){
        print "mosha e pare me e madhe se mosha e dyte";
    }
    else{
        print "mosha e dyte me e madhe se e para";
    }
}








?>


    
</body>
</html>
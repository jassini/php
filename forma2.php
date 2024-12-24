<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="forma2.php" method="post">

        <label>shenoni nje sring</label>
        <input type="text" name="in1">

        <label>shenoni nje string tjeter</label>
        <input type="text" name="in2">

        <input type="submit" value="krahaso">

    </form>

    <?php
    if(isset($_POST["in1"])){
        $inputi1=$_POST["in1"];
        $inputi2=$_POST["in2"];
        $sh1=strtolower($inputi1);
        $sh2=strtolower($inputi2);
        if($sh1==$sh2){
            print "permbajtja e stringjeve eshte e njejte";
        }
        else{
            print "stringjet nuk jane te njejta";
        }
        
    }
    else{
        print "inputi nuk ka vlere";
    }
    ?>
    
</body>
</html>
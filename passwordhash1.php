<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form action="passwordhash1.php" method="post">

<label>shenoni nje password</label>
<input type="password" name="in1">


<input type="submit" value="krahaso">

</form>







    <?php


        if(isset($_POST["in1"])){
            $inputi1=$_POST["in1"];
            $passwordi="Programimi";
            $hashpass=password_hash($passwordi,PASSWORD_DEFAULT);

            $verifyy=password_verify($inputi1,$hashpass);
            if($verifyy){
                print "ja keni qelluar passwordit";
            }
            else{
                print "passwordin e keni shenuar gabim";
            }
        }

            












        $pass1="Lipjan123";
        $enkryption=password_hash($pass1,PASSWORD_DEFAULT);
        print $enkryption;

        $pass2="Lipjan123";
        $test2=password_verify($pass2,$enkryption);
        if($test2){
            print "<br>passwordat jane te njejte";
        }
        else{
            print "<br>passwordat jane te ndryshem";
        }








    ?>
    
</body>
</html>
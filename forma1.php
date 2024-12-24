<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form action="forma1.php" method="get">
      <label>Email</label>
        <input type="email" name="email">
        <label>password</label>
        <input type="password" name="password">
        <input type="submit" value="Log In">

    </form>
    <br><hr>

    <form action="forma1.php" method="get">
        <label>numri</label>
        <input type="number" name="numri">
        <label>password</label>
        
        <input type="submit" value="SQRT">

    </form>

    <?php



        $numri=$_GET["numri"];
        $rrenja=sqrt($numri);
        $nr=floor($rrenja);
        print "Rrenja katrore e numrit $numri eshte $nr<br>";
    
        $email=$_GET["email"];
        print "emaili juaj eshte $email";
        print "<br>";
        $password=$_GET["password"];
        print "passwordi juaj eshte $password";
        print "<br>";
        $passwordi=strlen($password);

        if($passwordi<8){
            print "passwordi juaj pranohet dhe ka me shume se 8 karaktere";
        }
        else{
            print "passwordi nuk pranohet shkruj me shume se 8 shkronja";
        }





    ?>
    
</body>
</html>
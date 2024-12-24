<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php


    $file1="example.txt";
    $open=fopen($file1, "w");
    $teksti="Php me database";
    fwrite($open,$teksti);
    FCLOSE($open);


    $file2="./fajllat/text1.txt";
    $open2=fopen($file2,"w");
    fwrite($open2,"welcome to database");
    fclose($open2);

    $open3=fopen($file2,"w");
    fwrite($open3,"Welcome to php with database");
    fclose($open3);

    $file3="./fajllat/text2.txt";
    $open4=fopen($file3, "a");
    fwrite($open4,"teksti i pare\n");
    fclose($open4);

    $open5=fopen($file3,"w");
    fwrite($open5,"teksti i dyte");
    fclose($open5);
    

    $file4="./fajllat/text3.txt";
    $open6=fopen($file4,"r");
    $lexo=fread($open6,fileSize($file4));
    fclose($open6);
    print "<h1>$lexo</h1>";


    $file5="./fajllat/text4.txt";
    $open7=fopen($file5,"w");
    fwrite($open7,"Welcome to php with databaseeeeeee");
    fclose($open7);
    
    $open8=fopen($file5,"r");
    $lexo1=fread($open8,fileSize($file5));
    
    fclose($open8);
    print "<h1>$lexo1</h1>";

    print "numri i karaktereve brenda tekstit file eshte :".strlen($lexo);

    $emri="./fajllat/emri.txt";
    $emriopen=fopen($emri,"w");
    fwrite($emriopen,"Jasin Krasniqi");
    fclose($emriopen);

    $emriopen=fopen($emri,"r");
    $lexoemri=fread($emriopen,fileSize($emri));
    print "<input type='text' value='$lexoemri'><br>";
    fclose($emriopen);

    $email="./fajllat/emaili.txt";
    $emailopen=fopen($email,"w");
    fwrite($emailopen,"jk@sfs.com");
    fclose($emailopen);

    $emailopen=fopen($email,"r");
    $lexoemail=fread($emailopen,fileSize($email));
    print "<input type='text' value='$lexoemail'><br>";
    fclose($emailopen);

    $pass="./fajllat/passi.txt";
    $passopen=fopen($pass,"w");
    fwrite($passopen,"jk124");
    fclose($passopen);

    $passopen=fopen($pass,"r");
    $lexopass=fread($passopen,fileSize($pass));
    print "<input type='text' value='$lexopass'><br>";
    fclose($passopen);

    
    









    ?>







    
</body>
</html>
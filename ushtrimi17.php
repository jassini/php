<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>




<?php



    file_put_contents("text1.txt","programimi eshte fun");
    $lexo=file_get_contents("text1.txt");
    print $lexo;

    print "<hr>";
    $file="textt.txt";
    $teksti="programimi eshte dun";
    file_put_contents($file,$teksti);
    $lexo2=file_get_contents("textt.txt");
    print $lexo2;

    //.unlink("./fajllat/text4.txt");
    if(file_exists("./filet/.text4.txt")){
        print "file eksziston";
    }
    else{
        print "file nuk eksiston";
    }
    print "<hr>";

    file_put_contents("./fajllat/text11.txt","Lipjani Kampion");

    
    if(file_exists("./fajllat/text11.txt")){
      print   file_get_contents("./fajllat/text11.txt");
    }
    else{
        print "file nuk ekziston";
    }
    print "<hr>";

    file_put_contents("./fajllat/text12.txt","File eksiston");

    //unlink(file_exists("./fajllat/text12.txt"));
    if(file_exists("./fajllat/text12.txt")){
        print "file nuk eshte i fshire";
    }
    else{
        print "File u fshi  me sukses";
    }

    print "<hr>";

    $file="./fajllat/text13.txt";
    $text="PHP lidhet me databaze";
    file_put_contents($file,$text);
    print "teksti eshte shtuar ne file <br>";
    print "teksti i shenuar nga ana juaj eshte".file_get_contents($file);


    print "<hr>";

    $file1="./fajllat/text14.txt";
    $file2="./fajllat/text15.txt";

    file_put_contents($file1,"tungjatjeta file1");
    $lexo2=file_get_contents($file1);
    file_put_contents($file2,$lexo2);
    print file_get_contents($file2);
    










?>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php



    $stringu="PHP eshte gjuhe programuese skriptuese";
    $numri=strlen($stringu);
    print '<h1>Numri i shkronjave eshte :'.$numri.'</h1>';

    $numri2=str_word_count($stringu);
    print "<h1>Numri i fjaleve ne fjali eshte : $numri2</h1>";

    $numri3=strtoupper($stringu);
    print  $numri3;

    $numri4=strtolower($stringu);
    print "<br>".$numri4;

    $numri5=strrev('JASIN');
    print "<br>".$numri5;

    $emri='Jasin';
    $mbiemri='Krasniqi';
    $rezultati='<br>'.$emri.' '.$mbiemri;
    print $rezultati;

    $rezultati2="$emri $mbiemri";
    print '<br>'.$rezultati2








    ?>
    
</body>
</html>
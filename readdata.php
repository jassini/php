<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        a{
            display:black;
            width: 200px;
            height:auto;
            background-color:lightcyan;
            text-decoration:none;
            font-size:20px;
            display:flex;
            justify-content:center;
            align-items:center;
            border:1px solid black;
            margin: 15px auto;
            border-radius:8px;
        }
    </style>
</head>
<body>
    <?php

            $host='localhost';
            $username="root";
            $password="";
            $dbname="hh";
            $table="tabela2";


            try {
                // Set up the DSN (Data Source Name)
                $dsn = "mysql:host=$host; dbname=$dbname";
                $conn = new PDO($dsn, $username, $password);
                
                // Prepare and execute the SQL statement
                $sql = "SELECT * FROM $table WHERE ID=:id";
                $id = 1; // The ID you want to query for
                $stmt = $conn->prepare($sql);
                $stmt->execute([":id" => $id]);
                
                // Fetch the result
                $rezultati = $stmt->fetch(PDO::FETCH_ASSOC);
                print "<div style='border:1px solid black;margin:auto;width:35%'>";
                // Check if a row was returned
                if ($rezultati) {
                    // If the query returned data, print it
                    print "<h3>Emri juaj eshte: " . $rezultati["Name"] . "</h3>";
                    print "<h3>mbeimri juaj eshte: " . $rezultati["Surname"] . "</h3>";
                    print "<h3>emaili juaj eshte: " . $rezultati["Email"] . "</h3>";
                    print "<h3>passwordi juaj eshte: " . $rezultati["Password"] . "</h3>";
                } else {
                    // If no data was found, display a message
                    print "<h3>No data found for the given ID</h3>";
                }
                print "</div>";
            } catch (PDOException $a) {
                // If there is an error with the database connection or query, catch it and display the error message
                print "Error: " . $a->getMessage();
            }
            
    ?>
    <a href="insertdata5.php">Shto nje rekord te ri </a>
    
</body>
</html>
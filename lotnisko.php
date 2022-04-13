<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "egzamin";

$conn = mysqli_connect($host, $user, $pass, $dbname) or die("Błąd połączenia");

$q = "SELECT czas,kierunek,nr_rejsu,status_lotu FROM przyloty ORDER BY czas ASC;";





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl5.css">
    <title>Port lotnisko</title>
</head>
<body>
    <div>
        <header>
            <div><img src="zad5.png" alt="logo lotnisko"></div>
            <div><h1>Przyloty</h1></div>
            <div>
                <h3>przydatne linki</h3>
                <a href="kwerendy.txt" target="blank">Pobierz...</a>
            </div>
        </header>
        <main>
            <table>
                <tr>
                    <th>czas</th>
                    <th>kierunek</th>
                    <th>numer rejsu</th>
                    <th>status</th>
                </tr>
                <?php
                    $result = mysqli_query($conn, $q);

                    while ($row == mysqli_fetch_assoc($result)) {
                        echo "<pre>";
                        var_dump($result);
                        echo "</pre>";

                        // echo "
                        // <tr>
                        //     <td>". $row['czas'] ."</td>
                        //     <td>". $row['kierunek'] ."</td>
                        //     <td>". $row['nr_rejsu'] ."</td>
                        //     <td>". $row['status_lotu'] ."</td>
                        // </tr>";
                    }
                ?>
            </table>
        </main>
    </div>
    <div>
        <footer>
            <?php

            ?>
        </footer>
        <footer>
            <span>Autor: Phoenix_55</span>
        </footer>
    </div>
</body>
</html>
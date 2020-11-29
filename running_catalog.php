<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="nav.css" type="text/css" />
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <title>Running catalog</title>
</head>
<body>
    <div class="nav">
        <img class="nav_logo" src="./images/athletics.svg" alt="logo">
        <div class="website_title">
            <h1>Katalog biegania</h1>
        </div>
        <div class="nav_favourite" onclick="location.href='./favourite_runs.php';">
            <img class="nav_favourite_img" src="./images/star.svg" alt="favourite">
        </div>
        <div class="search_box">
            <input type="text" placeholder="Jakiego biegu szukasz?">
            <i class="fas fa-search"></i>
        </div>
    </div>



    
    <div class="running-container">
        
        <table class="running-table" >
            <thead class="running-table__head">
            <tr>
                    <th>
                        Data zawodów
                    </th>
                    <th>
                        Miejsce zawodów
                    </th>
                    <th>
                        Województwo
                    </th>
                    <th>
                        Dystans
                    </th>
                    <th>
                        Nazwa Imprezy
                    </th>
                </tr>
            <?php
                $connection=@mysql_connect('127.0.0.1:3306','root','')  //$connection=@mysql_connect('mysql.cba.pl','Administrator','Administrator123')
                    or die('zly adres lub login');
                    $db=@mysql_select_db('baza zawodow',$connection);
                    
                $sql = "select * from `baza zawodow`";
                $wynik = mysql_query($sql); 
                
                    while($linia=mysql_fetch_array($wynik))
                    {
                        echo '<tr>';
                        echo    '<th>';
                        echo   $linia[0];
                        echo    '</th>';
                        echo    '<th>';
                        echo   $linia[1];
                        echo    '</th>';
                        echo    '<th>';
                        echo   $linia[2];
                        echo    '</th>';
                        echo    '<th>';
                        echo   $linia[3];
                        echo    '</th>';
                        echo    '<th>';
                        echo   $linia[4];
                        echo    '</th>';
                        echo '</tr>';
                    };
            ?>
                
            </thead>
            <tbody>

            </tbody class="running-table__body">
        </table>
    </div>
</body>
</html>
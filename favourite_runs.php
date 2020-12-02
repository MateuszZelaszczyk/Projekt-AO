<?php
session_start();
if ($_SESSION['mylog'] == false) {
    header("Location: ./index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="nav.css" type="text/css" />
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link rel="stylesheet" href="running_catalog.css" type="text/css" />
    <link rel="stylesheet" href="favourite.css" type="text/css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <SCRIPT type="text/javascript" language="JavaScript" SRC="scripts.js"></SCRIPT>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favourite Runs</title>
</head>

<body>
    <div class="nav">
        <img class="nav_logo" src="./images/athletics.svg" onclick="location.href='./running_catalog.php';" alt="logo">
        <button class="logout" onclick="location.href='./LogOut.php';">Wyloguj</button>
        <div class="website_title">
            <h1>Ulubione</h1>
        </div>
        <button class="nav_favourite-back" onclick="history.back();">
            Powrót do katalogu
        </button>
    </div>
    </div>
    <div class="favourite_container">
        <table class="fa_run">
            <thead class="fa_run-head">
                <tr>
                    <td>
                        Nazwa imprezy
                    </td>
                    <td>
                        Dystans
                    </td>
                    <td>
                        Województwo
                    </td>
                    <td>
                        Miasto
                    </td>
                    <td>
                        Data
                    </td>
                </tr>
            </thead>
            <tbody class='fa_run-body'>
                
                    <?php
                    $login=strtolower( $_GET['login']);
                    $connection = @mysqli_connect('127.0.0.1:3306', 'root', '', 'baza')
                        or die('zły adres lub login');
                    mysqli_set_charset($connection, 'UTF8');
                    $sql = "select * from `$login`";
                    $wynik = mysqli_query($connection, $sql);
                    while ($linia = mysqli_fetch_array($wynik)){
                        echo"<tr class='fa_run-body-tr'>";
                        echo "<td>". $linia[0]. "</td>";
                        echo "<td>". $linia[1]. "</td>";
                        echo "<td>". $linia[2]. "</td>";
                        echo "<td>". $linia[3]. "</td>";
                        echo "<td>". $linia[4]. "</td>";
                        echo "</tr>";
                    }
                    ?>
                
            </tbody>
        </table>
    </div>
</body>

</html>
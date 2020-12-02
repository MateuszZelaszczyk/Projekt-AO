
<?php
session_start();
if($_SESSION['mylog']==false){
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
        <button class="nav_favourite-back" onclick="history.back();" >
            Powrót do katalogu
        </button>
    </div>
    </div>
    <div class="favourite_container">
    <table class="fa_run">
        <thead>
            <tr>
              <td>
                 Miejsce
              </td>
              <td>
                 Województwo
              </td> 
              <td>
                 Dystans
              </td> 
              <td>
                 Nazwa imprezy 
              </td> 
              <td>
                 Data 
              </td>  
            </tr>
        </thead>
    </table>
    </div>
</body>
</html>
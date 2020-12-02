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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favourite Runs</title>
</head>
<body>
    <div class="nav">
        <img class="nav_logo" src="./images/athletics.svg" onclick="location.href='./running_catalog.php';" alt="logo">
        <div class="website_title">
            <h1>Katalog biegania</h1>
        </div>
        <div class="nav_favourite" onclick="location.href='./favourite_runs.php';">
            <img class="nav_favourite_img" src="./images/star.svg" alt="favourite">
        </div>
    </div>
    <div class="favourite_container">

    </div>
</body>
</html>
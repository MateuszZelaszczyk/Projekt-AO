<?php
    $connection = @mysqli_connect('127.0.0.1:3306', 'root', '', 'baza')
        or die('zły adres lub login');
    mysqli_set_charset($connection, 'UTF8');
    $Login = $_COOKIE['log'];
    $Name = $_COOKIE['name'];
    $Distance = $_COOKIE['distance'];
    $Province = $_COOKIE['province'];
    $City = $_COOKIE['city'];
    $Date = $_COOKIE['date'];
    $sql = "select * from `$Login`";
    $wynik = mysqli_query($connection, $sql);
    $powtorka = false;
    while ($linia = mysqli_fetch_array($wynik)) {
        if ($linia[0] == $Name) {
            $powtorka = true;
        }
    }
    if ($powtorka===true) {
        
    }
    else{
        $sql="INSERT INTO `$Login`(`Nazwa`, `Dystans`, `Województwo`, `Miasto`, `Data biegu`) VALUES ( '" . $Name . "', '" . $Distance . "', '" . $Province . "', '" . $City . "', '" . $Date . "')";
        $wynik = mysqli_query($connection, $sql);
    } 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css" type="text/css" />
    <SCRIPT type="text/javascript" language="JavaScript" SRC="scripts.js"></SCRIPT>
    <title>Witaj</title>
</head>

<body>
    <?php
    $connection = @mysqli_connect('127.0.0.1:3306', 'root', '', 'baza')
        or die('zły adres lub login');
    mysqli_set_charset($connection, 'UTF8');
    $Login = $_POST['Login'];
    $sql = "select * from `baza uzytkownikow`";
    $wynik = mysqli_query($connection, $sql);
    $powtorka = false;
    while ($linia = mysqli_fetch_array($wynik)) {
        if ($linia[1] == $Login) {
            $powtorka = true;
        }
    }
    if ($powtorka) {
        
        ?>
        <div class="Welcome">
        <h1>Twój login jest już zajęty. Wybierz inny</h1>
        <button class="Go" onclick="location.href='./register_panel.php';">Powrót do rejestracji</button>
    </div>
    <?php
    } else {

        $Mail = $_POST['Mail'];
        $Haslo = $_POST['Haslo'];
        $Tel = $_POST['Telefon'];
        $Uro = $_POST['Urodziny'];
        $sql = "INSERT INTO `baza uzytkownikow`( `Login`, `Mail`, `Hasło`, `Nr telefonu`, `Data urodzenia` ) VALUES( '" . $Login . "', '" . $Mail . "', '" . $Haslo . "', '" . $Tel . "', '" . $Uro . "')";
        $wynik = mysqli_query($connection, $sql);
        ?>
        <div class="Welcome">
        <h1>Rejestracja przebiegła pomyślnie</h1>
        <button class="Go" onclick="location.href='./running_catalog.html';">Przejdź do katalogu</button>
    </div>
    <?php
    }
    
    ?>
</body>

</html>
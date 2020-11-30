<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css" type="text/css" />
    <SCRIPT type="text/javascript" language="JavaScript" SRC="scripts.js"></SCRIPT>
    <title>Rejestracja</title>
</head>

<body>
    <div class="container-form" >
        <form class="register-form" action="Dodaj.php" method="POST">
            <H2>Panel rejestracji</H2>
            <label>Login:*</label> <input class="inp" name="Login" required="">
            <br>
            <label>E-mail:*</label><input type="email" class="inp" name="Mail" required="">
            <br>
            <label>Hasło:*</label><input type="password" class="inp" name="Haslo" required="">
            <br>
            <label>Powtórz hasło:*</label><input type="password" name="haslo2" class="inp" required="">
            <br>
            <label>Nr telefonu:*</label><input type="tel" class="inp" name="Telefon" required="">
            <br>
            <label>Data urodzenia:*</label><input type="date" class="inp" name="Urodziny" required="">
            <br>
            <div class="btn-box">
                <button class="btn">Załóż konto</button>
                <input type="button" class="btn" onclick="location.href='./index.html';" value="Cofnij">
            </div>
        </form>
    </div>
    
</body>

</html>
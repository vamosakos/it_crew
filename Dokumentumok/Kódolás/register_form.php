<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <title>Regisztráció</title>
</head>
<body>
    <h1>Regisztráció</h1>
    <table class="logreg">
        <form action="register.php" method="POST" enctype="multipart/form-data">
            <tr>
                <td>Felhasználónév*:</td>
                <td><input type="text" name="felhasznalonev" placeholder="valaki123" required/></td>
            </tr>
            <tr>
                <td>Név:</td>
                <td><input type="text" name="nev" placeholder="Teljes Név"/></td>
            </tr>
            <tr>
                <td>Jelszó*:</td>
                <td><input type="password" name="jelszo" placeholder="**********" required/></td>
            </tr>
            <tr>
                <td>Email*:</td>
                <td><input type="email" name="email" placeholder="valaki@email.com" requiered/></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Regisztrálok"/></td>
            </tr>
        </form>
    </table>
</body>
</html>
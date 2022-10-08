<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <title>Bejelentkezés</title>
</head>
<body>
    <h1>Bejelentkezés</h1>
    <table class="logreg">
        <form action="login.php" method="post">
            <tr>
                <td>Felhasználónév:</td>
                <td><input type="text" name="felhasznalonev"></td>
            </tr>
            <tr>
                <td>Jelszó:</td>
                <td><input type="password" name="jelszo"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Bejelentkezek" name="login"></td>
            </tr>
        </form>
    </table>
</body>
</html>
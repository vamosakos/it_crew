<link rel="stylesheet" type="text/css" href="style.css"/>
<?php
    require 'mydbms.php';

    if(isset($_POST['felhasznalonev']) &&
        isset($_POST['nev']) &&   
        isset($_POST['jelszo']) &&
        isset($_POST['email']) ) {

        $con = connect('sutippek', 'root', '');

        $felhasznalonev = $_POST['felhasznalonev'];
        $nev = $_POST['nev'];
        $jelszo = md5($_POST['jelszo']);
        $email = $_POST['email'];

        $query =  "INSERT INTO users (username, name, password, email)
        VALUES('$felhasznalonev', '$nev', '$jelszo', '$email')";

        $results = mysqli_query($con, $query);
        if(!$results)
            die("Hiba:".mysqli_errno($con));
        else {
            echo "<div class='respond'>Sikeres regisztráció!</div><br>";
            echo "<div class='respond'><a href='index.php?page=10'>Bejelentkezés</a></div>";
        }
    }
?>
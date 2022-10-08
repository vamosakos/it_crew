<link rel="stylesheet" type="text/css" href="style.css"/>
<?php
    require "mydbms.php";

    $con = connect('sutippek', 'root', '');
    $felhasznalonev = $_POST['felhasznalonev'];
    $jelszo = md5($_POST['jelszo']);

    $query = "SELECT * FROM users
     WHERE username='$felhasznalonev' AND password='$jelszo'";
    $results=mysqli_query($con, $query);
    $data=mysqli_fetch_row($results);

    if($data == NULL)
    {
        echo "<div class='respond'> Helytelen felhasználónév és jelszó páros, kérem próbálja újra</div><br>";
        echo "<div class='respond'> Vissza a bejelentkezéshez <a href='index.php?page=10'>itt</a></div>";
    }
    else {
        session_start();
        $_SESSION['id']=$data[0];
        $_SESSION['felhasznalonev']=$data[1];
        $_SESSION['nev']=$data[2];
        $_SESSION['email']=$data[4];
        $_SESSION["logged_in"] = true;
        header("Location: index.php");
    }
?>
<link rel="stylesheet" type="text/css" href="style.css"/>
<?php
    if(!isset($_POST['nev']) &&
     !isset($_POST['leiras']))
    {
        echo "Adjon meg minden bementet!";
        echo "<a href='index.php?page=5'>Vissza</a>";
    }
    else{
        require 'mydbms.php';
        $con = connect('sutippek', 'root', '');

        $nev = $_POST['nev'];
        $leiras = $_POST['leiras'];
        $fajlnev = basename($_FILES['kep']['name']);
        $fajltipus = pathinfo($fajlnev, PATHINFO_EXTENSION);
        $elfogadotttipus = array('jpg', 'png', 'jpeg', 'gif');

        session_start();

        $id = $_SESSION['id'];

        if (in_array($fajltipus, $elfogadotttipus)) {
        $kep = $_FILES['kep']['tmp_name'];
        $keptartalma = addslashes(file_get_contents($kep));
        $query = "INSERT INTO recipes (name, details, picture, user_id) VALUES ('$nev', '$leiras', '$keptartalma', '$id')"; /*2*/
        
        $result = mysqli_query($con, $query);


        header('Location: index.php');
        }
    }
?>
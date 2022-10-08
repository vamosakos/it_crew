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
        
        $query = "INSERT INTO recipes (name, details) VALUES ('$nev', '$leiras')";
        
        $result = mysqli_query($con, $query);

        header('Location: index.php');
        }
?>
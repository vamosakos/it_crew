<?php
    echo "<a href='index.php?page=0'>Főoldal</a>";
    
    if (isset($_SESSION['logged_in'])) {
        echo "<a href='index.php?page=5'>Új recept hozzáadása</a>";
        echo "<a href='logout.php'>Kijelentkezés</a>";
    }
    if (!isset($_SESSION['logged_in'])) {
        echo "<a href='index.php?page=10'>Bejelentkezés</a>";
        echo "<a href='index.php?page=15'>Regisztráció</a>";
    }
?>
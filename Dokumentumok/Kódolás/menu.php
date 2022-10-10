<?php
echo "<nav class='navbar navbar-expand-lg fixed-top'>";
echo "<div class='container-fluid'>";
    echo "<h1 class='menu'>SüTippek</h1>";
    echo "<a class='nav-link' href='index.php?page=0'>Főoldal</a>";
    
    if (isset($_SESSION['logged_in'])) {
        echo "<a class='nav-link' href='index.php?page=5'>Új recept hozzáadása</a>";
        echo "<a class='nav-link' href='logout.php'>Kijelentkezés</a>";
    }
    if (!isset($_SESSION['logged_in'])) {
        echo "<a class='nav-link' href='index.php?page=10'>Bejelentkezés</a>";
        echo "<a class='nav-link' href='index.php?page=15'>Regisztráció</a>";
    }
echo "</div>";
echo "</nav>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
?>
<?php
    if(!isset($_GET['page']) || empty($_GET['page']))
    {
        $d = 0;
    }
    else {
        $d = $_GET['page'];
    }

    switch($d) {
        case 0:
            include 'list_recipes.php';
            break;
        case 5:
            include 'add_recipe_form.php';
            break;
        case 10:
            include 'login_form.php';
            break;
        case 15:
            include 'register_form.php';
            break;
    }
?>
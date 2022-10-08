<?php
    session_start();
    require 'mydbms.php';
    $con = connect('sutippek','root','');

    $recipe_id = $_POST['recipe_id'];
    $userId = $_SESSION['id'];
    $query = "DELETE FROM favorites
     WHERE recipe_id=$recipe_id AND user_id=$userId";
    $result = mysqli_query($con, $query);
    header('Location: index.php');
?>
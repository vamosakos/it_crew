<?php
    session_start();
    $recipe_id = $_POST['recipe_id'];
    $userId = $_SESSION['id'];
    require 'mydbms.php';
    $con = connect('sutippek','root','');

    $query = "INSERT INTO favorites VALUES('$userId','$recipe_id')";
    $result = mysqli_query($con,$query);

    header('Location: index.php');
?>
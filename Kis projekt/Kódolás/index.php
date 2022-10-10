<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="bootstrap.css">

    <link rel="stylesheet" type="text/css" href="style.css"/>
    <title>Főoldal</title>
</head>
<body>
    <?php
        session_start();
    ?>
    <div class="menu">
        <ul><?php require "menu.php";?></ul>
    </div>
    <div class="content">
       <?php require "content.php"; ?>
    </div>
</body>
</html>
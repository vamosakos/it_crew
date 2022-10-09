<?php
    require 'mydbms.php';
    $con = connect('sutippek', 'root', '');


    $query = "SELECT id, name, details, picture, (SELECT username FROM users WHERE id=user_id) FROM recipes";

    if(isset($_GET["kereses"]) && !empty($_GET["keresendo"]))
    {
        $keresendo = $_GET["keresendo"];
        $query = $query." WHERE name LIKE '%$keresendo%'"; 
    }
    if(isset($_GET["rendezes"]) && !empty($_GET["rendezes"])) {
        $szempont = $_GET["rendezes"];
        $query .= " ORDER BY $szempont";
    }
    $results = mysqli_query($con, $query);
    $recipes = mysqli_fetch_all($results); 


    function likeLekerdezes($con, $recipe_id)
    {
        $recipesLikes = mysqli_query($con, "SELECT COUNT(user_id) FROM favorites WHERE recipe_id=$recipe_id GROUP BY recipe_id");
        $resultLikes = mysqli_fetch_row($recipesLikes);

        if ($resultLikes == NULL)
        {
            return 0;
        }
        return $resultLikes[0];
    }

    function getImageTag($pictureByte)
    {
        $kep = base64_encode($pictureByte);
        return "<img style=\"width:128px;height:128px;\" src=\"data:image/jpg;charset=utf8;base64,$kep\"/>";
    }
?>




<table class="kereses">
    <form action="" method="GET">
        <tr>
            <td colspan=2><input type="text" name="keresendo">
            <button type="submit" name="kereses">Keresés</button></td>
        </tr>
    </form>
    <form action="" method="GET">
        <tr>    
            <td><button type="submit" name="rendezes" value="name">Rendezés</button></td>
            <td><button onclick="display()">Oldal nyomtatása</button></td>
            <script>
            function display() {
            window.print();
            }
            </script>
        </tr>
    </form>
</table>

<?php foreach($recipes as $recipe): ?>

    <br><table class="recipes">
        <tr>
            <td colspan="2">
                <?php echo getImageTag($recipe[3]); ?>
            </td>
        <tr>
        <tr>
            <td>Feltöltő</td>
            <td> <?= $recipe[4] ?> </td>
        </tr>
        <tr>
            <td>Név</td>
            <td> <?= $recipe[1] ?></td>
        </tr>
        <tr>
            <td>Leírás</td>
            <td> <?= $recipe[2] ?></td>
        </tr>
        <tr>
            <td>Kedvelések: </td>
            <td> <?= likeLekerdezes($con, $recipe[0]) ?></td>
        </tr>
        <tr>
            <td>
                <?php
                    if (isset($_SESSION['logged_in'])) {
                        $query = "SELECT * FROM favorites
                        WHERE user_id=".$_SESSION['id']." AND recipe_id=".$recipe[0];
                        $results = mysqli_query($con, $query);
                        $result = mysqli_fetch_row($results);

                        if($result != NULL) {
                            echo '<form action="remove_favorite.php" method="POST">
                            <input type="hidden" value="'.$recipe[0].'" name="recipe_id">
                            <button type="submit">Kedvelés visszavonása</button>
                        </form>';
                        }
                        else {
                            $query = "SELECT * FROM favorites
                            WHERE recipe_id=".$recipe[0];
                            $results = mysqli_query($con, $query);
                            $result = mysqli_fetch_all($results);
                            echo '<form action="add_favorite.php" method="POST">
                            <input type="hidden" value="'.$recipe[0].'" name="recipe_id">
                            <button type="submit">Kedvelés</button>
                            </form>';
                        }
                    }
                ?>
            <td>
        </tr>
    </table>
    <br><br>
<?php endforeach; ?>
<h1>Adjon hozzá egy új receptet</h1>
<table class="logreg">
    <form action="add_recipe.php" method="POST" enctype="multipart/form-data">
        <tr>
            <td class="bold"><label for="nev">Sütemény neve*: </label></td>
            <td><input type="text" name="nev" id="nev" required/></td>
        </tr>
        <tr>
            <td class="bold"><label for="leiras">Leírás*: </label></td>
            <td><textarea name="leiras" id="leiras" placeholder="Kezdjen el gépelni..."></textarea></td>
        </tr>
        <tr>
            <td class="bold"><label for="kep">Kép*: </label></td>
            <td><input type="file" name="kep" required/></td>
        </tr>
        <tr>
            <td></td>
            <td><button class="btn btn-primary" type="submit">Hozzáadás</button></td>
        </tr>
    </form>
</table>
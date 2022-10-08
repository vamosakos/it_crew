<table class="logreg">
    <form action="add_recipe.php" method="POST">
        <tr>
            <td><label for="nev">Sütemény neve*: </label></td>
            <td><input type="text" name="nev" id="nev" required/></td>
        </tr>
        <tr>
            <td><label for="marka">Leírás*: </label></td>
            <td><input type="text" name="leiras" id="leiras" placeholder="Írja le a sütemény elkészítéséhez szükséges tudnivalókat" required/></td>
        </tr>
        <tr>
            <td><label for="kep">Kép*: </label></td>
            <td><input type="file" name="kep" required/></td>
        </tr>
        <tr>
            <td colspan=2><button type="submit">Hozzáadás</button></td>
        </tr>
    </form>
</table>
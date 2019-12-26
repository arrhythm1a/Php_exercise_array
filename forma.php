<?php



if (isset($_POST['posalji'])){
    $ime = $_POST['ime'];

}

?>

<html>
    <head>
        <title>Forma za slanje imena</title>
    </head>
    <body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <fieldset>
            <label for="ime">Unesite ime :</label>
            <input type="text" id="ime" name="ime" placeholder="Ime">

            <label for="posalji"></label>
            <input type="submit" value="Posalji" class="button" name="posalji" id="posalji">

        </fieldset>
    </form>
    <?php
        if (isset($_POST['posalji'])){
            echo "<strong>$ime</strong>";
        }
    ?>

    </body>
</html>
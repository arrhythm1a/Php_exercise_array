
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
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $ime = $_POST['ime'];
        echo $ime;
        } else {
            if (empty($ime)){
                echo "Niste uneli ime!";
        }
    }
    ?>
    </body>
</html>

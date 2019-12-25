<?php
$izlaz = "";
if (@$_POST['rezultat']) {
    $prvi = $_POST['prvi_broj'];
    $drugi = $_POST["drugi_broj"];
    $operator = $_POST['operator'];

    $resetporuka = ' <a href="' . htmlentities($_SERVER["REQUEST_URI"]) . '"> Resetuj</a>';
    $prvi = trim(strip_tags($prvi));
    $drugi = trim(strip_tags($drugi));

    if (strlen($prvi) > 10 || strlen($drugi) > 10){
        $izlaz = "<p class='error'><strong>Greska:</strong>Uneli ste broj sa 10 i vise cifara.".$resetporuka."</p>";
    } elseif (empty($prvi) || empty($drugi)){
        $izlaz = "<p class='error'><strong>Greska:</strong>Niste uneli brojeve".$resetporuka."</p>";;

    }


}







function Digitron($a, $b, $operator){

    $result = "";
    switch ($operator){
        case "+":
            $result =  $a + $b;
            break;
        case "-":
            $result = $a - $b;
            break;
        case "/":
            $result =  $a / $b;
            break;
        case "*":
            $result = $a * $b;
            break;
        default :
            if (($operator == "/") && ($a || $b == 0)){
                echo "Deljenje sa 0 nije moguce";
            }

    }
    return $result;


}

?>
<form action="<?php echo htmlentities($_SERVER["REQUEST_URI"]); ?>" method="post">
    <fieldset>
    <legend>Digitron</legend>

    <label for="prvi_broj">Prvi broj</label>
    <input type="text" name="prvi_broj" id="prvi_broj">

    <label for="operator">Operator</label>
    <select name="operator" id="operator">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="/">/</option>
        <option value="*">*</option>
    </select>

    <label for="drugi_broj">Drugi broj</label>
    <input type="text" name="drugi_broj" id="drugi_broj">
     <input type="submit" class="button" name="rezultat" value="Rezultat">
    <?php
    $resetporuka = ' <a href="' . htmlentities($_SERVER["REQUEST_URI"]) . '"> Resetuj</a>';
    echo $resetporuka;
    if (isset($prvi,$drugi)){
        $izlaz = Digitron($prvi, $drugi,$operator);
    }

        if (!isset($prvi) || !isset($drugi)){
            echo "<p class='error'>Niste uneli broj!</p>";
        } else {

            echo $izlaz;
            }


            ?>
    </fieldset>
</form>

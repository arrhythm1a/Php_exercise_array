<?php
$izlaz = "";
if (@$_POST['rezultat']) {
    $prvi = $_POST['prvi_broj'];
    $drugi = $_POST["drugi_broj"];
    $operator = $_POST['operator'];
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

<form action="action.php" method="post">
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
    <?php echo Digitron($prvi,$drugi,$operator); ?>


</form>

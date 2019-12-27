<?php
if (isset($_POST['naruci'])){
    $kolicina_andol = $_POST['kolicina_andol'];
    $kolicina_aspirin = $_POST['kolicina_aspirin'];
    $kolicina_vitaminc = $_POST['kolicina_vitaminc'];
    $pronadji = $_POST['marketing'];

}
?>
<h1>Online apoteka</h1>
<h2>Fiskalni racun</h2>
<ul>
    <li><?php echo date('l H:i'); ?></li>
    <li>
        <?php
        $ukupna_kolicina = 0;
        $ukupna_kolicina = $kolicina_andol + $kolicina_aspirin + $kolicina_vitaminc;
        echo "Ukupna kolicina : " . $ukupna_kolicina . "<br>";
        if ($ukupna_kolicina == 0){
            echo "Niste uzeli nista!";
        } else{
            if ($kolicina_andol > 0){
                echo "<strong>Andol : </strong>" . $kolicina_andol . "<br>";
            }
            if ($kolicina_aspirin > 0){
                echo "<strong>Aspirin : </strong>" . $kolicina_aspirin . "<br>";
            }
            if ($kolicina_vitaminc > 0){
                echo "<strong>VitaminC : </strong>" . $kolicina_vitaminc . "<br>";
            }
        }
        ?>
    </li>
    <li>
        <?php
        DEFINE('ANDOLCENA', 10);
        DEFINE('ASPIRINCENA', 50);
        DEFINE('VITAMINCCENA', 100);


        $ukupna_cena = 0.00;
        $ukupna_cena = $kolicina_andol * ANDOLCENA + $kolicina_aspirin * ASPIRINCENA + $kolicina_vitaminc * VITAMINCCENA;


        echo "ukupna cena bez poreza :" . sprintf('%0.2f', $ukupna_cena) . "<br>";
        $cena_sa_porezom = $ukupna_cena * 1.08;
        echo "cena sa porezom je :" . sprintf('%0.2f', $cena_sa_porezom) . "<br>";
        ?>
    </li>
    <li>
        <?php
        if ($pronadji != 'redovan'){
            echo "Hvala!, Dodjite nam opet!";
        } else{
            echo "Hvala";
        }
        ?>
    </li>
</ul>
<?php
$datum = date('l H:i');
$narudzbine = fopen('../apoteka_narudzbine/narudzbine.txt', 'a+');
fwrite($narudzbine, $datum . " Andol: " . $kolicina_andol . " Aspirin: " . $kolicina_aspirin . " VitaminC: " . $kolicina_vitaminc . " Adresa za isporuku: " . $adresa_za_isporuku . PHP_EOL);
fclose($narudzbine);
?>

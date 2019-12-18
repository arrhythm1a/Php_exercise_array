<?php

/*

================================================================================

NAPOMENA: U svim zadacima menjati samo telo funkcije, promenljive se ne menjaju.
          Kao resenje salje se isti ovaj fajl samo dopunjen.

================================================================================

*/



/*
    1. zadatak

    Definisati funkciju censureFilter() koja tekst filtrira tražeći nepoželjne reči,
    pritom svaku karakter nepoželjne reči zameniti odgovarajućim brojem "*".

    Funkcija rezultat vraća, ne štampa, prihvata 2 parametra,
        $content (string)
        $blacklisted_words (array)

    Primer:

    $content = 'Ti meni moga sina da nazivaš lažovom pred ovolikim svetom Vozi Miško Moj Miško je genije za vožnju';
    $blacklisted_words = array('Miško', 'genije', 'vožnju');

    $result = 'Ti meni moga sina da nazivaš lažovom pred ovolikim svetom! Vozi *****. Moj ***** je ****** za ******.';


********************************************************************************
*/
function repeat_string($broj_linija){
  $linija = "";
  for ($i=0; $i < $broj_linija ; $i++) {
    $linija .= "_";
  }
  return $linija;
}

$blacklisted_words = array('Miško', 'genije', 'vožnju');


function censureFilter($content, $blacklisted_words){
  foreach ($blacklisted_words as $word) {
    $filter = str_repeat("*", strlen($word));
  }

  $result = str_replace($blacklisted_words, $filter, $content);

  return $result;
}



$content = 'Ti meni moga sina da nazivaš lažovom pred ovolikim svetom Vozi Miško Moj Miško je genije za vožnju';
$censoredText = censureFilter($content, $blacklisted_words);


/*
    2. zadatak

    Definisati funkcije convertTimeToDigital() i convertTimeToAnalog().

    2.1. convertTimeToDigital()

        kao parametar prihvata analogni format vremena => $analogTime = '16:45' (string)
        kao rezultat vraca digitalni format => return 16.75 (float)

        Primer:
        $analogTime = '16:45';
        $result = convertTimeToDigital($analogTime);
        $result = 16.75

    2.1. convertTimeToAnalog()

        kao parametar prihvata digitalni format vremena => $digitalTime = 9.87 (float)
        kao rezultat vraca analogni format => return '9:52' (string)

        Primer:
        $digitalTime = 9.87
        $result = convertTimeToAnalog($digitalTime);
        $result = '9:52'


********************************************************************************

2.1. */
echo "<br><br>";

function convertTimeToDigital($analogTime){
  $result = str_replace(":", ".", $analogTime);
  return (float)$result;
}

$analogTime = '16:45';
$result = convertTimeToDigital($analogTime);

echo "<br><br>";
/* 2.2. */

function convertTimeToAnalog($digitalTime){
  $result = str_replace("." , ":", $digitalTime);
  return (string) $result;

}

$digitalTime = 9.87;
$result = convertTimeToAnalog($digitalTime);

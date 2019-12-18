<?php

/*

    Algoritam koji skenira tekst i konvertuje (enkoduje) html tagove
    pre cuvanja u bazi. Svako pojavljivanje < zameniti sa &lt; , a > sa &gt;

    Primer:

    '<a href="#">google</a>'  ===> '&lt;a href="#"&gt;google&lt;/a&gt;'

********************************************************************************



1.1   kreirati html string - (raditi sa ovim koji je već postavljen)


$htmlString | string
*/
$htmlString = ('<ul><li><a href="#">google</a></li><li><a href="#">duck duck go</a></li><li><a href="#">bing</a></li><li><a href="#">dogpile</a></li><li><a href="#">yippy</a></li><li><a href="#">Webopedia</a></li><li><a href="#">yahoo</a></li><li><a href="#">yandex</a></li></ul>');







/*

1.2   razložiti string $htmlString na karaktere

$htmlChars | array
*/
$htmlChars = array(str_split($htmlString));
var_dump($htmlChars) . "<br><br>";




/*

1.3   na osnovu niza iz 1.2 kreirati novi niz $encodedHtmlChars koji ce
      umesto svakog elementa "<" proslediti "&lt;" i
      umesto svakog elementa ">" proslediti "&gt;",
      dok ce sve ostale elemente proslediti takve kakvi jesu, primer:

      <, s, p, a, n, >      ===>      &lt;, s, p, a, n, &gt;

$encodedHtmlChars - array
*/
$encodedHtmlChars = array();
$less_greater = array('<', '>');
$replace = array('&lt;', '&gt;');

foreach ($htmlChars as $string) {
  $encodedHtmlChars = str_replace($less_greater, $replace, $string);

}
var_dump($encodedHtmlChars);
echo "<br><br>";

/*

1.4   kovertovati $encodedHtmlChars iz tipa niz u tip string

$encodedString | array

*/

$encodedString = array(implode(',', $encodedHtmlChars));
var_dump($encodedString);

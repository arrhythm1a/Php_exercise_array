<?php

$zastave = array("jugoslavija.png","austrija.png", "belgija.png", "holandija.png", "srbija.png", "danska.png", "dominikana.png", "spanija.png", "usa.png", "ceska.png");


shuffle($zastave);
?>
<html>
    <head>
        <title></title>
    </head>
<body>
    <h1 align="center">Eurosong</h1>
    <table  width="100%" cellspacing="3" cellpadding="3">
        <tr>
            <?php
            for ($i=0;$i < count($zastave) / 2;$i++){
                echo "<td><img width='140px' src='euro_song_img/$zastave[$i]' alt=''></td>";
            }
            ?>
        </tr>
        <tr>
            <?php
            for ($i = count($zastave) / 2;$i < count($zastave);$i++){
                echo "<td><img width='140px' src='euro_song_img/$zastave[$i]' alt=''></td>";
            }
            ?>
        </tr>
    </table>
</body>
</html>

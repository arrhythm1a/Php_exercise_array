<?php
include 'data.php';
/*

   preuzimanje podataka iz drugog fajla include-ovanjem i prikaz
   podataka na osnovu različitih kriterijuma u zasebnim tabelama

********************************************************************************

1.1   podatke koje se nalaze u data priključiti ovom fajlu.

*/




/*

1.2   petljom proći sve kontakte koji se prezivaju Simpson
	  i prikazati u html tabeli u formatu:

	  ime | broj telefona
*/





?>
<table border="1" cellspacing="0" cellpadding="10" width="25%" style="float: left;">
	<thead>
		<tr>
			<th colspan="2">Simpsons family</th>
		</tr>
		<tr>
			<th>Name</th>
			<th>Number</th>
		</tr>
	</thead>
	<tbody>
		<?php
		foreach ($simpsonsPhonebook as $key => $value) {
				echo "<tr>";
				echo "<td>" . $value . "</td>";
				echo "<td>" . $key . "</td>";
				echo "</tr>";
		}
		?>
	</tbody>
</table>
<?php

/*

1.3   petljom proći sve kontakte ciji vlasnik je "Someone in Springfield Phone Book"
	   i prikazati u html tabeli:
*/
?>
<table border="1" cellspacing="0" cellpadding="10" width="25%" style="float: left;">
	<thead>
		<tr>
			<th>Someone in Springfield Phone Book - numbers</th>
		</tr>
	</thead>
	<tbody>
		<?php
		foreach ($simpsonsPhonebook as $key => $value) {
			if ($value == "Someone in Springfield Phone Book") {
				echo "<tr>";
				echo "<td>" . $key . "</td>";
				echo "</tr>";
			}
		}
		?>
	</tbody>
</table>
<?php

/*

1.4   petljom proći sve kontakte koji u prezimenu imaju
	  slovo U/u i prikazati u html tabeli u formatu:

	  ime | broj telefona
*/
?>
<table border="1" cellspacing="0" cellpadding="10" width="25%" style="float: left;">
	<thead>
		<tr>
			<th colspan="2">All the contacts with U/u letter</th>
		</tr>
		<tr>
			<th>Name</th>
			<th>Number</th>
		</tr>
	</thead>
	<tbody>
		<?php
		foreach ($simpsonsPhonebook as $key => $value) {
			if (strstr($value, "U") || strstr($value , "u")) {
				echo "<tr>";
				echo "<td>" . $value . "</td>";
				echo "<td>" . $key . "</td>";
				echo "</tr>";
			}
		}

		?>
	</tbody>
</table>
<?php

/*

1.5   petljom proći sve kontakte koji pocinju sa 555 i
	  prikazati u html tabeli u formatu

	  ime | broj telefona
*/
?>
<table border="1" cellspacing="0" cellpadding="10" width="25%" style="float: left;">
	<thead>
		<tr>
			<th colspan="2">All the contacts beginning with 555</th>
		</tr>
		<tr>
			<th>Name</th>
			<th>Number</th>
		</tr>
	</thead>
	<tbody>
		<?php
		foreach ($simpsonsPhonebook as $key => $value) {
			if (strstr($key, "555")) {
				echo "<tr>";
				echo "<td>" . $value . "</td>";
				echo "<td>" . $key . "</td>";
				echo "</tr>";
			}
		}

		?>
	</tbody>
</table>
<?php

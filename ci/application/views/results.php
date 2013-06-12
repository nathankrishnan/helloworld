
<h1>Metro Lines</h1>

<?php

	$jsonObj = Metro::getJson();

	foreach($jsonObj->Lines as $line) {
		echo "<p>";
		echo "<b>Display Name: </b>".$line->DisplayName."<br/>";
		echo "<b>End Station Code: </b>".$line->EndStationCode."<br/>";
		echo "<b>Internal Destination 1: </b>".$line->InternalDestination1."<br/>";
		echo "<b>Internal Destination 2: </b>".$line->InternalDestination2."<br/>";
		echo "<b>Line Code: </b>".$line->LineCode."<br/>";
		echo "<b>Start Station Code: </b>".$line->StartStationCode."<br/>";
		echo "</p>";
	}
?>


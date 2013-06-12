
<h1>Metro Lines</h1>

<?php

	$jsonLines = Metro::getJson("http://api.wmata.com/Rail.svc/json/JLines?api_key=", "2d3sva9w5mmhrc9wdaq3m2z3");

	foreach($jsonLines->Lines as $line) {
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


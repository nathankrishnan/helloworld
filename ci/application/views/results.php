
<?php

	//echo "<h1>Route From ".$from." To ".$to.": </h1>";
	//echo "<hr/>";

	echo $from."<br/>";
	echo $to."<br/>";

	echo "<hr/>";

	//set $from_station as the first 3 characters of $from
	$from_station = substr($from, 0, 3);
	//delete the first 4 characters (station code and |)
	$from = Functions::strDelete($from, 0, 4);
	//stores station lines into $from_lines array
	$from_lines = explode("|", $from);

	$to_station = substr($to, 0, 3);
	$to = Functions::strDelete($to, 0, 4);
	$to_lines = explode("|", $to);


/*
	echo $to_station."<br/>";
	foreach ($to_lines as $line) {
		echo $line."<br/>";
	}
*/


?>


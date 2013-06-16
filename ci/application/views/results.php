
<?php

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


	echo "<h1>Route From ".$from_station." To ".$to_station.": </h1>";
	echo "<hr/>";

	$jsonStations = Metro::getJson("http://api.wmata.com/Rail.svc/json/JStations?api_key=", "2d3sva9w5mmhrc9wdaq3m2z3");


	foreach($from_lines as $from_line) {
		//if the two stations are on the same line
		if($from_line === $to_lines[0] || $from_line ===$to_lines[1]){
			echo "take the ".$from_line." line from ".$from_station." to ".$to_station;
			break;
		}
		//if the two stations aren't on the same line
		else{
			foreach($jsonStations->Stations as $station){
				if($from_line === $station->LineCode1){
					if($station->LineCode2 === $to_lines[0]){
						echo "take the ".$from_line." line from ".$from_station." to ".$station->Name."<br/><br/>";
						echo "transfer to the ".$to_lines[0]." line and take it down to ".$to_station;
						break;
					}
					elseif($station->LineCode2 === $to_lines[1]){
						echo "take the ".$from_line." line from ".$from_station." to ".$station->Name."<br/><br/>";
						echo "transfer to the ".$to_lines[1]." line and take it down to ".$to_station;
						break;
					}
				}
				elseif($from_line === $station->LineCode2){
					if($station->LineCode1 === $to_lines[0]){
						echo "take the ".$from_line." line from ".$from_station." to ".$station->Name."<br/><br/>";
						echo "transfer to the ".$to_lines[0]." line and take it down to ".$to_station;
						break;
					}
					elseif($station->LineCode1 === $to_lines[1]){
						echo "take the ".$from_line." line from ".$from_station." to ".$station->Name."<br/><br/>";
						echo "transfer to the ".$to_lines[1]." line and take it down to ".$to_station;
						break;
					}
				
				}
			}
		}
	}




?>


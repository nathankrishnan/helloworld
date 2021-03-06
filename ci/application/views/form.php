<div id="content">

<?php
	//loads the CI form helper library
	$this->load->helper('form');

	//opens form tag and specifies action
	echo form_open('site/results');

	function printOptions($jsonStations){
		foreach($jsonStations->Stations as $station) {
			
			echo "<option value='".$station->Code."|".$station->LineCode1;

			if($station->LineCode2 != null){
				echo "|".$station->LineCode2."'>";
			}
			else{
				echo "'>";
			}
			
			echo $station->Name." [".$station->Code."]";
			echo "</option>";
		}
	}

?>

	<label for="from">From: </label>
	<select name="from">
		<!--generate dropdown options from an api request-->
		<?php
			$jsonStations = Metro::getJson("http://api.wmata.com/Rail.svc/json/JStations?api_key=", "2d3sva9w5mmhrc9wdaq3m2z3");
			printOptions($jsonStations);
	
		?>
	</select>

	<br/><br/>

	<label for="to">To: </label>
	<select name="to">
		<!--generate dropdown options from an api request-->
		<?php 
			printOptions($jsonStations); 
		?>
	</select>

	<br/><br/>

	<input type="submit" />

<?php echo form_close(); ?>


</div>
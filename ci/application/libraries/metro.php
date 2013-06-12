<?php

class Metro{

	//retrieves the JSON object with specified metro line info
	//pass in the relevant url and key for the json file
	public static function getJson($url, $key) {

		$request = $url.$key;

		$session = curl_init($request);
		curl_setopt($session, CURLOPT_HEADER, false);
		curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
		$jsonString = curl_exec($session);
		curl_close($session);

		$jsonObject = json_decode($jsonString);
		return $jsonObject;
	}

}


?>
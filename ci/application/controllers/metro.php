<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Metro extends CI_Controller {


	public function index(){

		$this->load->view('header');
		$this->load->view('results');
		$this->load->view('footer');

	}


	//retrieves the JSON object with metro info
	public static function getJson() {

		$key = "2d3sva9w5mmhrc9wdaq3m2z3";
		$url = 'http://api.wmata.com/Rail.svc/json/JLines?api_key='.$key;

		$session = curl_init($url);
		curl_setopt($session, CURLOPT_HEADER, false);
		curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
		$jsonString = curl_exec($session);
		curl_close($session);

		$jsonObject = json_decode($jsonString);
		return $jsonObject;
	}

}

?>
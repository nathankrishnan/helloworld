<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {


	public function index(){
		Site::form();
	}


	public function form(){
		$this->load->view('header');
		$this->load->view('form');
		$this->load->view('footer');
	}

	public function results(){

		$form_data = $this->input->post();

		$this->load->view('header');
		$this->load->view('results', $form_data);
		$this->load->view('footer');
	}

}

?>
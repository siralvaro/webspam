<?php
/**
* 
*/
class Crecaptcha extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function index(){
		$this->load->library('recaptcha');
		$this->load->view('vrecaptcha');
	}

	public function validar(){
		// Load the library
		$this->load->library('recaptcha');

		// Catch the user's answer
		$captcha_answer = $this->input->post('g-recaptcha-response');

		// Verify user's answer
		$response = $this->recaptcha->verifyResponse($captcha_answer);

		// Processing ...
		if ($response['success']) {
		}

        else {
		    redirect('Crecaptcha');
		    // var_dump($response);
		}
	}
}
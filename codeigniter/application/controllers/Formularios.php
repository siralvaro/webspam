<!--CONTROLADOR FORMULARIOS-->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formularios extends CI_Controller {
	//Carga la vista del formulario
	public function nuevo() {
		//Carga la libreria del captcha
		$this->load->library('recaptcha');
		//Carga el bootstrap
		$this->load->view('includes/bootstrap');
		//Carga la vista del formulario
		$this->load->view('formularios/nuevo');
	}
	//Recoge la informacion introducida por el usuario cargandola en nuestra base de datos
	public function add() {
		//Coge la informacion que ha metido el usuario
		$data = $this->input->post();
		//Manda la informacion al modelo para que la meta en la base de datos
		$this->formulario->insert($data);
		//Confirma al usuario que ha introducido los datos correctamente y redirigimos a la vista del formulario
		echo "<p style='font-size:20px;'>Gracias por su colaboracion<br /><br />Redireccionando...</p>";
		header( "refresh:3;/proyecto/codeigniter/index.php/formularios/nuevo" );
	}
	//Se asegura de que solo introduce informacion un humano y no una maquina
	public function validar() {
		//Carga la libreria
		$this->load->library('recaptcha');
		//Coge la respuesta del usuario
		$captcha_answer = $this->input->post('g-recaptcha-response');
		//Verifica la respuesta
		$response = $this->recaptcha->verifyResponse($captcha_answer);
		//Respuesta correcta
		if ($response['success']) {
		    $this->add();
		//Respuesta incorrecta, mensaje de error y redirige al formulario de nuevo
		} else {
			echo "<p style='font-size:20px;'>ReCaptcha fallido. Vuelva a intenarlo<br /><br />Redireccionando...</p>";
		    header( "refresh:3;/proyecto/codeigniter/index.php/formularios/nuevo" );
		}
	}

}

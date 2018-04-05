<!--CONTROLADOR BUSCADOR-->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buscar extends CI_Controller {

	public function index()
	{
		//Carga el bootstrap
		$this->load->view('includes/bootstrap');
		//Carga el modelo buscar_mod
		$this->load->model('Buscar_mod');
		//Si el dato de entrada aparacere en la tabla--
		if ($_POST) {
			$buscar = $this->input->post('telefonos');
		}
		//Si no no mostramos nada
		else {
			$buscar = '';
		}
		//Carga los datos
		$data['telefonos'] = $this->Buscar_mod->buscar($buscar);
		//Carga la vista de la tabla telefonos con sus datos
		$this->load->view('telefonos', $data);
	}
}

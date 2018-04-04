<!--CONTROLADOR BUSCADOR-->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buscar extends CI_Controller {

	public function index()
	{
		//cargamos el bootstrap
		$this->load->view('includes/bootstrap');
		//cargamos el modelo buscar_mod
		$this->load->model('Buscar_mod');
		//si el dato de entrada aparacere en la tabla--
		if ($_POST) {
			$buscar = $this->input->post('telefonos');
		}
		//si no no mostramos nada
		else {
			$buscar = '';
		}
		//--cargamos los datos
		$data['telefonos'] = $this->Buscar_mod->buscar($buscar);
		//cargamos la vista de la tabla telefonos con sus datos
		$this->load->view('telefonos', $data);
	}
}

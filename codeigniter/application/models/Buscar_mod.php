<!--MODELO BUSCADOR-->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class buscar_mod extends CI_Model {

//funcion de buscar
	public function buscar($bus)
	{
		//sacar el resultado de la busqueda si conincide con el registro de la tabla
    $this->db->like('numtelefono', $bus);
    $query = $this->db->get('Formularios');
    return $query->result();
	}
}

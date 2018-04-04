<?php
class Formulario extends CI_Model{

	function __construct() {
		parent::__construct();
	}
	//Nos va a servir para ejecutar el comando en sql para cargar en la base de datos la informacion dada por el usuario
	public function insert($data){
		//Recogemos la informacion introducida por el usuario y la metemos en la base de datos
		//CREATE TABLE `Formularios` (`numtelefono` int(15) NOT NULL,`descripcion` varchar(300);
		$query='insert into Formularios (numtelefono,descripcion) values ("'.$data['numtelefono'].'","'.$data['descripcion'].'")';
		$this->db->query($query);
	}
}

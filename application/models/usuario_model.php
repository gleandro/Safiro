<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function obtener_usuario($correo,$clave){
		$sql = "select idusuario,nombre,apellido,idperfil from usuario where correo = '".$correo."' and clave = '".$clave."'";
		$consulta = $this->db->query($sql);
		return $consulta->result_array();
	}

}

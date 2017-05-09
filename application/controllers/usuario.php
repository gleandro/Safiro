<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	
	public function login(){
		$datos_plantilla["header"] = $this->load->view('util/header','', true);
		$datos_plantilla["footer"] = $this->load->view('util/footer','', true);
		$datos_plantilla["data"] = array();
		$this->load->view('usuario/login',$datos_plantilla);
	}

	public function validar() {
		$correo = $this->input->post('correo');
		$clave = $this->input->post('clave');
		if ($correo && $clave) {
			$this->load->model('usuario_model');
			$usuario = $this->usuario_model->obtener_usuario($correo, $clave);
			if ($usuario) {
				$usuario_data = array(
					'idusuario' => $usuario[0]['idusuario'],
					'nombre' => $usuario[0]['nombre'],
					'logueado' => TRUE
					);
				$this->session->set_userdata($usuario_data);
				redirect('usuario/logueado');
			} else {
				redirect('usuario/login');
			}
		} else {
			redirect('usuario/login');
		}
	}

	public function logueado() {
		if($this->session->userdata('logueado')){
			$data = array();
			$data['nombre'] = $this->session->userdata('nombre');
			$this->load->view('usuario/logueado', $data);
		}else{
			redirect('usuario/login');
		}
	}
	public function cerrar_sesion() {
		$this->session->sess_destroy();
		redirect('usuario/login');
	}

	public function index()
	{
		
	}

}

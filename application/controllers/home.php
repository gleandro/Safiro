<?php 

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	
	function crear_vista(){
		$data = array();
		$data['nombre'] = $this->session->userdata('nombre');
		$data['apellido'] = $this->session->userdata('apellido');
		$data['idperfil'] = $this->session->userdata('idperfil');
		$datos_plantilla["header"] = $this->load->view('util/header',$data, true);
		$datos_plantilla["footer"] = $this->load->view('util/footer','', true);
		return $datos_plantilla;
	}


	function index()
	{
		$this->load->view('home/index',$this->crear_vista());
	}

	function History()
	{
		$this->load->view('home/history',$this->crear_vista());
	}
}

?>
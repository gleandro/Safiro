<?php 

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
		$datos_plantilla["header"] = $this->load->view('util/header','', true);
		$datos_plantilla["footer"] = $this->load->view('util/footer','', true);
		$this->load->view('home/index',$datos_plantilla);

	}

	function History()
	{
		$datos_plantilla["header"] = $this->load->view('util/header','', true);
		$datos_plantilla["footer"] = $this->load->view('util/footer','', true);
		$this->load->view('home/history',$datos_plantilla);
	}
}

?>
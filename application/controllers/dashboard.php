<?php


class Dashboard extends CI_Controller {

	function index()
	{
		$datos_plantilla["header"] = $this->load->view('util/header','', true);
		$datos_plantilla["footer"] = $this->load->view('util/footer','', true);
		$this->load->view('dashboard/index', $datos_plantilla);
	}

}

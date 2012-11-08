<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Ctin extends CI_Controller {

	public function index() {
		$this->load->helper('url');
		$this->load->view('home');
	}

	public function testing() {
		$this->load->view('Trolling');
	}

	public function integrantes() {
		$this->load->model('users_model');
		$data['usuarios'] = $this->users_model->guinfo();
		$this->load->view('integrantes_view', $data);
	}

	public function proyectos() {
		$this->load->model('proyectos_model');
		$data['proyectos'] = $this->proyectos_model->gpinfo();
		$this->load->view('proyectos_view', $data);
	}

	//matadero
	public function matadero() {
		$this->load->model('matadero_model');
		$data['matadero'] = $this->matadero_model->getmatadero();
		$data['user'] = $this->matadero_model->getusersmatadero();
		$this->load->view('matadero_view', $data);
	}

	public function blog() {
		$this->load->model('entradas_model');
		$data['entradas'] = $this->entradas_model->geinfo();
		$this->load->view('entradas_view', $data);
	}

	public function controlparamario() {
		$this->load->model('users_model');
		$data['usuarios'] = $this->users_model->listainfo();
		$this->load->view('control_view', $data);
	}

	//maneja lo relacionado a la insercion de datos del matadero	
	public function setmatadero() {
		$this->load->model('matadero_model');
		$this->matadero_model->insertmataderodata();
		$this->load->view('matadero_view');
	}

	public function proyecto($id) {
		$this->load->model('proyectos_model');
		$query["proyecto"] = $this->proyectos_model->gsinglep($this->uri->segment(3));
		$this->load->view('proyecto_view', $query);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
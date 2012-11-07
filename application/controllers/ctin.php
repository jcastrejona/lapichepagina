<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Ctin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 * 	- or -  
	 * 		http://example.com/index.php/welcome/index
	 * 	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
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
		$this->load->model('users_model');
		$data['matadero'] = $this->users_model->getDataMatadero();
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
		$this->load->model('users_model');
		$this->users_model->insertmataderodata();
		$this->load->view('matadero_view');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
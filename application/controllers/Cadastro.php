<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller {


	public function index(){

		$this->load->view('Formulario');
	}

	
	public function Salvar(){

		$this->load->model('cadastro_model','formularios');

		// $this->load->view('Formulario');

		$dados['Nome'] = $this->input->post('Nome');
		$dados['Email'] = $this->input->post('Email');
		$dados['IT'] = $this->input->post('IT');
		$dados['FONE1'] = $this->input->post('FONE1');
		$dados['FONE2'] = $this->input->post('FONE2');
		$dados['Motivo'] = $this->input->post('Motivo');

		
		if($this->input->post('ID') != NULL) {

			$this->formularios->editarCadastro($dados, $this->input->post('ID'));

			redirect("/cadastro/Ver");

		} else {


			$this->formularios->addCadastros($dados);

			redirect("/cadastro/index");

		}

	}

	public function Ver(){

		$this->load->model('cadastro_model','formularios');

		$data['formularios'] = $this->formularios->getCadastros();

		$this->load->view('Registros', $data);

	}

	public function Editar($ID=NULL){

		if ($ID == NULL){

			redirect('/cadastro/Ver');

		}

		$this->load->model('cadastro_model','formularios');

		$query['formularios'] = $this->formularios->getCadastrosByID($ID);

		if($query['formularios'] == NULL) {

			redirect('/cadastro/Ver');

		}

		$this->load->view('editFormulario', $query);
	}


	public function Delete($ID=NULL){

		if ($ID == NULL){

			redirect('/cadastro/Ver');

		}


		$this->load->model('cadastro_model','formularios');

		$query = $this->formularios->getCadastrosByID($ID);

		if($query != NULL) {

			$this->formularios->apagarCadastros($query->ID);
			redirect('/cadastro/Ver');

		} else{

			redirect('/cadastro/Ver');

		}
		
	}

}

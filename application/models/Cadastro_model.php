<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro_model extends CI_model {


	public function getCadastros(){
		


		$query = $this->db->get( 'formularios');
		return $query->result();

	}

	public function addCadastros($dados=null){

		if ($dados != NULL):

			$this->db->insert('formularios', $dados);

		endif;
		
	}

	public function apagarCadastros($ID=NULL){

		if($ID != NULL):

			$this->db->delete('formularios', array('ID'=>$ID));
		endif;



	}

	public function getCadastrosByID($ID=NULL){

		if ($ID != NULL):
		$this->db->where('ID', $ID);
		$this->db->limit(1);
		$query = $this->db->get('formularios');
		return $query->row();

		endif;	

	}

	public function editarCadastro($dados=NULL, $ID=NULL){


		if ($dados != NULL && $ID != NULL):

			$this->db->update('formularios', $dados, array('ID'=>$ID));

		endif;
	}


}



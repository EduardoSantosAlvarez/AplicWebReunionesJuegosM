<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class inicio extends CI_Controller {
	public function index(){
		$data['main']='inicio';
		$data['titulo']='Inicio';
		//Obtener registros de la BD
		$this->load->model("inicio_model"); 
		//Cargo el arreglo bidimensional con la info de los usuarios
	

		$this->load->vars($data);
		$this->load->view('template');
	}

}
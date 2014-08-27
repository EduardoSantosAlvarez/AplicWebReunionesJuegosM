<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller {

	/*function __construct(){
		parent::__construct();
		//Si no existe la variable de session logged_in-> manda al login
		if ($this->session->userdata('logged_in')){
			redirect('inicio');
		}
		//Si ya se autentico
		//Carga los modelos y librerias que vaya a necesitar en todas las acciones
		//del controlador usuario
		else{
			//$this->load->model("alumnos_model");
			$this->load->model("usuarios_model");
			//$this->load->model("carreras_model");
			//$this->load->model("ciudades_model");
			redirect('login/index');
		}
	}*/

	public function index(){
		$data['main']='login';
		$data['titulo']='Bienvenido';

		$this->load->vars($data);
		$this->load->view('template');
	}

	public function loginerror(){
		$data['main']='login_error';
		$data['titulo']='Bienvenido';

		$this->load->vars($data);
		$this->load->view('template');
	}

	function validar(){
		if ($this->input->post('inputUsuario')){

 			$arreglo['usuario']=$this->input->post('inputUsuario');
 			$arreglo['clave']=$this->input->post('inputClave');

 			$this->load->model("usuarios_model");
			$validacion=$this->usuarios_model->login($arreglo);

			//Ver contenido de la variable
			/*echo "Usuario: ".$this->input->post('inputUsuario')."<br>";
			echo "Clave: ".$this->input->post('inputClave')."<br>";
			echo "Validacion:<br>";

			echo "<pre>";
			var_dump($validacion);
			echo "</pre>";
			exit;
			*/
			if ($validacion){
				$newdata= array(
					'usuario' => $this->input->post('inputUsuario'),
					'logged_in' => TRUE
				);
				$this->session->set_userdata($newdata);
			}
			//si existe la variable de sesion manada al inicio
			if ($validacion)
				redirect('inicio/index');
			else
				redirect('login/loginerror');

 		}
	}

	function eliminarsession(){
		$this->session->unset_userdata('usuario');
		$this->session->unset_userdata('logged_in');
		redirect('login/index');
	}

	function mostrarsesion(){
		echo "<pre>";
		var_dump($this->session->all_userdata());
		echo "</pre>";
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
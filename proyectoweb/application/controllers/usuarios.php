<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Usuarios extends CI_Controller {
      function __construct(){
      	parent::__construct();
      	//si no existe la variable de session logged_in -> manda a login
      	if (!$this->session->userdata('logged_in')){
      		redirect('login');
      	}
      	//
      	else{
        $this->load->model("usuarios_model");
         $this->load->model("bitacora_model");
        
      	}
      }

       function altas_ajax(){
    	if ($this->input->post('ajax')){
    		sleep(3);
    		//Mostrar la vista que tiene el formulario (html)
    		 $this->load->view("usuarios_altas");
    		//echo "Formulario para dar de alta usuarios...";
    	}

    }

   function ajax(){
			if ($this->input->post('buscar')){
				$buscar=$this->input->post('buscar');
			}
			else{
				$buscar='';
			}
			$registros=$this->usuarios_model->obtener_busqueda($buscar);

			//Cargo el arreglo bidimensional con la info de los usuarios
			$data['registros']=$registros;
			$this->load->vars($data);
			$this->load->view('usuarios_ajax');
		}

	

	public function index(){
		$data['main']='usuarios';
		$data['titulo']='Lista de usuarios';
		//Obtener registros de la BD
		$this->load->model("usuarios_model"); 
		$registros=$this->usuarios_model->obtener();
		/*
		print "<pre>";
		print_r($registros);
		print "</pre>";
		exit;
		*/

		//Cargo el arreglo bidimensional con la info de los usuarios
		$data['registros']=$registros;

		$this->load->vars($data);
		$this->load->view('template');
	}


function altas(){
 		//Si recibió un parámetro de un formulario entra
 		if ($this->input->post('inputusuario')){
 			$arreglo['usuario']=$this->input->post('inputusuario'); 			
 			$arreglo['clave']=Md5($this->input->post('inputclave'));
 			$arreglo['nombre']=$this->input->post('inputnombre');
 			$arreglo['apellido']=$this->input->post('inputapellido');
 			$arreglo['correo']=$this->input->post('inputcorreo');
 			$arreglo['edad']=$this->input->post('inputedad');

 			//$this->load->model("usuarios_model"); 
 			$this->load->model("usuarios_model");
			$registros=$this->usuarios_model->insertar($arreglo);

			echo "Usuario: ".$this->input->post('inputUsuario')."- se dió de alta";


			$arreglo_bit['quien']=$this->session->userdata('usuario');
			$arreglo_bit['accion']='Cambios';
			$arreglo_bit['documento']='Usuarios';
			$arreglo_bit['va']='-';				
			$arreglo_bit['vn']='Usuario: '.$arreglo['usuario'];
			$arreglo_bit['vn'].='<br>Nombre: '.$arreglo['nombre'];
			$arreglo_bit['vn'].='<br>Apellido: '.$arreglo['apellido'];			
			$arreglo_bit['vn'].='<br>Correo: '.$arreglo['correo'];
			$arreglo_bit['vn'].='<br>Edad: '.$arreglo['edad'];

			$this->load->model("bitacora_model"); 
			$registros=$this->bitacora_model->insertar($arreglo_bit);
            redirect('usuarios/index');


 		}

			$data['main']='usuarios_altas';
			$data['titulo']='altas de usuarios';
			
			$this->load->vars($data);
			$this->load->view('template');		
 		
 	}
 	function  bajas($id){
 		$this->load->model("usuarios_model");
		$registros=$this->usuarios_model->eliminar($id);
		$arreglo['usuario_anterior']=$this->input->get('usuarios');

			$arreglo_bitacora['quien']=$this->session->userdata('usuario');
			$arreglo_bitacora['accion']='Bajas';
			$arreglo_bitacora['documento']='Usuario';
			$arreglo_bitacora['va']='Usuario: '.$arreglo['usuario_anterior'];
			$arreglo_bitacora['vn']='';

			$registros=$this->bitacora_model->insertar($arreglo_bitacora);
		redirect('usuarios/index');

 	}


 	
 	function cambios($id=0){
 		//Si recibió un parámetro de un formulario entra
 		if ($this->input->post('inputusuario')){
 			$arreglo['usuario']=$this->input->post('inputusuario'); 						
 			$arreglo['clave']=$this->input->post('inputclave');
 			$arreglo['nombre']=$this->input->post('inputnombre');
 			$arreglo['apellido']=$this->input->post('inputapellido');
 			$arreglo['correo']=$this->input->post('inputcorreo');
 			$arreglo['edad']=$this->input->post('inputedad');
 			$arreglo['id']=$this->input->post('inputOculto');
            
           $arreglo_anterior=$this->usuarios_model->obtener_registro($arreglo['id']);
           /*echo "<pre>";
           var_dump($arreglo_anterior);
           echo "</pre>";
           exit;*/

            $registros=$this->usuarios_model->actualizar($arreglo);		    
			$arreglo_bit['quien']=$this->session->userdata('usuario');
			$arreglo_bit['accion']='Cambios';
			$arreglo_bit['documento']='Usuarios';
			$arreglo_bit['va']='Usuario: '.$arreglo_anterior[0]['usuario'];	
			$arreglo_bit['va'].='<br>Nombre: '.$arreglo_anterior[0]['nombre'];
			$arreglo_bit['va'].='<br>Apellido: '.$arreglo_anterior[0]['apellido'];
            $arreglo_bit['va'].='<br>Correo: '.$arreglo_anterior[0]['correo'];            
            $arreglo_bit['va'].='<br>Edad: '.$arreglo_anterior[0]['edad'];
			$arreglo_bit['vn']='Usuario: '.$arreglo['usuario'];
			$arreglo_bit['vn'].='<br>Nombre: '.$arreglo['nombre'];
			$arreglo_bit['vn'].='<br>Apellido: '.$arreglo['apellido'];			
			$arreglo_bit['vn'].='<br>Correo: '.$arreglo['correo'];
			$arreglo_bit['vn'].='<br>Edad: '.$arreglo['edad'];
 			
			$registros=$this->bitacora_model->insertar($arreglo_bit);
            redirect('usuarios/index');
			

 		}
 		else{
			$data['main']='usuarios_cambios';
			$data['titulo']='Cambios de usuarios';

			//Obtener registro de la tabla alumnos (puede ser modificado en un futuro)
			$this->load->model("usuarios_model");
			$registros_usuarios=$this->usuarios_model->obtener_registro($id);

			$data['registros_usuarios']=$registros_usuarios;
			
			$this->load->vars($data);
			$this->load->view('template');
		}
 	}
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
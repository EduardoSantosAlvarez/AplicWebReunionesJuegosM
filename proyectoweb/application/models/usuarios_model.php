<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class usuarios_model extends CI_Model {
		function login($arreglo){
		$sql="SELECT id,usuario FROM usuarios where usuario='".$arreglo['usuario']."' AND contraseña='".$arreglo['clave']."'";
		$query=$this->db->query($sql);

		if ($query->num_rows()==1)
			return TRUE;
		else
			return FALSE;
		/*
		//Ver contenido de la variable
		echo "<pre>";
		var_dump($query);
		echo "</pre>";
		exit;*/
	}

		function obtener_busqueda($buscar){
		$sql =" SELECT usuario,
						nombre,
						apellido,
						correo,
						edad 
						from 
						usuarios
		where
					usuario like '%".$buscar."%' OR
					nombre like '%".$buscar."%' OR 
					apellido like '%".$buscar."%' OR
					correo like '%".$buscar."%' OR
					edad like '%".$buscar."%'";
		
		$query=$this->db->query($sql);

		/*print "<pre>";
		print_r($query);
		print "</pre>";
		exit;*/

		//echo "Query: <br>".$this->db->last_query();//exit;
		return $query->result_array();
	}

	function obtener(){
		$sql =" SELECT id,usuario,clave,nombre,apellido,correo,edad from usuarios; ";
		$query=$this->db->query($sql);

		/*print "<pre>";
		print_r($query);
		print "</pre>";
		exit;*/

		//echo "Query: <br>".$this->db->last_query();//exit;
		return $query->result_array();
	}

	function obtener_registro($id){
		$sql =" SELECT id,usuario,clave,nombre,apellido,correo,edad  from usuarios where id=".$id;
		$query=$this->db->query($sql);
		return $query->result_array();
	}

	function insertar($arreglo){
		//INSERT INTO usuarios (usuario,nombre,apellido,correo,edad) VALUES ('valor1','valor2','valor3','valor4',1);
		$sql ="INSERT INTO usuarios (usuario,clave,nombre,apellido,correo,edad)
				VALUES ('".$arreglo['usuario']."','".$arreglo['clave']."','".$arreglo['nombre']."','".$arreglo['apellido']."','".$arreglo['correo']."',".$arreglo['edad'].");";
		return $this->db->query($sql);
	}

	function actualizar($arreglo){
		/*
		UPDATE `proyectocs`.`alumnos` SET `nombre` = 'juan2',
		`apellido` = 'perez2',
		`nc` = '102' WHERE `alumnos`.`id` =8;
		*/
		$sql="UPDATE usuarios SET usuario='".$arreglo['usuario']."', clave='".$arreglo['clave']."', nombre='".$arreglo['nombre']."', apellido='".$arreglo['apellido']."', correo='".$arreglo['correo']."', edad=".$arreglo['edad']." WHERE id=".$arreglo['id'];
		return $this->db->query($sql);

	}

	function eliminar($id){
		$sql="UPDATE usuarios SET usuario='".$arreglo['usuario']."', clave='".$arreglo['clave']."', nombre='".$arreglo['nombre']."', apellido='".$arreglo['apellido']."', correo='".$arreglo['correo']."', edad=".$arreglo['edad']." WHERE id=".$arreglo['id'];
		$sql="DELETE FROM usuarios WHERE id=".$id;
		return $this->db->query($sql);
	}
}
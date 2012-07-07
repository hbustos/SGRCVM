<?
/**
 * @file
 * Clase que permite la administracion de usuarios (crear, borrar, actualizar).
 * @author Heiber Bustos <hbf5@hotmail.com>
 * @copyright Copyright (c) 2011, HEIBER BUSTOS
 * @version 1.0 2011-10-20
 * @package calidad
 * @category clases
 */

class clsUsuario {

	private $db = null;
	//--Funcion para seleccionar la base de datos--
	function setDb($cn) {
		$this->db = $cn;
	}
	function buscarUsu($id){
		$sql = "SELECT Usuario FROM usuarios where Id = '$id'";	
		$ret = $this->db->consulta($sql);

		if($ret === FALSE){
			return FALSE;
		}else{
			return $ret;
		}
	}

	function listarUsu(){
		$sql = "SELECT Id, Usuario, NombresApellidos, Estado, Identificacion FROM usuarios ORDER BY Usuario ASC";
		//echo $sql;
		$ret = $this->db->consulta($sql);

		if ($ret === FALSE){
			return FALSE;
		}else{
			return $ret;
		}
	}
	
	function actualizarUsu($id,$estado){
		$sql = "UPDATE usuarios SET EstadoUsu ='$estado' WHERE id = '$id'";

		$ret = $this->db->consulta($sql);
		if($ret === FALSE){
			return FALSE;
		}else{
			return TRUE;
		}
	
	}

	function crearUsu($id,$nombre,$apellido,$estado){
		$sql ="INSERT INTO usuarios (Id, NombreUsu, ApellidoUsu, FechaUsu, EstadoUsu) VALUES ('$id', '$nombre', '$apellido',NOW() ,'$estado')";
		$ret = $this->db->consulta($sql);
		if($ret === FALSE){
			return FALSE;	
		}else{
			return TRUE;
		}
	}
	
	function borrarUsu($id){
		$sql = "DELETE FROM usuarios WHERE id = '$id'";
		$ret = $this->db->consulta($sql);
		if($ret === FALSE){
			return FALSE;
		}else{
			return TRUE;
		}
	}
}

?>

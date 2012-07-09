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
		$sql = "SELECT Usuario FROM usuarios where Usuario = '$id'";	
		$ret = $this->db->consulta($sql);

		if($ret === FALSE){
			return FALSE;
		}else{
			return $ret;
		}
	}

	function listarUsu(){
		$sql = "SELECT a.Id, a.Usuario, a.NombresApellidos, c.Descripcion, a.Identificacion, b.Descripcion, a.Id_Jefe
			FROM usuarios a,tipousuario b,estados c  
			WHERE a.Id_TipoUsuario = b.Id 
			AND a.Estado = c.Nro
			ORDER BY Usuario ASC";
		//echo $sql;
		$ret = $this->db->consulta($sql);

		if ($ret === FALSE){
			return FALSE;
		}else{
			return $ret;
		}
	}
	
	function actualizarUsu($id,$estado){
		$sql = "UPDATE usuarios SET Estado ='$estado' WHERE Usuario = '$id'";

		$ret = $this->db->consulta($sql);
		if($ret === FALSE){
			return FALSE;
		}else{
			return TRUE;
		}
	
	}

	function crearUsu($nombre,$usu,$clave,$identificacion,$id_jefe,$tipo,$estado){
		$sql ="INSERT INTO usuarios ( NombresApellidos, Usuario, Contrasena, Identificacion, Id_Jefe, Id_TipoUsuario, Estado) VALUES ('$nombre','$usu','$clave','$identificacion','$id_jefe','$tipo','$estado')";
		$ret = $this->db->consulta($sql);
		if($ret === FALSE){
			return FALSE;	
		}else{
			return TRUE;
		}
	}
	
	function borrarUsu($id){
		$sql = "UPDATE usuarios SET Estado = '3' WHERE Usuario = '$id'";
		$ret = $this->db->consulta($sql);
		if($ret === FALSE){
			return FALSE;
		}else{
			return TRUE;
		}
	}
}

?>

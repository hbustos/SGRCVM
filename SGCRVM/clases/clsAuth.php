<?

class clsAuth {

	private $db = null;

	function __construct() {
		session_start();
	}

	function setDb($cn) {
		$this->db = $cn;
	}

	function login($usuario,$clave) {
		$sql = "SELECT Id, Usuario, NombresApellidos, Estado FROM usuarios 
			WHERE Usuario = '$usuario' 
			AND Contrasena = '$clave'
			LIMIT 0,1";


		$ret = $this->db->consulta($sql);
		
		// ERROR EN BASE DE DATOS
		if ($ret === FALSE) {
			return FALSE;
		}
		// NO HAY INFORMACION
		if (count($ret) == 0) {
			return FALSE;
		}
		if(($_SESSION['estado_usuario'] = $ret[0][3]) == 2){
			//print_r($ret);
			return FALSE;
		}
		$_SESSION['logueado'] = 1;
		$_SESSION['id_usuario'] = $usuario;
		$_SESSION['usuario'] = $usuario;
		$_SESSION['nombre_usuario'] = $ret[0][2];
		$_SESSION['estado_usuario'] = $ret[0][3];
		return TRUE;

	}

	function logout() {
		unset($_SESSION);
		session_destroy();
	}

	function logueado() {
		if (isset($_SESSION['logueado']) && $_SESSION['logueado'] == 1) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

}


?>

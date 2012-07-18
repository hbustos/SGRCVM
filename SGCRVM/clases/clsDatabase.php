<?
class clsDatabase {

	private $cn = null;

	function conectar($usuario, $clave, $host, $base) {
		$this->cn = mysql_connect($host, $usuario, $clave);

		if ($this->cn) {
			mysql_select_db($base, $this->cn);
			return TRUE;
		} else {
			return FALSE;
		}

	}

	function consulta($sql) {
		$ret = Array();
		$rs = mysql_query($sql, $this->cn);
		//echo mysql_num_fields($rs);
		if (!$rs) {
			return FALSE;
		}
		$j = 0;
		while($arr = mysql_fetch_array($rs)) {
			for ($i = 0; $i < mysql_num_fields($rs); $i++) {
				$ret[$j][$i] = $arr[$i];
				//echo  $j.$i.$ret[$j][$i]." " ;
			}
			$j++;
		}
		return $ret;	
	}

	function conectado() {
		if ($this->cn == null) {
			return FALSE;
		}
		return TRUE;
	}

}

$database = new clsDatabase();

$database->conectar("root", "cangrejo", "localhost", "SGCRVM");

?>

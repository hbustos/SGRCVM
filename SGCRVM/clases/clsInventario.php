<?
/**
 * @file
 * Clase que permite la administracion de clientes (listar).
 * @author Heiber Bustos <hbf5@hotmail.com>
 * @copyright Copyright (c) 2011, HEIBER BUSTOS
 * @version 1.0 2012-07-10
 * @package calidad
 * @category clases
 */

class clsInventario {

	private $db = null;
	//--Funcion para seleccionar la base de datos--
	function setDb($cn) {
		$this->db = $cn;
	}

	function listarInventario()
	{
		$sql = "SELECT * 
			FROM inventarios 
			ORDER BY Descripcion ASC";
		//echo $sql;
		$ret = $this->db->consulta($sql);

		if ($ret === FALSE){
			return FALSE;
		}else{
			return $ret;
		}
	}
	function consultarCantidad($id_producto)
	{
		$sql = "SELECT Cantidad FROM inventarios WHERE Cantidad = $id_producto";
		$ret = $this->db->consulta($sql);
		if ($ret === FALSE){
			return FALSE;
		}else{
			return $ret;
		}	
	}
	function vender($id_visita,$id_producto,$cantidad)
	{
		$sql = "INSERT INTO ventas (Id_Visita,Id_Producto,Unidades)VALUES ('$id_visita','$id_producto','$cantidad')";	
		$ret = $this->db->consulta($sql);
		//echo $sql;
		if ($ret === FALSE){
                        return FALSE;
                }else{
                        return $ret;
                }
	}
}

?>

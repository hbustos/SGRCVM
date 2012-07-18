<?php
/**
 * @file
 * Clase que permite la administracion de las etapas (listar, crear, borrar, actualizar).
 * @author Heiber Bustos <hbf5@hotmail.com>
 * @copyright Copyright (c) 2011, HEIBER BUSTOS - RODRIGO BUSTOS
 * @version 1.0 2011-11-03
 * @package proyestos
 * @category clases
 */

class clsEtapa {

        private $db = null;
        //--Funcion para seleccionar la base de datos--
        function setDb($cn) {
                $this->db = $cn;
        }
	function buscarEtapa($codigo){
                $sql = "SELECT * FROM etapas WHERE CodEtapa = '$codigo'";
                $ret = $this->db->consulta($sql);

                if ($ret === FALSE){
                        return FALSE;
                }else{
                        return $ret;
                }	
	}
        function listarEtapa(){
                $sql = "SELECT * FROM etapas ORDER BY CodProy DESC";
                $ret = $this->db->consulta($sql);

                if ($ret === FALSE){
                        return FALSE;
                }else{
                        return $ret;
                }
        }
	function crearEtapa($codigo,$codigopro,$nombre,$descripcion,$porcen,$peso,$responsable){
                $sql = "INSERT INTO etapas (CodEtapa ,CodProy ,NombreEtapa ,DescripEtapa ,PorcenEtapa ,PesoPorcen ,ResponEtapa)
			VALUES ('$codigo','$codigopro','$nombre','$descripcion','$porcen','$peso','$responsable')";

                $ret = $this->db->consulta($sql);
                if($ret === FALSE){
                        return FALSE;
                }else{
                        return TRUE;
                }

	}
	
	function actualizarEtapa($codigo,$peso){
		$sql = "UPDATE etapas SET PesoPorcen = '$peso' WHERE CodEtapa = '$codigo'";
		
		$ret = $this->db->consulta($sql);

		if($ret === FALSE){
			return FALSE;
		}else{
			return TRUE;
		}
	}

	function borrarEtapa($codigo){
		$sql = "DELETE FROM etapas WHERE CodEtapa = '$codigo'";

		$ret = $this->db->consulta($sql);

		if($ret === FALSE){
			return FALSE;
		}else{
			return TRUE;
		}
	}
}
?>

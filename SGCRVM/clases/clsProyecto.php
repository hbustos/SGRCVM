<?php
/**
 * @file
 * Clase que permite la administracion de proyectos (crear, borrar, actualizar).
 * @author Heiber Bustos <hbf5@hotmail.com>
 * @copyright Copyright (c) 2011, HEIBER BUSTOS - RODRIGO BUSTOS
 * @version 1.0 2011-10-29
 * @package proyestos
 * @category clases
 */

class clsProyecto {

        private $db = null;
        //--Funcion para seleccionar la base de datos--
        function setDb($cn) {
                $this->db = $cn;
        }

        function buscarProy($codigo){
                $sql = "SELECT CodProy FROM proyectos where CodProy = '$codigo'";
                $ret = $this->db->consulta($sql);

                if($ret === FALSE){
                        return FALSE;
                }else{
                        return $ret;
                }
        }

        function listarProy(){
                $sql = "SELECT CodProy, NombreProy, FechaIniProy, FechaTerProy, EstadoProy, PorcenProy, ResponProy, DescripProy 
			FROM proyectos ORDER BY NombreProy DESC";
                $ret = $this->db->consulta($sql);

                if ($ret === FALSE){
                        return FALSE;
                }else{
                        return $ret;
                }
        }
	function crearProy($codigo,$nombre,$descrip,$fechaini,$fechafin,$responsable){
                $sql = "INSERT INTO proyectos (CodProy, NombreProy, DescripProy, FechaIniProy, FechaTerProy, ResponProy) VALUES ('$codigo','$nombre','$descrip','$fechaini','$fechafin','$responsable')";
                $ret = $this->db->consulta($sql);
                if($ret === FALSE){
                        return FALSE;
                }else{
                        return TRUE;
                }

	}
	
	function actualizarProy($codigo,$estado){
		$sql = "UPDATE proyectos SET EstadoProy = '$estado' WHERE CodProy = '$codigo'";
		
		$ret = $this->db->consulta($sql);

		if($ret === FALSE){
			return FALSE;
		}else{
			return TRUE;
		}
	}

	function borrarProy($codigo){
		$sql = "DELETE FROM proyectos WHERE CodProy = '$codigo'";

		$ret = $this->db->consulta($sql);

		if($ret === FALSE){
			return FALSE;
		}else{
			return TRUE;
		}
	}
}
?>

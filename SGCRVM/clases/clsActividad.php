<?php
/**
 * @file
 * Clase que permite la administracion de las actividades de proyectos (crear, borrar, actualizar).
 * @author Heiber Bustos <hbf5@hotmail.com>
 * @copyright Copyright (c) 2011, HEIBER BUSTOS - RODRIGO BUSTOS
 * @version 1.0 2011-11-03
 * @package proyestos
 * @category clases
 */

class clsActividad {

        private $db = null;
        //--Funcion para seleccionar la base de datos--
        function setDb($cn) {
                $this->db = $cn;
        }
	function buscarActiv($nombre){
		$sql = "SELECT * FROM actividades WHERE NombreActiv = '$nombre'";
                $ret = $this->db->consulta($sql);
		if ($ret === FALSE){
                        return FALSE;
                }else{
                        return $ret;
                }
	}
		
        function listarActiv(){
                $sql = "SELECT * FROM actividades ORDER BY CodEtapa DESC";
                $ret = $this->db->consulta($sql);

                if ($ret === FALSE){
                        return FALSE;
                }else{
                        return $ret;
                }
        }

	function crearActiv($codigo,$nombre,$fechaini,$fechafin,$descripcion,$responsable){
                $sql = "INSERT INTO actividades (CodEtapa, NombreActiv, FechaIniActiv, FechaTerActiv, DescActiv, ResponActiv) 
		VALUES ('$codigo','$nombre','$fechaini','$fechafin','$descripcion','$responsable')";
	
                $ret = $this->db->consulta($sql);
                if($ret === FALSE){
                        return FALSE;
                }else{
                        return TRUE;
                }

	}
	
	function actualizarActiv($nombre,$estado,$porcen){
		$sql = "UPDATE actividades  SET EstadoActiv = '$estado', PorcenActiv = '$porcen' WHERE NombreActiv = '$nombre'";
		
		$ret = $this->db->consulta($sql);

		if($ret === FALSE){
			return FALSE;
		}else{
			return TRUE;
		}
	}

	function borrarActiv($nombre){
		$sql = "DELETE FROM actividades WHERE NombreActiv = '$nombre'";

		$ret = $this->db->consulta($sql);

		if($ret === FALSE){
			return FALSE;
		}else{
			return TRUE;
		}
	}
	function actualizaPorcen($codigo){
		$sql = "UPDATE etapas SET PorcenEtapa =
		(SELECT SUM(PorcenActiv)/COUNT(*) FROM actividades WHERE CodEtapa = '$codigo') 
		WHERE CodEtapa = '$codigo'";
		$ret = $this->db->consulta($sql);

                if($ret === FALSE){
                        return FALSE;
                }else{
                        return TRUE;
                }

	}
}
?>

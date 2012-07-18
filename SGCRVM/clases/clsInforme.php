<?
/**
 * @file
 * Clase que permite realizar los informes (detallado y de responsables)
 * @author Heiber Bustos Rodrigo Bustos <hbf5@hotmail.com>
 * @copyright Copyright (c) 2011, HEIBER BUSTOS - RODRIGO BUSTOS
 * @version 1.0 2011-11-07
 * @package proyestos
 * @category clases
 */

class clsInforme {

	private $db = null;
	//--Funcion para seleccionar la base de datos--
	function setDb($cn) {
		$this->db = $cn;
	}

	function listarResponEtapa(){
		$sql = "SELECT CodProy, CodEtapa, NombreEtapa, PorcenEtapa, PesoPorcen, ResponEtapa  FROM etapas ORDER BY CodProy DESC";
		$ret = $this->db->consulta($sql);

		if ($ret === FALSE){
			return FALSE;
		}else{
			return $ret;
		}
	}

        function listarResponProy(){
                $sql = "SELECT CodProy, NombreProy, FechaIniProy, FechaTerProy, PorcenProy, ResponProy  FROM proyectos ORDER BY FechaIniProy DESC";
                $ret = $this->db->consulta($sql);

                if ($ret === FALSE){
                        return FALSE;
                }else{
                        return $ret;
                }
        }

        function listarResponActiv(){
                $sql = "SELECT CodEtapa, NombreActiv, FechaIniActiv, FechaTerActiv, PorcenActiv, ResponActiv  FROM actividades ORDER BY CodEtapa DESC";
                $ret = $this->db->consulta($sql);

                if ($ret === FALSE){
                        return FALSE;
                }else{
                        return $ret;
                }
        }


	function informeEtapa(){
		$sql = "SELECT  CodEtapa,sum(PorcenActiv)/(count(*)), Count(*) FROM actividades GROUP BY CodEtapa";
		$ret = $this->db->consulta($sql);
		if($ret === FALSE){
			return FALSE;	
		}else{
			return $ret;
		}
	}
        function informeProy(){
                $sql = "SELECT CodProy,sum(PorcenEtapa * PesoPorcen)/100, Count(*) FROM etapas GROUP BY CodProy";	
                $ret = $this->db->consulta($sql);
                if($ret === FALSE){
                        return FALSE;
                }else{
                        return $ret;
                }
        }

}

?>

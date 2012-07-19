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

class clsProyecto 
{

        private $db = null;
        //--Funcion para seleccionar la base de datos--
        function setDb($cn) 
		{
                $this->db = $cn;
        }
		
		
//****************LISTAR TODAS LAS RUTAS********************************************
        function listarProy()
		{
                $sql = "SELECT * 
			           from ruta";
                $ret = $this->db->consulta($sql);

                if ($ret === FALSE)
				{
                        return FALSE;
                }
				else
				{
                        return $ret;
                }
        }
		
//***************************************************************************************



//************************FUNCION CREAR RUTA******************************************************	
	function crearProy($codigo,$nombre,$fecha,$visita,$estado)
	{
                $sql = "INSERT INTO ruta (Id_Usuario, Id_cliente, FechaHora, Id_Visita,Estado) 
				VALUES('$nombre','$codigo','$fecha','$visita','$estado')";
                $ret = $this->db->consulta($sql);
                if($ret === FALSE)
				{
                        return FALSE;
                }
				else
				{
                        return TRUE;
                }
	}
//******************************************************************************************************

//**********************METODO BORRAR RUTA*****************************
	function borrarProy($codigo)
	{
		$sql = "DELETE FROM ruta WHERE Id = '$codigo'";

		$ret = $this->db->consulta($sql);

		if($ret === FALSE)
		{
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}
//*****************************************************************************


//*****************************************************************************
	function actualizarProy($codigo,$estado,$usuario,$fecha)
	{
		$sql = "UPDATE ruta SET Estado = '$estado', Id_Usuario = '$usuario' , FechaHora = '$fecha'
		WHERE Id = '$codigo'";
		
		$ret = $this->db->consulta($sql);

		if($ret === FALSE)
		{
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}
//*************************************************************************************	
	
}
?>

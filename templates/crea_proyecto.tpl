<div  align="center" id="crearusu"><br>
<table border="0">
  <tr>
    <td bgcolor="#0066FF" align="center" valign="middle" ><h2>Creaci&oacute;n de Proyecto </h2></td>
  </tr>
  <tr>
    <td height="301">
	<form  name="crearusu" method="GET">
      	<br>NOMBRE : <input type="text" name="nombre" id="nombre" /><br>
        <br>CODIGO : <input type="text" name="codigo" id="codigo"/><br>
        <br>DESCRIPCION : <textarea rows="4" cols="80" type="text" name="descrip" id="descrip"></textarea><br>
	<br>FECHA INICIO  : {html_select_date end_year="2020" prefix='fechaini' name="fechaini"}
        <br>FECHA TERMINO : {html_select_date end_year="2020" prefix='fechafin' name="fechafin"}
      	<br>ID DEL RESPONSABLE : <input type="text" name="responsable" id="responsable" /><br>
	
	<input type="hidden" name="accion" value="crea">
        <input type="hidden" name="page" value="proyecto">

        <div align="center"><br>
          <input name="Crear" type="submit" value="Crear">
        </div>
        </label>
      </form>      </td>
  </tr>
</table>
</div>

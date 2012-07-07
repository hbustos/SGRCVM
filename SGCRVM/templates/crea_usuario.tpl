<div  align="center" id="crearusu"><br>
<table border="0">
  <tr>
    <td bgcolor="#0066FF" align="center" valign="middle" ><h2>Creaci&oacute;n de Usuarios </h2></td>
  </tr>
  <tr>
    <td height="301">
	<form  name="crearusu" method="GET">
      	<br>NOMBRE : <input type="text" name="nombre" id="nombre" /><br>
        <br>APELLIDO : <input type="text" name="apellido" id="apellido"><br>
        <br>ID USUARIO: <input type="text" name="id" id="id"/><br>
        <br>ESTADO USUARIO: <select name="estado">
          <option value="0">Activo</option>
          <option value="2">Inactivo</option>
        </select>	
	<input type="hidden" name="accion" value="crea">
        <input type="hidden" name="page" value="usuario">

        <div align="center"><br>
          <input name="Crear" type="submit" value="Crear">
        </div>
        </label>
      </form>      </td>
  </tr>
</table>
</div>

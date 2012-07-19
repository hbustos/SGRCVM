<div  align="center" id="crearusu"><br>
<table border="0">
  <tr>
    <td bgcolor="#0066FF" align="center" valign="middle" ><h2>Creaci&oacute;n de Usuarios </h2></td>
  </tr>
  <tr>
    <td height="301">
	<form  name="crearusu" method="GET">
      	<br>NOMBRES APELLIDOS : <input type="text" name="nombre" id="nombre" />
      	<br>USUARIO : <input type="text" name="usuario" id="usuario" />
        <br>IDENTIFICACION : <input type="text" name="identificacion" id="identificacion">
        <br>CONTRASEÑA : <input type="password" name="clave" id="clave"/>
        <br>ID JEFE : <input type="text" name="id_jefe" id="id_jefe"/>
        <br>ESTADO USUARIO: <select name="estado">
          <option value="1">Activo</option>
          <option value="0">Inactivo</option>
        </select>	
        <br>TIPO USUARIO: <select name="tipo">
          <option value="2">TI</option>
          <option value="3">Gerente</option>
          <option value="4">Coordinador</option>
          <option value="5">Visitador</option>
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

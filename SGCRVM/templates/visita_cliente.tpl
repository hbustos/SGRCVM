<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1"/>
<div  align="center" id="crearusu"><br>
<table border="0">
  <tr>
    <td bgcolor="#0066FF" align="center" valign="middle" ><h2>Visita Cliente </h2></td>
  </tr>
  <tr>
    <td height="301">
	<form  name="venta" method="GET">
	<br>ID USUARIO: {$id}
	<br>USUARIO: {$user|upper}
        <br>CLIENTE: <select name="id_cliente">
	{foreach from=$array key=key item=item}
        <option value="{$item.0}">{$item.1}</option>
	{/foreach}
        </select>
	<br>GESTION: <textarea rows="4" cols="80" type="text" name="gestion" id="gestion"></textarea>
	<input type="hidden" name="accion" value="visita">
        <input type="hidden" name="page" value="cliente">
        <div align="center"><br>
          <input name="Vender" type="submit" value="Crear Visita">
        </div>
        </label>
      </form>      </td>
  </tr>
</table>
</div>

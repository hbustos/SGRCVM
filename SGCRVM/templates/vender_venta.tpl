<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1"/>
<div  align="center" id="crearusu"><br>
<table border="0">
  <tr>
    <td bgcolor="#0066FF" align="center" valign="middle" ><h2>Venta de Productos </h2></td>
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
        <br>PRODUCTO: <select name="id_producto">
	{foreach from=$array2 key=key2 item=item2}
        <option value="{$item2.1}">{$item2.3|upper}</option>
	{/foreach}
        </select>	
	<br>CANTIDAD: <input type="text" name="cantidad" id="cantidad" />
	<br>FECHA ENTREGA  : {html_select_date end_year="2020" prefix='fecha' name="fecha"}
	<input type="hidden" name="accion" value="vender">
        <input type="hidden" name="page" value="venta">
        <div align="center"><br>
          <input name="Vender" type="submit" value="Vender">
        </div>
        </label>
      </form>      </td>
  </tr>
</table>
</div>

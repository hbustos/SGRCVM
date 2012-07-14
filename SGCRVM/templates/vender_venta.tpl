<div  align="center" id="crearusu"><br>
<table border="0">
  <tr>
    <td bgcolor="#0066FF" align="center" valign="middle" ><h2>Venta de Productos </h2></td>
  </tr>
  <tr>
    <td height="301">
	<form  name="crearusu" method="GET">

        <br>CLIENTE: <select name="cliente">
	{foreach from=$array key=key item=item}
        <option value="{$item.1}">{$item.1}</option>
	{/foreach}
        </select>	
        <br>PRODUCTO: <select name="producto">
	{foreach from=$array2 key=key2 item=item2}
        <option value="{$item2.3}">{$item2.3}</option>
	{/foreach}
        </select>	
	<br>CANTIDAD: <input type="text" name="cantidad" id="cantidad" />
	<br>FECHA ENTREGA  : {html_select_date end_year="2020" prefix='fecha' name="fecha"}
	<input type="hidden" name="accion" value="crea">
        <input type="hidden" name="page" value="usuario">
        <div align="center"><br>
          <input name="Vender" type="submit" value="Vender">
        </div>
        </label>
      </form>      </td>
  </tr>
</table>
</div>

<div align="center">
<table>
	<tr style="background: gray">
	<td><b> Codigo Ruta</b></td>
	<td><b> Usuario </b></td>
	<td><b> Cliente </b></td>
	<td><b> Fecha y Hora</b></td>	
	<td><b> Codigo de VIsita </b></td>
	<td><b> Estado</b></td>
	</tr>
	<br>
{foreach from=$array key=key item=item}
<tr style="background: {cycle values='silver, gray'}">
	<td> {$item.0} </td>
	<td> {$item.1} </td>
	<td> {$item.2} </td>
	<td> {$item.3} </td>
	<td> {$item.4} </td>
	<td> {$item.5} </td> 
</tr>
</tr>
{/foreach}
</table>
</div>


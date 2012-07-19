<div align="center">
<table>
	<tr style="background: gray">
	<td><b> FechaHora </td>
	<td><b> NombreApellidos </td>
	<td><b> Cantidad de Visitas </td>
	</tr>
	<br>
{foreach from=$array key=key item=item}
<tr style="background: {cycle values='silver, gray'}">
	<td> {$item.0} </td>
	<td> {$item.1} </td>
	<td> {$item.2} </td>
	</tr>
</tr>
{/foreach}
</table>
</div>
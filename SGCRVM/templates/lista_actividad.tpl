<div align="center">
<table>
	<tr style="background: gray">
	<td><b> Codigo Etapa </td>
	<td><b> Nombre  Actividad </td>
	<td><b> Fecha Inicio </td>
	<td><b> Fecha Fin </td>
	<td><b> Estado </b></td>
	<td><b> Porcentaje </b></td>
	<td><b> Descripcion </b></td>
	<td><b> Responsable </b></td>
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
	<td> {$item.6} </td>
	<td> {$item.7} </td>
	</tr>
</tr>
{/foreach}
</table>
</div>


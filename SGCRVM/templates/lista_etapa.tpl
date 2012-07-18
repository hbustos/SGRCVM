<div align="center">
<table>
	<tr style="background: gray">
	<td><b> Codigo Etapa </td>
	<td><b> Codigo Proyecto </td>
	<td><b> Nombre  Etapa </td>
	<td><b> Descripcion </td>
	<td><b> Procentaje </td>
	<td><b> Peso </b></td>
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
	</tr>
</tr>
{/foreach}
</table>
</div>


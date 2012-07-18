<div align="center">
<table>
	<tr style="background: gray">
	<td><b> Codigo </b></td>
	<td><b> Nombre </b></td>
	<td><b> Fecha Inicio </b></td>
	<td><b> Fecha Fin </b></td>	
	<td><b> Estado </b></td>
	<td><b> Responsable </b></td>
	<td><b> Descripcion </b></td>
	</tr>
	<br>
{foreach from=$array key=key item=item}
<tr style="background: {cycle values='silver, gray'}">
	<td> {$item.0} </td>
	<td> {$item.1} </td>
	<td> {$item.2} </td>
	<td> {$item.3} </td>
	<td> {$item.4} </td>
	<td> {$item.6} </td> 
	<td> {$item.7} </td>
</tr>
</tr>
{/foreach}
</table>
</div>


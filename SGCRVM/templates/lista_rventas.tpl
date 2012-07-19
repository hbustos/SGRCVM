<div align="center">
<table>
	<tr style="background: gray">
	<td><b> NombresApellidos </td>
	<td><b> Descripcion </td>
	<td><b> Unidades </td>
	<td><b> Subtotal </td>
	</tr>
	<br>
{foreach from=$array key=key item=item}
<tr style="background: {cycle values='silver, gray'}">
	<td> {$item.0} </td>
	<td> {$item.1} </td>
	<td> {$item.2} </td>
	<td> {$item.3} </td>
	</tr>
</tr>
{/foreach}
</table>
</div>
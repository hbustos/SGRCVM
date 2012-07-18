<div align="center">
<table>
	<tr style="background: gray">
	<td><b> FechaHora </td>
	<td><b> NombresApellidos </td>

	</tr>
	<br>
{foreach from=$array key=key item=item}
<tr style="background: {cycle values='silver, gray'}">
	<td> {$item.0} </td>
	<td> {$item.1} </td>
	</tr>
</tr>
{/foreach}
</table>
</div>
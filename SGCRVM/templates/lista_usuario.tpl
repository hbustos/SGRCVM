<div align="center">
<table>
	<tr style="background: gray">
	<td><b>Id </td>  <td><b> Usuario </td> <td><b> Nombres Apellidos </td><td><b> Estado</b></td>   <td><b> Identificacion </td> <td> <b> Tipo Usuario <td><b> Jefe  </td></tr>
	<br>
{foreach from=$array key=key item=item}
<tr style="background: {cycle values='silver, gray'}">
	<td>{$item.0} </td><td> {$item.1} </td><td> {$item.2} </td><td> {$item.3} </td>  <td> {$item.4} </td>   <td> {$item.5} </td> <td>{$item.6} </td></tr>
</tr>
{/foreach}
</table>
</div>


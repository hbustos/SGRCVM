<div align="center">
<table>
	<tr style="background: silver">
	<td><b>Porcentaje avance proyectos</td>
	<tr style="background: gray">
	<td><b> Codigo Proyecto </td>
	<td><b> Porcentaje actual % </td>
        <td><b> Cantidad de Etapas </td>
	</tr>
	<br>
{foreach from=$array key=key item=item}
<tr style="background: {cycle values='silver, gray'}">
	<td> {$item.0} </td>
	<td> {$item.1} </td>
	<td> {$item.2} </td>
	</tr>
{/foreach}
        <tr style="background: silver">
        <td><b>Porcentaje avances etapas</td>
        <tr style="background: gray">
        <td><b> Codigo de Etapa </td>
        <td><b> Porcentaje actual % </td>
        <td><b> Cantidad de Actividades </td>
        </tr>
        <br>
{foreach from=$array2 key=key item=item}
<tr style="background: {cycle values='silver, gray'}">
        <td> {$item.0} </td>
        <td> {$item.1} </td>
        <td> {$item.2} </td>
        </tr>

</tr>
{/foreach}
</table>
</div>


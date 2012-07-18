<div align="center">
<table>
	<tr style="background: silver">
	<td><b>Listado de responsables de proyecto</td>
	<tr style="background: gray">
	<td><b> Codigo Proyecto </td>
	<td><b> Nombre Proyecto </td>
	<td><b> Fecha Inicio </td>
	<td><b> Fecha Final </td>
	<td><b> Procentaje </td>
	<td><b> Responsable </b></td>
	</tr>
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
        <tr style="background: silver">
	<td><b>Listado de responsables etapas </td>
        <tr style="background: gray">
        <td><b> Codigo Proyecto </td>
        <td><b> Codigo Etapas </td>
        <td><b> Nombre Etapa </td>
        <td><b> Porcentaje Etapa </td>
        <td><b> Peso </td>
        <td><b> Responsable </b></td>
        </tr>
{foreach from=$array2 key=key item=item}
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
        <tr style="background: silver">
        <td><b>Listado de responsables Actividades</td>
        <tr style="background: gray">
        <td><b> Codigo Etapa </td>
        <td><b> Nombre Actividad </td>
        <td><b> Fecha Inicio </td>
        <td><b> Fecha Final </td>
        <td><b> Procentaje </td>
        <td><b> Responsable </b></td>
        </tr>
{foreach from=$array3 key=key item=item}
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


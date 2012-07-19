<?php /* Smarty version Smarty 3.1.4, created on 2012-07-20 01:56:18
         compiled from ".\templates\menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:112965007655b3ab420-03407661%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85192c6e9f55456bef8cf932502504a0684ee09b' => 
    array (
      0 => '.\\templates\\menu.tpl',
      1 => 1342742165,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '112965007655b3ab420-03407661',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_5007655b74631',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5007655b74631')) {function content_5007655b74631($_smarty_tpl) {?><div id="menu">
<ul id="sddm">
    <li><a href="#"
        onmouseover="mopen('m1')"
        onmouseout="mclosetime()">Administrar Usuarios</a>
        <div id="m1"
            onmouseover="mcancelclosetime()"
            onmouseout="mclosetime()">
        <a href="index.php?page=usuario&accion=lista">Listar Usuarios</a>
        <a href="index.php?page=usuario&accion=crea">Crear Usuario</a>
        <a href="index.php?page=usuario&accion=actualiza">Actualizar Usuario</a>
        <a href="index.php?page=usuario&accion=borra">Borrar Usuario</a>
        </div>
    </li>
    <li><a href="#"
        onmouseover="mopen('m2')"
        onmouseout="mclosetime()">GESTIONAR RUTAS</a>
        <div id="m2"
            onmouseover="mcancelclosetime()"
            onmouseout="mclosetime()">
        <a href="index.php?page=proyecto&accion=crea">Crear Ruta</a>
        <a href="index.php?page=proyecto&accion=actualiza">Editar Ruta</a>
        <a href="index.php?page=proyecto&accion=borra">Eliminar Ruta</a>
        <a href="index.php?page=proyecto&accion=lista">Listar Rutas</a>
        </div>
    </li>


    <li><a href="#"
        onmouseover="mopen('m3')"
        onmouseout="mclosetime()">Visitar Vender</a>
        <div id="m3"
            onmouseover="mcancelclosetime()"
            onmouseout="mclosetime()">
        <a href="index.php?page=cliente&accion=visita">Visitar Cliente</a>
        <a href="index.php?page=etapa&accion=crea">Item2</a>
        <a href="index.php?page=etapa&accion=actualiza">Item3</a>
        <a href="index.php?page=etapa&accion=borra">Item4</a>
        <a href="index.php?page=venta&accion=vender">Vender</a>
        <a href="index.php?page=actividad&accion=crea">Item6</a>
        <a href="index.php?page=actividad&accion=actualiza">Item7</a>
        <a href="index.php?page=actividad&accion=borra">Item8</a>
        </div>
    </li>

    <li><a href="#"
        onmouseover="mopen('m4')"
        onmouseout="mclosetime()">Listar</a>
        <div id="m4"
            onmouseover="mcancelclosetime()"
            onmouseout="mclosetime()">
        <a href="index.php?page=cliente&accion=lista">Clientes</a>
        <a href="index.php?page=inventario&accion=lista">Inventario</a>
        <a href="index.php?page=movimiento&accion=lista">Item3</a>
        </div>
    </li>
<li><a href="#"
        onmouseover="mopen('m5')"
        onmouseout="mclosetime()">Reportes</a>
        <div id="m5"
            onmouseover="mcancelclosetime()"
            onmouseout="mclosetime()">
                <a href="index.php?page=reportes&accion=lista">ListaVisitas</a>
        <a href="index.php?page=rventas&accion=lista">ReporteVentas</a>

      <a href="index.php?page=rvisitas&accion=lista">Visitas x Dia</a>

      <a href="http://190.25.189.134/farmaceuticosltda">Visualizacion</a>

        </div>
    </li>


    <li><a href="index.php?page=ayuda&accion=lista"
        onmouseover="mopen('m6')"
        onmouseout="mclosetime()">Ayuda</a>
        <div id="m6"
            onmouseover="mcancelclosetime()"
            onmouseout="mclosetime()">
        </div>
    </li>
    <li>
        <a href="<?php echo $_SERVER['PHP_SELF'];?>
?logout=1"
        onmouseover="mopen('m7')"
        onmouseout="mclosetime()">Salir</a>
        <div id="m7"
            onmouseover="mcancelclosetime()"
            onmouseout="mclosetime()">
        </div>
    </li>
</ul>
<td>
Usuario en el sistema : <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['user']->value,SMARTY_RESOURCE_CHAR_SET);?>

</td>
<div style="clear:both"></div>
<br>
<?php }} ?>
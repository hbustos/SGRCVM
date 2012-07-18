<?php /* Smarty version Smarty 3.1.4, created on 2012-07-15 14:34:43
         compiled from ".\templates\crea_proyecto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:198585002b8e34e6978-24082892%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07789177dee52a7cfaf02965f71136945e1e113a' => 
    array (
      0 => '.\\templates\\crea_proyecto.tpl',
      1 => 1342275733,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198585002b8e34e6978-24082892',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_5002b8e374ff2',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5002b8e374ff2')) {function content_5002b8e374ff2($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_select_date')) include 'C:\xampp\htdocs\sgcrvm\smarty\libs\plugins\function.html_select_date.php';
?><div  align="center" id="crearusu"><br>
<table border="0">
  <tr>
    <td bgcolor="#0066FF" align="center" valign="middle" ><h2>Creaci&oacute;n de Proyecto </h2></td>
  </tr>
  <tr>
    <td height="301">
	<form  name="crearusu" method="GET">
      	<br>NOMBRE : <input type="text" name="nombre" id="nombre" /><br>
        <br>CODIGO : <input type="text" name="codigo" id="codigo"/><br>
        <br>DESCRIPCION : <textarea rows="4" cols="80" type="text" name="descrip" id="descrip"></textarea><br>
	<br>FECHA INICIO  : <?php echo smarty_function_html_select_date(array('end_year'=>"2020",'prefix'=>'fechaini','name'=>"fechaini"),$_smarty_tpl);?>

        <br>FECHA TERMINO : <?php echo smarty_function_html_select_date(array('end_year'=>"2020",'prefix'=>'fechafin','name'=>"fechafin"),$_smarty_tpl);?>

      	<br>ID DEL RESPONSABLE : <input type="text" name="responsable" id="responsable" /><br>
	
	<input type="hidden" name="accion" value="crea">
        <input type="hidden" name="page" value="proyecto">

        <div align="center"><br>
          <input name="Crear" type="submit" value="Crear">
        </div>
        </label>
      </form>      </td>
  </tr>
</table>
</div>
<?php }} ?>
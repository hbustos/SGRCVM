<?php /* Smarty version Smarty 3.1.4, created on 2012-07-10 22:10:31
         compiled from "./templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10987911974ff9ff42c80c34-20625670%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5f63cf8bf5077cbe9e40e023158dd20352e878a' => 
    array (
      0 => './templates/login.tpl',
      1 => 1341976229,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10987911974ff9ff42c80c34-20625670',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ff9ff42d857d',
  'variables' => 
  array (
    'mensaje' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ff9ff42d857d')) {function content_4ff9ff42d857d($_smarty_tpl) {?><html>
<head>

</head>

<body>
<div align="center" id="login">
<form name="login" method="GET">
<?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>

<br>Usuario : <input type="text" name="txtUsuario" id="txtUsuario">
<br>  Clave : <input type="password" name="txtClave" id="txtClave">
<input type="hidden" name="login" value="login">
<br><input type="submit" value="Ingresar">
</form>

</div>


</body>

</html>
<?php }} ?>
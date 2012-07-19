<?php /* Smarty version Smarty 3.1.4, created on 2012-07-18 20:57:49
         compiled from "./templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8295613205007699dec3385-76857560%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '8295613205007699dec3385-76857560',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mensaje' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_5007699e00d59',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5007699e00d59')) {function content_5007699e00d59($_smarty_tpl) {?><html>
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
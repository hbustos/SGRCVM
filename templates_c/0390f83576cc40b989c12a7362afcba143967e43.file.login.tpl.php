<?php /* Smarty version Smarty 3.1.4, created on 2012-07-14 16:46:54
         compiled from ".\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:98105001865e2b6886-98366440%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0390f83576cc40b989c12a7362afcba143967e43' => 
    array (
      0 => '.\\templates\\login.tpl',
      1 => 1342275733,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98105001865e2b6886-98366440',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mensaje' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_5001865e60e88',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5001865e60e88')) {function content_5001865e60e88($_smarty_tpl) {?><html>
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
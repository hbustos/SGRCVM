<?php /* Smarty version Smarty 3.1.4, created on 2012-07-15 21:30:55
         compiled from "./templates/mensaje.tpl" */ ?>
<?php /*%%SmartyHeaderCode:57037904550037cdf0a15a0-37078711%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d1b8e72a3489bdfb55332fad893c8645dd65ee8' => 
    array (
      0 => './templates/mensaje.tpl',
      1 => 1341372399,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '57037904550037cdf0a15a0-37078711',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mensaje' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_50037cdf11c8b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50037cdf11c8b')) {function content_50037cdf11c8b($_smarty_tpl) {?><div align="center">
<table>
<?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)){?>
<tr>
<td align="center" valign="middle"><b><h3>
        <?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>

</h3>
</td>
<?php }?>
</tr>
</table>
</div>
<?php }} ?>
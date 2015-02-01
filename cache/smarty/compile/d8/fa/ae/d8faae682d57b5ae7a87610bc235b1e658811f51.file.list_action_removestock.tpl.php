<?php /* Smarty version Smarty-3.1.14, created on 2015-02-01 21:06:14
         compiled from "D:\OpenServer\domains\presta.dev\admin\themes\default\template\helpers\list\list_action_removestock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2560354ce6b166ea052-74169167%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8faae682d57b5ae7a87610bc235b1e658811f51' => 
    array (
      0 => 'D:\\OpenServer\\domains\\presta.dev\\admin\\themes\\default\\template\\helpers\\list\\list_action_removestock.tpl',
      1 => 1390204460,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2560354ce6b166ea052-74169167',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54ce6b167270e0_08896129',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ce6b167270e0_08896129')) {function content_54ce6b167270e0_08896129($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/remove_stock.png" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a>
<?php }} ?>
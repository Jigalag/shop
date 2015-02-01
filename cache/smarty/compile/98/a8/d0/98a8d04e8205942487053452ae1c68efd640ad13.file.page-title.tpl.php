<?php /* Smarty version Smarty-3.1.14, created on 2015-02-01 21:06:37
         compiled from "D:\OpenServer\domains\presta.dev\themes\default\mobile\page-title.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1407154ce6b2dd97012-01658353%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98a8d04e8205942487053452ae1c68efd640ad13' => 
    array (
      0 => 'D:\\OpenServer\\domains\\presta.dev\\themes\\default\\mobile\\page-title.tpl',
      1 => 1390204462,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1407154ce6b2dd97012-01658353',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_title' => 0,
    'meta_title' => 0,
    'shop_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54ce6b2ddd40a3_02951149',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ce6b2ddd40a3_02951149')) {function content_54ce6b2ddd40a3_02951149($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'D:\\OpenServer\\domains\\presta.dev\\tools\\smarty\\plugins\\modifier.escape.php';
?><?php if (!isset($_smarty_tpl->tpl_vars['page_title']->value)&&isset($_smarty_tpl->tpl_vars['meta_title']->value)&&$_smarty_tpl->tpl_vars['meta_title']->value!=$_smarty_tpl->tpl_vars['shop_name']->value){?>
	<?php $_smarty_tpl->tpl_vars['page_title'] = new Smarty_variable(smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_title']->value, 'htmlall', 'UTF-8'), null, 0);?>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['page_title']->value)){?>
	<div data-role="header" class="clearfix navbartop" data-position="inline">
		<h1><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</h1>
	</div><!-- /navbartop -->
<?php }?><?php }} ?>
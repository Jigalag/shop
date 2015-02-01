<?php /* Smarty version Smarty-3.1.14, created on 2015-02-01 21:06:14
         compiled from "D:\OpenServer\domains\presta.dev\admin\themes\default\template\helpers\list\list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:786954ce6b1653ec67-02074306%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68a8c06706d731d8ba43066e50f22ad198e5fb75' => 
    array (
      0 => 'D:\\OpenServer\\domains\\presta.dev\\admin\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1390204460,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '786954ce6b1653ec67-02074306',
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
  'unifunc' => 'content_54ce6b1657bcf4_51732095',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ce6b1657bcf4_51732095')) {function content_54ce6b1657bcf4_51732095($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="edit" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/edit.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>
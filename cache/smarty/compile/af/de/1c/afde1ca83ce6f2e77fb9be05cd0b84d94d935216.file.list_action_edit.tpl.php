<?php /* Smarty version Smarty-3.1.14, created on 2015-02-01 21:42:56
         compiled from "D:\OpenServer\domains\shop.dev\admin9910\themes\default\template\helpers\list\list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2472354ce73b00f4248-01796631%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'afde1ca83ce6f2e77fb9be05cd0b84d94d935216' => 
    array (
      0 => 'D:\\OpenServer\\domains\\shop.dev\\admin9910\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1390204460,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2472354ce73b00f4248-01796631',
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
  'unifunc' => 'content_54ce73b01312d9_41516465',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ce73b01312d9_41516465')) {function content_54ce73b01312d9_41516465($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="edit" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/edit.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>
<?php /* Smarty version Smarty-3.1.14, created on 2015-02-01 21:42:56
         compiled from "D:\OpenServer\domains\shop.dev\admin9910\themes\default\template\helpers\list\list_action_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:839354ce73b02625a8-71072571%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a105d9fb0fee665315783b4f96761d78ca087b4d' => 
    array (
      0 => 'D:\\OpenServer\\domains\\shop.dev\\admin9910\\themes\\default\\template\\helpers\\list\\list_action_delete.tpl',
      1 => 1390204460,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '839354ce73b02625a8-71072571',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'confirm' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54ce73b029f637_63772962',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ce73b029f637_63772962')) {function content_54ce73b029f637_63772962($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="delete" <?php if (isset($_smarty_tpl->tpl_vars['confirm']->value)){?>onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')){ return true; }else{ event.stopPropagation(); event.preventDefault();};"<?php }?> title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/delete.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>
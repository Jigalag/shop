<?php /* Smarty version Smarty-3.1.14, created on 2015-02-01 21:06:31
         compiled from "D:\OpenServer\domains\presta.dev\themes\default\mobile\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1641754ce6b278d24d1-66943142%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f38ebcc87215de0e7d5c253d62f754f14c64a413' => 
    array (
      0 => 'D:\\OpenServer\\domains\\presta.dev\\themes\\default\\mobile\\index.tpl',
      1 => 1390204462,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1641754ce6b278d24d1-66943142',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54ce6b278d24d7_44725910',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ce6b278d24d7_44725910')) {function content_54ce6b278d24d7_44725910($_smarty_tpl) {?>
	<div data-role="content" id="content">
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"DisplayMobileIndex"),$_smarty_tpl);?>

		<?php echo $_smarty_tpl->getSubTemplate ('./sitemap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div><!-- /content -->
<?php }} ?>
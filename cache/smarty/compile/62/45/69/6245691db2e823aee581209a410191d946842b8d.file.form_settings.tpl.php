<?php /* Smarty version Smarty-3.1.14, created on 2015-02-01 21:06:08
         compiled from "D:\OpenServer\domains\presta.dev\admin\themes\default\template\controllers\referrers\form_settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1781854ce6b103567e4-70172428%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6245691db2e823aee581209a410191d946842b8d' => 
    array (
      0 => 'D:\\OpenServer\\domains\\presta.dev\\admin\\themes\\default\\template\\controllers\\referrers\\form_settings.tpl',
      1 => 1390204460,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1781854ce6b103567e4-70172428',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'current' => 0,
    'token' => 0,
    'tracking_dt' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54ce6b1040d990_33145828',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ce6b1040d990_33145828')) {function content_54ce6b1040d990_33145828($_smarty_tpl) {?>

</div>

<div>
	<fieldset>
		<legend>
			<img src="../img/admin/tab-preferences.gif" /> <?php echo smartyTranslate(array('s'=>'Settings'),$_smarty_tpl);?>

		</legend>
		<form action="<?php echo $_smarty_tpl->tpl_vars['current']->value;?>
&token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" method="post" id="settings_form" name="settings_form">
			<label><?php echo smartyTranslate(array('s'=>'Save direct traffic?'),$_smarty_tpl);?>
</label>
			<div class="margin-left">
				<label class="t" for="tracking_dt_on"><img src="../img/admin/enabled.gif" alt="<?php echo smartyTranslate(array('s'=>'Yes'),$_smarty_tpl);?>
" title="<?php echo smartyTranslate(array('s'=>'Yes'),$_smarty_tpl);?>
" /></label>
				<input type="radio" name="tracking_dt" id="tracking_dt_on" value="1" <?php if ($_smarty_tpl->tpl_vars['tracking_dt']->value){?>checked="checked"<?php }?> />
				<label class="t" for="tracking_dt_on"> <?php echo smartyTranslate(array('s'=>'Yes'),$_smarty_tpl);?>
</label>
				<label class="t" for="tracking_dt_off"><img src="../img/admin/disabled.gif" alt="<?php echo smartyTranslate(array('s'=>'No'),$_smarty_tpl);?>
" title="<?php echo smartyTranslate(array('s'=>'No'),$_smarty_tpl);?>
" style="margin-left: 10px;" /></label>
				<input type="radio" name="tracking_dt" id="tracking_dt_off" value="0" <?php if (!$_smarty_tpl->tpl_vars['tracking_dt']->value){?>checked="checked"<?php }?>/>
				<label class="t" for="tracking_dt_off"> <?php echo smartyTranslate(array('s'=>'No'),$_smarty_tpl);?>
</label>
			</div>
			<p><?php echo smartyTranslate(array('s'=>'Direct traffic can be quite resource-intensive. You should consider enabling it only if you have a strong need for it.'),$_smarty_tpl);?>
</p>
			<input type="submit" class="button" value="<?php echo smartyTranslate(array('s'=>'   Save   '),$_smarty_tpl);?>
" name="submitSettings" id="submitSettings" />
		</form>
		<div class="separation"></div>
		<form action="<?php echo $_smarty_tpl->tpl_vars['current']->value;?>
&token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" method="post" id="refresh_index_form" name="refresh_index_form">
			<h3><?php echo smartyTranslate(array('s'=>'Indexation'),$_smarty_tpl);?>
</h3>
			<p><?php echo smartyTranslate(array('s'=>'There is a huge quantity of data, so each connection corresponding to a referrer is indexed. You can also refresh this index by clicking the button above. This process may take awhile, and it\'s only needed if you modified or added a referrer, or if you want changes to be retroactive.'),$_smarty_tpl);?>
</p>
			<input type="submit" class="button" value="<?php echo smartyTranslate(array('s'=>'Refresh index'),$_smarty_tpl);?>
" name="submitRefreshIndex" id="submitRefreshIndex" />
		</form>
				<div class="separation"></div>
		<form action="<?php echo $_smarty_tpl->tpl_vars['current']->value;?>
&token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" method="post" id="refresh_cache_form" name="refresh_cache_form">
			<h3><?php echo smartyTranslate(array('s'=>'Cache'),$_smarty_tpl);?>
</h3>
			<p><?php echo smartyTranslate(array('s'=>'In order to sort and filter your data, it\'s cached. You can refresh the cache by clicking on the button above.'),$_smarty_tpl);?>
</p>
			<input type="submit" class="button" value="<?php echo smartyTranslate(array('s'=>'Refresh cache'),$_smarty_tpl);?>
" name="submitRefreshCache" id="submitRefreshCache" />
		</form>
	</fieldset>
</div>

<div class="clear">&nbsp;</div>

	<?php }} ?>
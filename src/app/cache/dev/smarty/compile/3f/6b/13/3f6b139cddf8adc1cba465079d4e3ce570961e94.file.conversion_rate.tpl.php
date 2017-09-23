<?php /* Smarty version Smarty-3.1.19, created on 2017-09-23 17:10:18
         compiled from "/var/www/html/admin/themes/default/template/controllers/currencies/conversion_rate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:88839153359c6795af1be98-32552810%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f6b139cddf8adc1cba465079d4e3ce570961e94' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/controllers/currencies/conversion_rate.tpl',
      1 => 1506179304,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88839153359c6795af1be98-32552810',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PS_ACTIVE_CRONJOB_EXCHANGE_RATE' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59c6795b037851_84834444',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c6795b037851_84834444')) {function content_59c6795b037851_84834444($_smarty_tpl) {?>

<div class="row">
	<div class="col-lg-12">
		<?php if (Module::isInstalled("cronjobs")) {?>
			<?php $_smarty_tpl->tpl_vars['PS_ACTIVE_CRONJOB_EXCHANGE_RATE'] = new Smarty_variable(Configuration::get('PS_ACTIVE_CRONJOB_EXCHANGE_RATE'), null, 0);?>
			<div id="currencyCronjobLiveExchangeRate" class="panel">
				<div class="panel-heading">
					<?php echo smartyTranslate(array('s'=>'Live exchange rates','d'=>'Admin.International.Feature'),$_smarty_tpl);?>

					<div class="pull-right checkbox titatoggle unchecked-red checkbox-slider--b-flat">
						<label>
							<input type="checkbox" <?php echo 0!=$_smarty_tpl->tpl_vars['PS_ACTIVE_CRONJOB_EXCHANGE_RATE']->value ? 'checked="checked"' : '';?>
><span></span>
						</label>
					</div>
					<div class="clearfix"></div>
				</div>
				<span class="status disabled <?php echo 0==$_smarty_tpl->tpl_vars['PS_ACTIVE_CRONJOB_EXCHANGE_RATE']->value ? '' : 'hide';?>
"><?php echo smartyTranslate(array('s'=>"The exchange rates are not automatically updated",'d'=>'Admin.International.Feature'),$_smarty_tpl);?>
</span>
				<span class="status enabled <?php echo 0!=$_smarty_tpl->tpl_vars['PS_ACTIVE_CRONJOB_EXCHANGE_RATE']->value ? '' : 'hide';?>
"><?php echo smartyTranslate(array('s'=>"The exchange rates are automatically updated",'d'=>'Admin.International.Feature'),$_smarty_tpl);?>
</span>
			</div>
    <?php } else { ?>
      <div id="currencyCronjobLiveExchangeRate" class="panel">
				<div class="panel-heading">
					<?php echo smartyTranslate(array('s'=>'Live exchange rates','d'=>'Admin.International.Feature'),$_smarty_tpl);?>

					<div class="pull-right checkbox titatoggle unchecked-red checkbox-slider--b-flat"></div>
					<div class="clearfix"></div>
				</div>
				<span class="status disabled"><?php echo smartyTranslate(array('s'=>'Please install the %module_name% module before using this feature.','sprintf'=>array('%module_name%'=>'cronjobs'),'d'=>'Admin.International.Notification'),$_smarty_tpl);?>
</span>
			</div>
		<?php }?>
		<div class="panel">
			<div class="panel-heading"><?php echo smartyTranslate(array('s'=>'Update exchange rates','d'=>'Admin.International.Feature'),$_smarty_tpl);?>
</div>
			<form action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminCurrencies'),'html','UTF-8');?>
" id="currency_form" method="post">
				<button type="submit" class="btn btn-default col-lg-12 col-xs-4" name="SubmitExchangesRates"><?php echo smartyTranslate(array('s'=>"Update",'d'=>'Admin.Global'),$_smarty_tpl);?>
</button>
			</form>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<?php }} ?>

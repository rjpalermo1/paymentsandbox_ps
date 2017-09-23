<?php /* Smarty version Smarty-3.1.19, created on 2017-09-23 12:45:00
         compiled from "/var/www/html/admin318faryb7/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:123692354659c68f8cea37c4-06156558%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b78d408268be9a5017fcbb4d805e8762e74abc05' => 
    array (
      0 => '/var/www/html/admin318faryb7/themes/default/template/content.tpl',
      1 => 1506184929,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123692354659c68f8cea37c4-06156558',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59c68f8cec14e4_95597645',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c68f8cec14e4_95597645')) {function content_59c68f8cec14e4_95597645($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>

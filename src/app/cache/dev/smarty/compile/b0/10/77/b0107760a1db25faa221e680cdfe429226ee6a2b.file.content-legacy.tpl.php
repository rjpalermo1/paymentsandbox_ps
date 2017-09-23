<?php /* Smarty version Smarty-3.1.19, created on 2017-09-23 17:10:16
         compiled from "/var/www/html/admin/themes/default/template/content-legacy.tpl" */ ?>
<?php /*%%SmartyHeaderCode:107874258859c67958a5d149-46654838%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0107760a1db25faa221e680cdfe429226ee6a2b' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/content-legacy.tpl',
      1 => 1506179304,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '107874258859c67958a5d149-46654838',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59c67958b600c4_22943174',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c67958b600c4_22943174')) {function content_59c67958b600c4_22943174($_smarty_tpl) {?>
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

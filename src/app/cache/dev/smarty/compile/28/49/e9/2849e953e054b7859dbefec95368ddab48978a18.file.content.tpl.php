<?php /* Smarty version Smarty-3.1.19, created on 2017-09-23 17:10:24
         compiled from "/var/www/html/admin/themes/default/template/controllers/shop/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:119685872559c679604d55a3-44204269%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2849e953e054b7859dbefec95368ddab48978a18' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/controllers/shop/content.tpl',
      1 => 1506179304,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '119685872559c679604d55a3-44204269',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shops_tree' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59c679604e6583_31703004',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c679604e6583_31703004')) {function content_59c679604e6583_31703004($_smarty_tpl) {?>

<div class="row">
	<div class="col-lg-4">
		<?php echo $_smarty_tpl->tpl_vars['shops_tree']->value;?>

	</div>
	<div class="col-lg-8"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
</div>
<?php }} ?>

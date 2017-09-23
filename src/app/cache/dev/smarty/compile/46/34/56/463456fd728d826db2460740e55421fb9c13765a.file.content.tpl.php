<?php /* Smarty version Smarty-3.1.19, created on 2017-09-23 12:36:47
         compiled from "/var/www/html/admin240x2hjae/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:141941751659c68d9f59a346-00336335%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '463456fd728d826db2460740e55421fb9c13765a' => 
    array (
      0 => '/var/www/html/admin240x2hjae/themes/default/template/content.tpl',
      1 => 1506184508,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '141941751659c68d9f59a346-00336335',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59c68d9f5af104_01742849',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c68d9f5af104_01742849')) {function content_59c68d9f5af104_01742849($_smarty_tpl) {?>
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

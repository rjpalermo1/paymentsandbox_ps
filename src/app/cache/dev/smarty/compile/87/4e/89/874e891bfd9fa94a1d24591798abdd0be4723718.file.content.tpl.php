<?php /* Smarty version Smarty-3.1.19, created on 2017-09-23 11:34:12
         compiled from "/var/www/html/admin847hxbjtq/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:183961316859c67ef44b31c0-65771305%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '874e891bfd9fa94a1d24591798abdd0be4723718' => 
    array (
      0 => '/var/www/html/admin847hxbjtq/themes/default/template/content.tpl',
      1 => 1506179304,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '183961316859c67ef44b31c0-65771305',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59c67ef44c7db6_74635248',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c67ef44c7db6_74635248')) {function content_59c67ef44c7db6_74635248($_smarty_tpl) {?>
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

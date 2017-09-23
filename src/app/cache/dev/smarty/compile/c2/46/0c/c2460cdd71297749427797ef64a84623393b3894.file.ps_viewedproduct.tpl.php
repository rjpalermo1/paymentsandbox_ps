<?php /* Smarty version Smarty-3.1.19, created on 2017-09-23 17:10:34
         compiled from "/var/www/html/themes/classic/modules/ps_viewedproduct/views/template/hook/ps_viewedproduct.tpl" */ ?>
<?php /*%%SmartyHeaderCode:51570007559c6796ab910d1-61982824%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2460cdd71297749427797ef64a84623393b3894' => 
    array (
      0 => '/var/www/html/themes/classic/modules/ps_viewedproduct/views/template/hook/ps_viewedproduct.tpl',
      1 => 1506179313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '51570007559c6796ab910d1-61982824',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59c6796abac6c0_89757660',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c6796abac6c0_89757660')) {function content_59c6796abac6c0_89757660($_smarty_tpl) {?>
<section class="featured-products clearfix mt-3">
  <h2><?php echo smartyTranslate(array('s'=>'Viewed products','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</h2>
  <div class="products">
    <?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
?>
      <?php echo $_smarty_tpl->getSubTemplate ("catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>

    <?php } ?>
  </div>
</section>
<?php }} ?>

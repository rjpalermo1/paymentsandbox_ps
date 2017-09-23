<?php /* Smarty version Smarty-3.1.19, created on 2017-09-23 17:10:33
         compiled from "/var/www/html/themes/classic/modules/ps_crossselling/views/templates/hook/ps_crossselling.tpl" */ ?>
<?php /*%%SmartyHeaderCode:160641582259c67969b6c5c4-12508809%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '009fb689276fc3e952414fce7f57e5edede365e9' => 
    array (
      0 => '/var/www/html/themes/classic/modules/ps_crossselling/views/templates/hook/ps_crossselling.tpl',
      1 => 1506179313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '160641582259c67969b6c5c4-12508809',
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
  'unifunc' => 'content_59c67969b88064_05315868',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c67969b88064_05315868')) {function content_59c67969b88064_05315868($_smarty_tpl) {?>

<section class="featured-products clearfix mt-3">
  <h2><?php echo smartyTranslate(array('s'=>'Customers who bought this product also bought:','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
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

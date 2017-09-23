<?php /* Smarty version Smarty-3.1.19, created on 2017-09-23 17:10:34
         compiled from "/var/www/html/themes/classic/modules/ps_productinfo/views/templates/hook/ps_productinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:51719375459c6796a4f2205-52133700%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca9ef99c11ae718dacdcf2b8a4330487dd3f9f5e' => 
    array (
      0 => '/var/www/html/themes/classic/modules/ps_productinfo/views/templates/hook/ps_productinfo.tpl',
      1 => 1506179313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '51719375459c6796a4f2205-52133700',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'vars_nb_people' => 0,
    'vars_date_last_order' => 0,
    'vars_date_last_cart' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59c6796a535823_88781176',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c6796a535823_88781176')) {function content_59c6796a535823_88781176($_smarty_tpl) {?>
<div class="js-productinfo mt-1">
  <?php if (isset($_smarty_tpl->tpl_vars['vars_nb_people']->value)) {?>
    <p>
      <?php if ($_smarty_tpl->tpl_vars['vars_nb_people']->value['%nb_people%']==1) {?>
        <?php echo smartyTranslate(array('s'=>'1 person is currently watching this product.','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>

      <?php } else { ?>
        <?php echo smartyTranslate(array('s'=>'%nb_people% people are currently watching this product.','sprintf'=>$_smarty_tpl->tpl_vars['vars_nb_people']->value,'d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>

      <?php }?>
    </p>
  <?php }?>

  <?php if (isset($_smarty_tpl->tpl_vars['vars_date_last_order']->value)) {?>
    <p><?php echo smartyTranslate(array('s'=>'Last time this product was bought: %date_last_order%','sprintf'=>$_smarty_tpl->tpl_vars['vars_date_last_order']->value,'d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</p>
  <?php }?>

  <?php if (isset($_smarty_tpl->tpl_vars['vars_date_last_cart']->value)) {?>
    <p><?php echo smartyTranslate(array('s'=>'Last time this product was added to a cart: %date_last_cart%','sprintf'=>$_smarty_tpl->tpl_vars['vars_date_last_cart']->value,'d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</p>
  <?php }?>
</div>
<?php }} ?>

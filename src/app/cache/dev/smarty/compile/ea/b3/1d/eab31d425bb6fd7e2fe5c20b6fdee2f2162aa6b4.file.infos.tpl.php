<?php /* Smarty version Smarty-3.1.19, created on 2017-09-23 11:44:07
         compiled from "/var/www/html/modules/ps_checkpayment/views/templates/hook/infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:184177614159c68147779ce6-75939070%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eab31d425bb6fd7e2fe5c20b6fdee2f2162aa6b4' => 
    array (
      0 => '/var/www/html/modules/ps_checkpayment/views/templates/hook/infos.tpl',
      1 => 1506179311,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184177614159c68147779ce6-75939070',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59c681477cd779_94256406',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c681477cd779_94256406')) {function content_59c681477cd779_94256406($_smarty_tpl) {?>

<div class="alert alert-info">
<img src="../modules/ps_checkpayment/ps_checkpayment.jpg" style="float:left; margin-right:15px;" width="86" height="49">
<p><strong><?php echo smartyTranslate(array('s'=>"This module allows you to accept payments by check.",'d'=>'Modules.Checkpayment.Admin'),$_smarty_tpl);?>
</strong></p>
<p><?php echo smartyTranslate(array('s'=>"If the client chooses this payment method, the order status will change to 'Waiting for payment'.",'d'=>'Modules.Checkpayment.Admin'),$_smarty_tpl);?>
</p>
<p><?php echo smartyTranslate(array('s'=>"You will need to manually confirm the order as soon as you receive a check.",'d'=>'Modules.Checkpayment.Admin'),$_smarty_tpl);?>
</p>
</div>
<?php }} ?>

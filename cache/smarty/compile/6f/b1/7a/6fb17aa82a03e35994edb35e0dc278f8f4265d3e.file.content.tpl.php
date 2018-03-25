<?php /* Smarty version Smarty-3.1.19, created on 2018-03-17 05:06:26
         compiled from "E:\xampp\htdocs\hotelcommerce\admin\themes\default\template\controllers\shop\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3992837005aac9442dca1d7-83921745%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6fb17aa82a03e35994edb35e0dc278f8f4265d3e' => 
    array (
      0 => 'E:\\xampp\\htdocs\\hotelcommerce\\admin\\themes\\default\\template\\controllers\\shop\\content.tpl',
      1 => 1500613436,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3992837005aac9442dca1d7-83921745',
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
  'unifunc' => 'content_5aac9442dce058_45892027',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aac9442dce058_45892027')) {function content_5aac9442dce058_45892027($_smarty_tpl) {?>

<div class="row">
	<div class="col-lg-4">
		<?php echo $_smarty_tpl->tpl_vars['shops_tree']->value;?>

	</div>
	<div class="col-lg-8"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
</div><?php }} ?>

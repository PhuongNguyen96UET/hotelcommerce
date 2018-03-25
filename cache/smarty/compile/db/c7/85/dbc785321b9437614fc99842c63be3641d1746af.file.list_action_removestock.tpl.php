<?php /* Smarty version Smarty-3.1.19, created on 2018-03-17 05:06:27
         compiled from "E:\xampp\htdocs\hotelcommerce\admin\themes\default\template\helpers\list\list_action_removestock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18470985155aac94437f2280-20736500%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dbc785321b9437614fc99842c63be3641d1746af' => 
    array (
      0 => 'E:\\xampp\\htdocs\\hotelcommerce\\admin\\themes\\default\\template\\helpers\\list\\list_action_removestock.tpl',
      1 => 1500613440,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18470985155aac94437f2280-20736500',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5aac94437f6101_17465717',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aac94437f6101_17465717')) {function content_5aac94437f6101_17465717($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	<i class="icon-circle-arrow-down"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a>
<?php }} ?>

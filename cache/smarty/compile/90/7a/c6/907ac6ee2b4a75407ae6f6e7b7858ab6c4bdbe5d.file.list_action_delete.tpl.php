<?php /* Smarty version Smarty-3.1.19, created on 2018-03-17 05:06:27
         compiled from "E:\xampp\htdocs\hotelcommerce\admin\themes\default\template\helpers\list\list_action_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7515303925aac94437a01f0-77885243%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '907ac6ee2b4a75407ae6f6e7b7858ab6c4bdbe5d' => 
    array (
      0 => 'E:\\xampp\\htdocs\\hotelcommerce\\admin\\themes\\default\\template\\helpers\\list\\list_action_delete.tpl',
      1 => 1500613440,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7515303925aac94437a01f0-77885243',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'confirm' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5aac94437a7ef3_59225228',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aac94437a7ef3_59225228')) {function content_5aac94437a7ef3_59225228($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if (isset($_smarty_tpl->tpl_vars['confirm']->value)) {?> onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')){return true;}else{event.stopPropagation(); event.preventDefault();};"<?php }?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="delete">
	<i class="icon-trash"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>

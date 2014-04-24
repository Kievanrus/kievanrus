<?php /* Smarty version Smarty-3.1.14, created on 2014-04-24 23:13:22
         compiled from "/home/kievanrus/admin1531/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:110081274053592a1268c239-95841548%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1205d37f2d74d9d0ac629a0fdde518e0caf41905' => 
    array (
      0 => '/home/kievanrus/admin1531/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1397124552,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '110081274053592a1268c239-95841548',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53592a1269a569_78738073',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53592a1269a569_78738073')) {function content_53592a1269a569_78738073($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
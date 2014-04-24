<?php /* Smarty version Smarty-3.1.14, created on 2014-04-24 23:11:57
         compiled from "/home/kievanrus/admin1531/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:210171637535929bd90b234-61165253%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d46eab1a05039fe0fbfc76ec55e8b125c94ddcd' => 
    array (
      0 => '/home/kievanrus/admin1531/themes/default/template/content.tpl',
      1 => 1397124552,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '210171637535929bd90b234-61165253',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_535929bd91b120_39516773',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535929bd91b120_39516773')) {function content_535929bd91b120_39516773($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>

<?php if (isset($_smarty_tpl->tpl_vars['content']->value)){?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.14, created on 2014-04-24 23:11:57
         compiled from "/home/kievanrus/admin1531/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2115136422535929bdb95289-73319568%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3a2fcfc4802a82416b346288974dcb2654d404c' => 
    array (
      0 => '/home/kievanrus/admin1531/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1397124552,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2115136422535929bdb95289-73319568',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_535929bdb99d43_01615023',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535929bdb99d43_01615023')) {function content_535929bdb99d43_01615023($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div><?php }} ?>
<?php
/* Smarty version 3.1.39, created on 2022-10-24 07:16:10
  from 'app:controllersgridgridHeader' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_63561f9a5c15a0_60795376',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3c3df9522cf3bd04329e738db71e205816ab237' => 
    array (
      0 => 'app:controllersgridgridHeader',
      1 => 1664910729,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:controllers/grid/gridActionsAbove.tpl' => 1,
  ),
),false)) {
function content_63561f9a5c15a0_60795376 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="header">

	<?php if ($_smarty_tpl->tpl_vars['grid']->value->getTitle()) {?>
		<h4>
			<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'translate' ][ 0 ], array( $_smarty_tpl->tpl_vars['grid']->value->getTitle() ));?>

		</h4>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['grid']->value->getActions((defined('GRID_ACTION_POSITION_ABOVE') ? constant('GRID_ACTION_POSITION_ABOVE') : null))) {?>
		<?php if ($_smarty_tpl->tpl_vars['grid']->value->getActions((defined('GRID_ACTION_POSITION_ABOVE') ? constant('GRID_ACTION_POSITION_ABOVE') : null))) {?>
			<?php $_smarty_tpl->_subTemplateRender("app:controllers/grid/gridActionsAbove.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('actions'=>$_smarty_tpl->tpl_vars['grid']->value->getActions((defined('GRID_ACTION_POSITION_ABOVE') ? constant('GRID_ACTION_POSITION_ABOVE') : null)),'gridId'=>$_smarty_tpl->tpl_vars['staticId']->value), 0, false);
?>
		<?php }?>
	<?php }?>
</div>

<?php echo $_smarty_tpl->tpl_vars['gridFilterForm']->value;?>

<?php }
}

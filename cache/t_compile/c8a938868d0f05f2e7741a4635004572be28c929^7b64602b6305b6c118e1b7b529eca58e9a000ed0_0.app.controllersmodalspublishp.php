<?php
/* Smarty version 3.1.39, created on 2022-10-22 20:02:40
  from 'app:controllersmodalspublishp' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_635430406abf75_63556710',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b64602b6305b6c118e1b7b529eca58e9a000ed0' => 
    array (
      0 => 'app:controllersmodalspublishp',
      1 => 1664910729,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_635430406abf75_63556710 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_assignInScope('uuid', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( uniqid('') )));?>
<div id="publish-<?php echo $_smarty_tpl->tpl_vars['uuid']->value;?>
" class="pkpWorkflow__publishModal">
  <pkp-form v-bind="components.<?php echo (defined('FORM_PUBLISH') ? constant('FORM_PUBLISH') : null);?>
" @set="set" />
	<?php echo '<script'; ?>
 type="text/javascript">
		pkp.registry.init('publish-<?php echo $_smarty_tpl->tpl_vars['uuid']->value;?>
', 'Container', <?php echo json_encode($_smarty_tpl->tpl_vars['publishData']->value);?>
);
	<?php echo '</script'; ?>
>
</div><?php }
}

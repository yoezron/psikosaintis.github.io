<?php
/* Smarty version 3.1.39, created on 2022-10-22 19:37:59
  from 'app:controllersrevealMore.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_63542a77a400c9_54374677',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17539bb13c4871026eeeffc5fb08d9cfd98d8a79' => 
    array (
      0 => 'app:controllersrevealMore.tpl',
      1 => 1664910729,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63542a77a400c9_54374677 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('id', uniqid(10));
if (!$_smarty_tpl->tpl_vars['height']->value) {?>
	<?php $_smarty_tpl->_assignInScope('height', 192);
}
echo '<script'; ?>
>
	// Initialise JS handler.
	$(function() {
		$('#revealMore-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
').pkpHandler(
			'$.pkp.controllers.RevealMoreHandler',
			{
				height: <?php echo $_smarty_tpl->tpl_vars['height']->value;?>

			}
		);
	});
<?php echo '</script'; ?>
>
<div id="revealMore-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="pkp_controllers_revealMore">
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

	<div class="reveal_more_wrapper">
		<button href="#" class="revealMoreButton">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.readMore"),$_smarty_tpl ) );?>

		</button>
	</div>
</div>
<?php }
}

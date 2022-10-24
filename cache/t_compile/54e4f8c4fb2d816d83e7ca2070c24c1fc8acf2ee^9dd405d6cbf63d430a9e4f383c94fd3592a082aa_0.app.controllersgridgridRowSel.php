<?php
/* Smarty version 3.1.39, created on 2022-10-22 19:56:55
  from 'app:controllersgridgridRowSel' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_63542ee7718d69_76265607',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9dd405d6cbf63d430a9e4f383c94fd3592a082aa' => 
    array (
      0 => 'app:controllersgridgridRowSel',
      1 => 1664910729,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63542ee7718d69_76265607 (Smarty_Internal_Template $_smarty_tpl) {
?><input type="checkbox" id="select-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['elementId']->value ));?>
" name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['selectName']->value ));?>
[]" style="height: 15px; width: 15px;" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['elementId']->value ));?>
" <?php if ($_smarty_tpl->tpl_vars['selected']->value) {?>checked="checked"<?php }?> />
<?php }
}

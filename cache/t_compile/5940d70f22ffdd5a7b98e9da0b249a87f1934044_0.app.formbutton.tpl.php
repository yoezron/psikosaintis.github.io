<?php
/* Smarty version 3.1.39, created on 2022-10-22 14:22:18
  from 'app:formbutton.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6353e07a361b85_96856685',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5940d70f22ffdd5a7b98e9da0b249a87f1934044' => 
    array (
      0 => 'app:formbutton.tpl',
      1 => 1664910729,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6353e07a361b85_96856685 (Smarty_Internal_Template $_smarty_tpl) {
?><button class="pkp_button <?php echo $_smarty_tpl->tpl_vars['FBV_class']->value;?>
" type="<?php echo $_smarty_tpl->tpl_vars['FBV_type']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['FBV_disabled']->value) {?> disabled="disabled"<?php }?> <?php echo $_smarty_tpl->tpl_vars['FBV_buttonParams']->value;?>
><?php if ($_smarty_tpl->tpl_vars['FBV_translate']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['FBV_label']->value),$_smarty_tpl ) );
} else {
echo $_smarty_tpl->tpl_vars['FBV_label']->value;
}?></button>
<?php }
}

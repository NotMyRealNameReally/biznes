<?php
/* Smarty version 3.1.39, created on 2022-01-16 10:55:56
  from '/var/www/html/admin123/themes/default/template/helpers/list/list_action_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61e3ebacb8c921_63625622',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ea7eeba3544e7175dae51e986a3f00145109360' => 
    array (
      0 => '/var/www/html/admin123/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1642238301,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61e3ebacb8c921_63625622 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['href']->value,'html','UTF-8' ));?>
" title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>

</a>
<?php }
}
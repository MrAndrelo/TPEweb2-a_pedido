<?php
/* Smarty version 3.1.33, created on 2019-10-10 05:51:21
  from 'C:\xampp\htdocs\TPEweb2-a_pedido\templates\comidas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9eaab908fa66_22673887',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00d7c1da17b4afa7508875aa0c4593f441fd3d10' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEweb2-a_pedido\\templates\\comidas.tpl',
      1 => 1570679478,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9eaab908fa66_22673887 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>
    <?php ob_start();
echo $_smarty_tpl->tpl_vars['primertitulo']->value;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

</h1>


<ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comidas']->value, 'comida');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['comida']->value) {
?>
        <li> <?php echo $_smarty_tpl->tpl_vars['comida']->value->nombre;?>
  
        </li>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul><?php }
}

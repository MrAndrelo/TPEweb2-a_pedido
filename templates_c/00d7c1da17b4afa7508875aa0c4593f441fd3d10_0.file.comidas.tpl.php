<?php
/* Smarty version 3.1.33, created on 2019-10-12 00:59:34
  from 'C:\xampp\htdocs\TPEweb2-a_pedido\templates\comidas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da109564fbce2_98682537',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00d7c1da17b4afa7508875aa0c4593f441fd3d10' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEweb2-a_pedido\\templates\\comidas.tpl',
      1 => 1570834772,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./style.css' => 1,
  ),
),false)) {
function content_5da109564fbce2_98682537 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
   <?php $_smarty_tpl->_subTemplateRender("file:./style.css", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</style>


<h1>
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

<?php
/* Smarty version 3.1.33, created on 2019-10-18 20:32:24
  from 'C:\xampp\htdocs\TPEweb2-a_pedido\templates\comidas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5daa0538b72475_53921095',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00d7c1da17b4afa7508875aa0c4593f441fd3d10' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEweb2-a_pedido\\templates\\comidas.tpl',
      1 => 1571423542,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./style.css' => 1,
  ),
),false)) {
function content_5daa0538b72475_53921095 (Smarty_Internal_Template $_smarty_tpl) {
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
        <button a href='<?php echo '<? ';?>BorrarComida(<?php echo $_smarty_tpl->tpl_vars['comida']->value->id_comida;?>
) style type= button <?php echo '?>';?>'>BORRAR</a></button>
                <button <a href="editar/<?php echo $_smarty_tpl->tpl_vars['comida']->value->id_comida;?>
" method="GET" class="edit">EDITAR</button>
        
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>



<form action="insertar" method="POST">
  <input name="nombre" placeholder="Ingrese la comida"/>
  <input type="submit" value="Enviar"/>
</form>
<?php }
}

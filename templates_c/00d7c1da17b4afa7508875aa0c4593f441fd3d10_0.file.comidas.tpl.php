<?php
/* Smarty version 3.1.33, created on 2019-10-22 04:24:11
  from 'C:\xampp\htdocs\TPEweb2-a_pedido\templates\comidas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dae684b4d7c69_83592946',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00d7c1da17b4afa7508875aa0c4593f441fd3d10' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEweb2-a_pedido\\templates\\comidas.tpl',
      1 => 1571626740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5dae684b4d7c69_83592946 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body class="container">
<div>
<h1 class="text-center">
    <?php ob_start();
echo $_smarty_tpl->tpl_vars['primertitulo']->value;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

</h1>
</div>


</div>


<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Comida</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <form action="comida/insertar" method="POST">
            <td><form action="insertar" method="POST"><input name="nombre" class="form-control" placeholder="Ingrese nueva comida"/></td>
            <td><button type="submit" class="btn btn-primary">AGREGAR</button></td>
        </form>
    </tr>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comidas']->value, 'comida');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['comida']->value) {
?>
    <tr>
        
            <td scope="row"> 
                <?php echo $_smarty_tpl->tpl_vars['comida']->value->nombre;?>

                <?php if ($_smarty_tpl->tpl_vars['editar']->value) {?> 
                <input name="nombre" class="form-control" value=<?php echo $_smarty_tpl->tpl_vars['comida']->value->nombre;?>
/>
                
                <?php }?>
            
            </td>
        
         <?php if ($_smarty_tpl->tpl_vars['editarComida']->value) {?>
            <td scope="row"> <?php echo $_smarty_tpl->tpl_vars['comida']->value->nombre;?>
</td>
        <?php }?>


        <td><form action="editarComida/<?php echo $_smarty_tpl->tpl_vars['comida']->value->id_comida;?>
" method="POST"><button type="submit" class="btn btn-light">EDITAR</button>
        
        <a class="btn btn-secondary" href="borrarComida/<?php echo $_smarty_tpl->tpl_vars['comida']->value->id_comida;?>
" type="button">X</a>
        </td>
    </tr>









        
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </tbody>
</table>
</body>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

{include 'templates/header.tpl'}


<div>
<h1 class="text-center">
   {$segundotitulo}
</h1>
</div>


</div>

{if isset($smarty.session.USER_NAME)}
<a class="btn btn-warning" href="variedad/insertar">AGREGAR VARIEDAD</a>
{/if}
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Ingredientes</th>
      <th scope="col">imagen</th>
      <th scope="col">pertenece a...</th>
      {if isset($smarty.session.USER_NAME)}
      <th scope="col">Acciones</th>
      {/if}
    </tr>
  </thead>
  <tbody>
  {foreach from= $variedades item=variedad}
  <tr>
    <td scope="row"> {$variedad->nombre}</td>
    <td scope="row">{$variedad->ingredientes}</td>
    <td scope="row"><img width=90px src="{$variedad->imagen}"></td>
    <td scope="row">{$variedad->nombre_comida}</td>
    {if isset($smarty.session.USER_NAME)}
    <td>
      <a class="btn btn-secondary" href="variedad/editar/{$variedad->id_variedad}">editar</a>
      <a class="btn btn-secondary" href="variedad/borrar/{$variedad->id_variedad}">borrar</a>
    </td>
    {/if}
  </tr>    
  {/foreach}
  </tbody>
</table>
</body>

{include 'templates/footer.tpl'}

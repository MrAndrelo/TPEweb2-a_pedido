{include 'templates/header.tpl'}


<div>
<h1 class="text-center">
   {$segundotitulo}
</h1>
</div>


</div>

  
<a class="btn btn-warning" href="variedad/insertar">AGREGAR VARIEDAD</a>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Ingredientes</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
  {foreach from= $variedades item=variedad}
  <tr>
    <td scope="row"> {$variedad->nombre}</td>
    <td scope="row">{$variedad->ingredientes}</td>
    <td>
      <a class="btn btn-secondary" href="variedad/editar/{$variedad->id_variedad}">editar</a>
      <a class="btn btn-secondary" href="variedad/borrar/{$variedad->id_variedad}">borrar</a>
    </td>
  </tr>    
  {/foreach}
  </tbody>
</table>
</body>

{include 'templates/footer.tpl'}

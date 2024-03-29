{include 'templates/header.tpl'}
<div>
  <h1 class="text-center">{$primertitulo}</h1>
</div>
{if isset($smarty.session.USER_NAME)} 
<a class="btn btn-warning" href="comida/insertar">AGREGAR COMIDA</a>
{/if}

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Comida</th>
      {if isset($smarty.session.USER_NAME)} 
      <th scope="col">Acciones</th>
      {/if}
    </tr>
  </thead>
  <tbody>
    {foreach from=$comidas item=comida}
    <tr>
      <td scope="row">{$comida->nombre}</td>
      {if isset($smarty.session.USER_NAME)} 
      <td>
        <a class="btn btn-secondary" href="comida/editar/{$comida->id_comida}">editar</a>
        <a class="btn btn-secondary" href="comida/borrar/{$comida->id_comida}">borrar</a>
      </td>
      {/if}
    </tr>
    {/foreach}
  </tbody>
</table>
</body>
{include 'templates/footer.tpl'}
{include 'templates/header.tpl'}
<div>
  <h1 class="text-center">{$primertitulo}</h1>
</div>
<a class="btn btn-warning" href="addComida">AGREGAR COMIDA</a>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Comida</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    {foreach from=$comidas item=comida}
    <tr>
      <td scope="row">{$comida->nombre}</td>
      <td>
        <a class="btn btn-secondary" href="comida/editar/{$comida->id_comida}">editar</a>
        <a class="btn btn-secondary" href="comida/borrar/{$comida->id_comida}">borrar</a>
      </td>
    </tr>
    {/foreach}
  </tbody>
</table>
</body>
{include 'templates/footer.tpl'}
{include 'templates/header.tpl'}

<body class="container">
<div>
<h1 class="text-center">
    {{$primertitulo}}
</h1>
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
        <form action="insertar" method="POST">
            <td><form action="insertar" method="POST"><input name="nombre" class="form-control" placeholder="Ingrese nueva comida"/></td>
            <td><button type="submit" class="btn btn-primary">AGREGAR</button></td>
        </form>
    </tr>
{foreach from=$comidas item=comida}
    <tr>
        <td scope="row"> {$comida->nombre}</td>
        <td><a class="btn btn-light" href="editar/{$comida->id_comida}" method="GET" class="edit">EDITAR<a class="btn btn-secondary" href='<? BorrarComida({$comida->id_comida}) style type= button ?>'>X</a></td>
    </tr>
    {/foreach}
  </tbody>
</table>
</body>

{include 'templates/footer.tpl'}
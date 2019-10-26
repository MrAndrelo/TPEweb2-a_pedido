{include 'templates/header.tpl'}


<body class="container">
<div>
<h1 class="text-center">
    {$primertitulo}
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
{foreach from=$comidas item=comida}
    <tr>
        
            <td scope="row"> 
                {$comida->nombre}
                {* {if $editar}  *}
                {* <input name="nombre" class="form-control"/> *}
                
                {* {/if} *}
            
            </td>
        
         {* {if $editar} *}
            {* <td scope="row"> {$comida->nombre}</td> *}
        {* {/if} *}


        <td>
          <form action="editarComida/{$comida->id_comida}" method="POST">
            
            <input name="nombre" class="form-control" value="{$comida->nombre}"/>
            <button type="submit" class="btn btn-light">EDITAR</button>
          </form>
          <a class="btn btn-secondary" href="borrarComida/{$comida->id_comida}" type="button">X</a>
          
        </td>
    </tr>

    {/foreach}


{* 
<ul>
    {foreach from=$comidas item=comida}
        <li> {$comida->nombre}  
        </li>

        <a href="borrarComida/{$comida->id_comida}">borrar</a>
        {* <a href="editarComida/{$comida->id_comida}">editar</a> 
        <form action="editarComida/{$comida->id_comida}" method="POST">
        <input name="nombre" placeholder="editar Comida"/>
        <input type="submit" value="Enviar"/>
        {* </if $UserAdmin>
        </form> 
*}






        

  </tbody>
</table>
</body>

{include 'templates/footer.tpl'}
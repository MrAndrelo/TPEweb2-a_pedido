{include 'templates/header.tpl'}


<div>
<h1 class="text-center">
   {$segundotitulo}
</h1>
</div>


</div>


<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Variedades</th>
      <th scope="col">Acciones</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
        {* <form action="variedad/insertar" method="POST"> *}
            <td><form action="variedad/insertar" method="POST"><input name="nombre" class="form-control" placeholder="Ingrese nueva variedad"/></td>
            <td><form action="variedad/insertar" method="POST"><input name="ingredientes" class="form-control" placeholder="Ingrese los ingredientes"/></td>
            <td><button type="submit" class="btn btn-primary">AGREGAR</button></td>
        </form>
    </tr>
{foreach from= $variedad item=unidad}
    <tr>
        
            <td scope="row"> 
                {$unidad->nombre}
                {$unidad->ingredientes}
                {* {if $editar}  *}
                {* <input name="nombre" class="form-control" value="{$comida->nombre}"/> *}
                
                {* {/if} *}
            
            </td>
        
         {* {if $editar} *}
            {* <td scope="row"> {$comida->nombre}</td> *}
        {* {/if} *}


        <td><form action="editarVariedad/{$unidad->id_variedad}" method="POST">
        
                <input name="nombre" class="form-control" value="{$unidad->nombre}"/>
                <input name="ingredientes" class="form-control"value="{$unidad->ingredientes}"/>
                <button type="submit" class="btn btn-light">EDITAR</button>
            </form>
        <a class="btn btn-secondary" href="borrarVariedad/{$unidad->id_variedad}" type="button">X</a>
        {* var_dump({$variedad->id_variedad}) *}
        </td>
    </tr>    
    {/foreach}
  </tbody>
</table>
</body>

{include 'templates/footer.tpl'}

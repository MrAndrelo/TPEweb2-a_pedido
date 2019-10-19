<style>
   {include file="./style.css"}
</style>



<h1>
    {{$primertitulo}}
</h1>


<ul>
    {foreach from=$comidas item=comida}
        <li> {$comida->nombre}  
        </li>
        {* <if $UserAdmin> *}
        <a href="borrarComida/{$comida->id_comida}">borrar</a>
        {* <a href="editarComida/{$comida->id_comida}">editar</a> *}
        <form action="editarComida/{$comida->id_comida}" method="POST">
        <input name="nombre" placeholder="editar Comida"/>
        <input type="submit" value="Enviar"/>
        {* </if $UserAdmin> *}
</form>
        
    {/foreach}
</ul>



<form action="comida/insertar" method="POST">
  <input name="nombre" placeholder="Ingrese la comida"/>
  <input type="submit" value="Enviar"/>
</form>

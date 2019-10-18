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
        <button a href='<? BorrarComida({$comida->id_comida}) style type= button ?>'>BORRAR</a></button>
        {* <button <a href="borrar/{$comida->id_comida}" method="DELETE" class="delete">BORRAR</button> *}
        <button <a href="editar/{$comida->id_comida}" method="GET" class="edit">EDITAR</button>
        
    {/foreach}
</ul>



<form action="insertar" method="POST">
  <input name="nombre" placeholder="Ingrese la comida"/>
  <input type="submit" value="Enviar"/>
</form>

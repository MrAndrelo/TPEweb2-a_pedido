<h1>
    {{$primertitulo}}
</h1>


<ul>
    {foreach from=$comidas item=comida}
        <li> {$comida->nombre}  
        </li>
    {/foreach}
</ul>
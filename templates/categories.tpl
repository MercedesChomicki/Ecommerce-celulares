{include file="header.tpl"}
<div class="container">
    <h1>Celulares por Marca</h1>
    <ul class="list-categories">
        {foreach from=$brands item=$brand}
            <li><a href="categoriamodelos/{$brand->id_marca}">{$brand->nombre}</a></li>
            {if $logged}
                <div>
                    <a href="deleteBrand/{$brand->id_marca}" type="button" class="btn btn-danger">Eliminar</a>
                    <a href="updateBrand/{$brand->id_marca}" type="button" class="btn btn-warning">Editar</a>
                </div>
            {/if}
        {/foreach}
    </ul>
    {if $logged}
        <div>
            <h1>{$tituloForm}</h1>
            {include file="form_addCategory.tpl"}
        </div>
    {/if}
</div>
{include file="footer.tpl"}
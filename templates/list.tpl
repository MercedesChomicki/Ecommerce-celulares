{include file="header.tpl"}
{if $logged}
    <ul class="indexHome">
        <li><a href="#list">{$titulo|upper}</a></li>
        <li><a href="#form">{$tituloForm|upper}</a></li>
    </ul>
{/if}
<h1 id="list">{$titulo|upper}</h1>
<div class="container">
    <div class="container-cards">
        {foreach from=$cellphones item=$cellphone}

        <div class="card {if $logged} bigCard {/if}">
                <img src="{$cellphone->Imagen}" class="card-img-top rounded" alt="Celular modelo {$cellphone->modelo}">
                <div class="card-body">
                    <h5 class="card-title">{$cellphone->modelo|truncate:40}</h5>
                    <b class="card-number">${$cellphone->precio}</b>
                    <p class="card-text">{$cellphone->descripcion|truncate:50}</p>
                    <a href="vermas/{$cellphone->id_celular}" class="btn btn-primary">Ver mas</a>
                    {if $logged}
                        <a href="delete/{$cellphone->id_celular}" type="button" class="btn btn-danger">Eliminar</a>
                        <a href="update/{$cellphone->id_celular}" type="button" class="btn btn-warning">Editar</a>
                    {/if}
                </div>
            </div>

        {/foreach}
    </div>
    {if $logged}
        <div>
            <h1 id="form">{$tituloForm}</h1>
            {include file="form_alta.tpl"}
        </div>
    {/if}
</div>
{include file="footer.tpl"}
{include file="header.tpl"}
<h1>{$titulo|upper}</h1>
<div class="container-cards">
{foreach from=$cellphones item=$cellphone}

    <div class="card">
        <img src="{$cellphone->Imagen}" class="card-img-top rounded" alt="Celular modelo {$cellphone->modelo}">
        <div class="card-body">
        <h5 class="card-title">{$cellphone->modelo}</h5>
        <b class="card-number">${$cellphone->precio}</b>
        <p class="card-text">{$cellphone->descripcion|truncate:100}</p>
        <a href="vermas/{$cellphone->id_celular}" class="btn btn-primary">Ver mas</a>
        </div>
    </div>

{/foreach}
</div>
{include file="footer.tpl"}
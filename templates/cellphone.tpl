{include file="header.tpl"}
<div>
    <h1>{$cellphone->modelo}</h1>
    <div class="task-cellphone">
        <img src='{$cellphone->Imagen}' class="task-cellphone__img">
        <div class="task-cellphone__byp">
            <b>${$cellphone->precio}</b>
            <p>{$cellphone->descripcion}</p>
        </div>
    </div>
</div>
{include file="footer.tpl"}
{include 'templates/header.tpl'}

<div class="container">
<form action="confirmUpdateBrand/{$brand->id_marca}" method="POST" class="my-4">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <label>Nombre</label>
                <input name="name" type="text" class="form-control" value="{$brand->nombre}" required />
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form>
</div>

{include 'templates/footer.tpl'}







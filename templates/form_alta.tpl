<form action="add" method="POST" enctype="multipart/form-data" class="my-4">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <label>Modelo</label>
                <input name="title" type="text" class="form-control">
            </div>
        </div>

        <div class="col-3">
            <div class="form-group">
                <label>Precio</label>
                <input name="price" type="number" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <label>Descripcion</label>
            <textarea name="description" class="form-control" rows="3"></textarea>
        </div>

        <div class="col-3">
            <div class="form-group">
                <label>Marca</label>
                <select name="id_marca" class="form-control">
                    <option selected>Selecciona una Marca</option>
                    <option value="1">Samsung</option>
                    <option value="2">Apple</option>
                    <option value="3">Motorola</option>
                    <option value="4">Xiaomi</option>
                    <option value="5">LG</option>
                    <option value="6">Huawei</option>
                </select>
            </div>
        </div>
        <div class="col-3">
            <div class="form-group">
                <label>Imagen</label>
                <input name="img" type="file" class="form-control" id="imageToUpload" required/>
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form>
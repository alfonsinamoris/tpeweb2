{include file="header.tpl"}
    <form method='POST' action="editar/{$property->id_propiedad}">
        <input class="form-control" placeholder=direccion name="direccion">
            <select class="form-select" name="tipo" placeholder="tipo">
                <option selected>tipo</option>
                <option value="3" name="tipo">casa</option>
                <option value="4"name="tipo">departamento</option>
                <option value="5"name="tipo">lote</option>
                <option value="6"name="tipo">monoambiente</option>
            </select>
        <input class="form-control" placeholder=habitaciones type="number" name="habitaciones">
        <input class="form-control" placeholder=precio type="number" name="precio">
        <select class="form-select" name="alquiler_venta" placeholder="alquiler/venta">
                <option selected>alquiler/venta</option>
                <option value="alquiler" name="alquiler_venta">alquiler</option>
                <option value="venta" name="alquiler_venta">venta</option>
        </select>
        <button class="btn btn-outline-secondary" type="submit" href="editar/{$property->id_propiedad}">editar</button>
    </form>
{include file="templates/footer.tpl"}
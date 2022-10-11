{include file="header.tpl"}
    <form method='POST' action="editar">
        <input class="form-control" placeholder=direccion name="direccion">
            <select class="form-select" name="tipo" placeholder="tipo">
                <option selected>tipo</option>
                <option value="casa" name="tipo">casa</option>
                <option value="departamento"name="tipo">departamento</option>
                <option value="lote"name="tipo">lote</option>
                <option value="monoambiente"name="tipo">monoambiente</option>
            </select>
        <input class="form-control" placeholder=habitaciones type="number" name="habitaciones">
        <input class="form-control" placeholder=precio type="number" name="precio">
        <select class="form-select" name="alquiler_venta" placeholder="alquiler/venta">
                <option selected>alquiler/venta</option>
                <option value="alquiler" name="alquiler_venta">alquiler</option>
                <option value="venta" name="alquiler_venta">venta</option>
        </select>
        <button class="btn btn-outline-secondary" type="submit" href="editar/{$property->id}">editar</button>
    </form>
{include file="templates/footer.tpl"}
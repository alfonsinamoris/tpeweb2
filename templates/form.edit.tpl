{include file="header.tpl"}
    <form method='POST' action="editar/{$property->id_propiedad}">
    {*<input type="hidden" value="{$property->id_propiedad}" name="id">*}
        <input class="form-control" placeholder=direccion name="direccion" value="{$property->direccion}">
        <select class="form-select" name="tipo" placeholder="tipo" value="{$property->tipo}">
        <option >{$property->tipo}</option>
        </select>
        <input class="form-control" placeholder=habitaciones type="number" name="habitaciones" value="{$property->habitaciones}">
        <input class="form-control" placeholder=precio type="number" name="precio" value="{$property->precio}">
        <select class="form-select" name="alquiler_venta" placeholder="alquiler/venta" value="{$property->alquiler_venta}">
                <option value="alquiler" name="alquiler_venta">alquiler</option>
                <option value="venta" name="alquiler_venta">venta</option>
        </select>
        <button class="btn btn-outline-secondary" type="submit">editar</button>
    </form>
{include file="templates/footer.tpl"}
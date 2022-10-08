{include file="header.tpl"}

<select class="form-select" name="type_option">
    {foreach from=$tipos item=$tipo}
        <option>{$tipo->tipo_propiedad}</option>
    {/foreach}    
</select>

{if isset($smarty.session.USER_EMAIL)}
    <form method='POST' action="agregar">
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
        <button class="btn btn-outline-secondary" type="submit" href="agregar/{$property->id}">enviar</button>
    </form>  
{/if}

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>Direccion</th>
                <th>Categoria</th>
                <th>Habitaciones</th>
                <th>Precio</th>
                <th>Alquiler/Venta</th>
            </tr>
        </thead>
        {foreach from=$properties item=$property}
            <tbody class="table-group-divider">
                <tr>
                    <td><a href="detalle/{$property->id_propiedad}"> {$property->direccion} </td>
                    <td> {$property->tipo} </td>
                    <td> {$property->habitaciones} </td>
                    <td> {$property->precio} </td>
                    <td> {$property->alquiler_venta} </td>
                    {if isset($smarty.session.USER_EMAIL)}
                    <td> <a class="btn btn-outline-danger" type="button" href="borrar/{$property->id_propiedad}"> BORRAR </a>
                    <td> <a class="btn btn-outline-secondary" type="button" href="editar/{$property->id_propiedad}">EDITAR </td>
                    {/if}
                </tr>
            </tbody>
        {{/foreach}}
    </table>

</div>
{include file="templates/footer.tpl"}
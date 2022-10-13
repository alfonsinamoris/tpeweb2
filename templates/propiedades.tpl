{include file="header.tpl"}

<div>
    {if isset($smarty.session.USER_EMAIL)}
        <p class="fw-bold"> Listado de Categorias: </p>
        <div>
            <form method='POST' action="agregarcat">
                <input class="form-control" placeholder="agregar categoria" name="tipo">
                <button class="btn btn-outline-secondary" type="submit" href="agregarcat/{$tipo->tipo}">Agregar</button>
            </form>
        </div>
        <table class="table">  
                {foreach from=$tipos item=tipo}
                <tr>
                <td value="{$tipo->id_tipo}">{$tipo->tipo}</td>
                <td> <a class="btn btn-outline-secondary" type="button" href="formeditarcat/{$tipo->id_tipo}">EDITAR </td>
                <td> <a class="btn btn-outline-danger" type="button" href="borrarcat/{$tipo->id_tipo}"> BORRAR </a>
                </tr>
                {{/foreach}} 
        </table>   
    {/if}
</div>   

<div>
    <p class="fw-bold">Filtrar por:</p>
    <select class="form-select" name="type_option">
        <option selected>ver todas</option>
        {foreach from=$tipos item=tipo}
            <option value="{$tipo->id_tipo}">{$tipo->tipo}</option>
        {/foreach}    
    </select>
</div>

<div>
    {if isset($smarty.session.USER_EMAIL)}
        <p class="fw-bold">Agregar Propiedad:</p>
        <form method='POST' action="agregar">
            <input class="form-control" placeholder=direccion name="direccion">
                <select class="form-select" name="tipo" placeholder="tipo">
                    <option selected>tipo</option>
                    {foreach from=$tipos item=tipo}
                     <option value="{$tipo->id_tipo}">{$tipo->tipo}</option>
                    {/foreach}
                </select>
            <input class="form-control" placeholder=habitaciones type="number" name="habitaciones">
            <input class="form-control" placeholder=precio type="number" name="precio">
            <select class="form-select" name="alquiler_venta" placeholder="alquiler/venta">
                    <option selected>alquiler/venta</option>
                    {foreach from=$properties item=$property}
                        <option>{$property->alquiler_venta}</option>
                    {/foreach}    
            </select>
            <button class="btn btn-outline-secondary" type="submit">Agregar</button>
        </form>  
    {/if}
</div>

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
                    <td> {$tipo->tipo} </td>
                    <td> {$property->habitaciones} </td>
                    <td> {$property->precio} </td>
                    <td> {$property->alquiler_venta} </td>
                    {if isset($smarty.session.USER_EMAIL)}
                    <td> <a class="btn btn-outline-danger" type="button" href="borrar/{$property->id_propiedad}"> BORRAR </a>
                    <td> <a class="btn btn-outline-secondary" type="button" href="formeditar/{$property->id_propiedad}">EDITAR </td>
                    {/if}
                </tr>
            </tbody>
        {{/foreach}}
    </table>

</div>
{include file="templates/footer.tpl"}
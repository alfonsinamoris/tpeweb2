{include file="header.tpl"}

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
        {foreach from=$properties item=property}
            <tbody class="table-group-divider">
                <tr>
                    <td> {$property->direccion} </td>
                    <td> {$property->tipo} </td>
                    <td> {$property->habitaciones} </td>
                    <td> {$property->precio} </td>
                    <td> {$property->alquiler_venta} </td>
                </tr>
            </tbody>
        {{/foreach}}
    </table>
</div>

{include file="templates/footer.tpl"}
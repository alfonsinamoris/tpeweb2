{include file="header.tpl"}
<form method='POST' id='filtro'>
    <input placeholder='buscar por categoria'>
</form>

<!-- opinion personal, si esta vista de propiedades es 
para el admin (para borrar o editar las propiedades q tenes publicadas) ta bien,
pero si queres hacer para q sea el home de la pagina, no lo veo mucho con una tabla
(este mismo template lo podes copiar cuando hagas el /admin y ahi seria un template tipo adminProperties.tpl o algo asi)
 -->

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
                    <td><a href="detalle/{$property->id}"> {$property->direccion} </td>
                    <td> {$property->tipo} </td>
                    <td> {$property->habitaciones} </td>
                    <td> {$property->precio} </td>
                    <td> {$property->alquiler_venta} </td>
                    <td> <button id="borrar">BORRAR </td>
                    <td> <button id="editar">EDITAR </td>
                </tr>
            </tbody>
        {{/foreach}}
    </table>

</div>
{include file="header.tpl"}
<form method='POST' id='filtro'>
    <input placeholder='buscar por categoria'>
</form>

<form method='POST' action="agregar">
  <input placeholder=direccion name="direccion">

  <select class="form-select" aria-label="Default select example" name="tipo">
    <option selected>elija tipo </option>
    <option value="casa" name="tipo">casa</option>
    <option value="departamento"name="tipo">departamento</option>
    <option value="lote"name="tipo">lote</option>
    <option value="monoambiente"name="tipo">monoambiente</option>
  </select>

  <input placeholder=habitaciones type="number" name="habitaciones">

  <input placeholder=precio type="number" name="precio">

  <select class="form-select" aria-label="Default select example" name="alquiler_venta">
        <option selected>alquiler/venta</option>
        <option value="alquiler" name="alquiler_venta">alquiler</option>
        <option value="venta" name="alquiler_venta">venta</option>
  </select>
   <button type="submit">enviar</button>
</form>  

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
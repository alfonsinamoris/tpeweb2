<?php
/* Smarty version 4.2.1, created on 2022-10-05 14:19:00
  from '/Applications/XAMPP/xamppfiles/htdocs/web2/tpe/templates/propiedades.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633d7634267a84_24921667',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71fc70bd01a6818611b50da7d0239d0e86c470a3' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/web2/tpe/templates/propiedades.tpl',
      1 => 1664972335,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_633d7634267a84_24921667 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['properties']->value, 'property');
$_smarty_tpl->tpl_vars['property']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['property']->value) {
$_smarty_tpl->tpl_vars['property']->do_else = false;
?>
            <tbody class="table-group-divider">
                <tr>
                    <td><a href="detalle/<?php echo $_smarty_tpl->tpl_vars['property']->value->id_propiedad;?>
"> <?php echo $_smarty_tpl->tpl_vars['property']->value->direccion;?>
 </td>
                    <td> <?php echo $_smarty_tpl->tpl_vars['property']->value->tipo;?>
 </td>
                    <td> <?php echo $_smarty_tpl->tpl_vars['property']->value->habitaciones;?>
 </td>
                    <td> <?php echo $_smarty_tpl->tpl_vars['property']->value->precio;?>
 </td>
                    <td> <?php echo $_smarty_tpl->tpl_vars['property']->value->alquiler_venta;?>
 </td>
                    <td> <a class="btn btn-outline-danger" type="button" href="delete/<?php echo $_smarty_tpl->tpl_vars['property']->value->id_propiedad;?>
"> BORRAR </a>
                    <td> <button id="editar">EDITAR </td>
                </tr>
            </tbody>
        <?php ob_start();
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

    </table>

</div><?php }
}

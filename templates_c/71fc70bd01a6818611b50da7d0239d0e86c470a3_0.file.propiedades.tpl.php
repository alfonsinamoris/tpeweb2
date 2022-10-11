<?php
/* Smarty version 4.2.1, created on 2022-10-11 23:38:05
  from '/Applications/XAMPP/xamppfiles/htdocs/web2/tpe/templates/propiedades.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6345e23d182764_98436432',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71fc70bd01a6818611b50da7d0239d0e86c470a3' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/web2/tpe/templates/propiedades.tpl',
      1 => 1665524282,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6345e23d182764_98436432 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<table>
    <tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tipos']->value, 'tipo');
$_smarty_tpl->tpl_vars['tipo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tipo']->value) {
$_smarty_tpl->tpl_vars['tipo']->do_else = false;
?>
          <td><?php echo $_smarty_tpl->tpl_vars['tipo']->value->tipo_propiedad;?>
</td>
        <?php ob_start();
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

    </tr>
</table>        

<select class="form-select" name="type_option">
    <option selected>ver todas </option>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tipos']->value, 'tipo');
$_smarty_tpl->tpl_vars['tipo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tipo']->value) {
$_smarty_tpl->tpl_vars['tipo']->do_else = false;
?>
        <option><?php echo $_smarty_tpl->tpl_vars['tipo']->value->tipo_propiedad;?>
</option>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>    
</select>

<?php if ((isset($_SESSION['USER_EMAIL']))) {?>
    <form method='POST' action="agregar">
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
        <button class="btn btn-outline-secondary" type="submit" href="agregar/<?php echo $_smarty_tpl->tpl_vars['property']->value->id;?>
">enviar</button>
    </form>  
<?php }?>

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
                    <?php if ((isset($_SESSION['USER_EMAIL']))) {?>
                    <td> <a class="btn btn-outline-danger" type="button" href="borrar/<?php echo $_smarty_tpl->tpl_vars['property']->value->id_propiedad;?>
"> BORRAR </a>
                    <td> <a class="btn btn-outline-secondary" type="button" href="formeditar/<?php echo $_smarty_tpl->tpl_vars['property']->value->id_propiedad;?>
">EDITAR </td>
                    <?php }?>
                </tr>
            </tbody>
        <?php ob_start();
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>

    </table>

</div>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

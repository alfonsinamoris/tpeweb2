<?php
/* Smarty version 4.2.1, created on 2022-10-14 21:49:23
  from '/Applications/XAMPP/xamppfiles/htdocs/web2/tpe/templates/form.edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6349bd43521872_78728505',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04fb49d6eeb816a5715e20b9a9d89a92724b250a' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/web2/tpe/templates/form.edit.tpl',
      1 => 1665776688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6349bd43521872_78728505 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <form method='POST' action="editar/<?php echo $_smarty_tpl->tpl_vars['id_propiedad']->value;?>
">
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
        <button class="btn btn-outline-secondary" type="submit">editar</button>
    </form>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

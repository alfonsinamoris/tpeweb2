<?php
/* Smarty version 4.2.1, created on 2022-10-17 21:02:48
  from '/Applications/XAMPP/xamppfiles/htdocs/web2/tpe/templates/form.edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634da6d8c2ace7_38727039',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04fb49d6eeb816a5715e20b9a9d89a92724b250a' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/web2/tpe/templates/form.edit.tpl',
      1 => 1666033363,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_634da6d8c2ace7_38727039 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <form method='POST' action="editar">
        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['property']->value->id_propiedad;?>
" name="id">
        <input class="form-control" placeholder=direccion name="direccion" value="<?php echo $_smarty_tpl->tpl_vars['property']->value->direccion;?>
">
        <select class="form-select" name="tipo" placeholder="tipo" value="<?php echo $_smarty_tpl->tpl_vars['property']->value->tipo;?>
">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tipos']->value, 'tipo');
$_smarty_tpl->tpl_vars['tipo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tipo']->value) {
$_smarty_tpl->tpl_vars['tipo']->do_else = false;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['tipo']->value->id_tipo;?>
"><?php echo $_smarty_tpl->tpl_vars['tipo']->value->tipo;?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <input class="form-control" placeholder=habitaciones type="number" name="habitaciones" value="<?php echo $_smarty_tpl->tpl_vars['property']->value->habitaciones;?>
">
        <input class="form-control" placeholder=precio type="number" name="precio" value="<?php echo $_smarty_tpl->tpl_vars['property']->value->precio;?>
">
        <select class="form-select" name="alquiler_venta" placeholder="alquiler/venta" value="<?php echo $_smarty_tpl->tpl_vars['property']->value->alquiler_venta;?>
">
                <option value="alquiler" name="alquiler_venta">alquiler</option>
                <option value="venta" name="alquiler_venta">venta</option>
        </select>
        <button class="btn btn-outline-secondary" type="submit">editar</button>
    </form>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

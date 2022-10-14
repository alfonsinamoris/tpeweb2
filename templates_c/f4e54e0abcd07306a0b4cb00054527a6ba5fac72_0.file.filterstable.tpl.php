<?php
/* Smarty version 4.2.1, created on 2022-10-14 21:20:09
  from '/Applications/XAMPP/xamppfiles/htdocs/web2/tpe/templates/filterstable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6349b669ece433_81298396',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4e54e0abcd07306a0b4cb00054527a6ba5fac72' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/web2/tpe/templates/filterstable.tpl',
      1 => 1665775206,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6349b669ece433_81298396 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
                    <td> <?php echo $_smarty_tpl->tpl_vars['property']->value->direccion;?>
 </td>
                    <td> <?php echo $_smarty_tpl->tpl_vars['property']->value->tipo;?>
 </td>
                    <td> <?php echo $_smarty_tpl->tpl_vars['property']->value->habitaciones;?>
 </td>
                    <td> <?php echo $_smarty_tpl->tpl_vars['property']->value->precio;?>
 </td>
                    <td> <?php echo $_smarty_tpl->tpl_vars['property']->value->alquiler_venta;?>
 </td>
                </tr>
            </tbody>
        <?php ob_start();
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

    </table>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

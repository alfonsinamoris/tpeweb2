<?php
/* Smarty version 4.2.1, created on 2022-10-11 02:03:42
  from '/Applications/XAMPP/xamppfiles/htdocs/web2/tpe/templates/detail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6344b2dea8a075_76296479',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ffd72abc8c241f50bf8b26ddb85352ca40136f86' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/web2/tpe/templates/detail.tpl',
      1 => 1664972711,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6344b2dea8a075_76296479 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1>Direccion: <?php echo $_smarty_tpl->tpl_vars['property']->value->direccion;?>
</h1>
<h2>Tipo: <?php echo $_smarty_tpl->tpl_vars['property']->value->tipo;?>
</h2>
<h2>Habitaciones: <?php echo $_smarty_tpl->tpl_vars['property']->value->habitaciones;?>
</h2>
<h2>Precio: <?php echo $_smarty_tpl->tpl_vars['property']->value->precio;?>
</h2>
<h2>Alquiler/Venta: <?php echo $_smarty_tpl->tpl_vars['property']->value->alquiler_venta;?>
</h2>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

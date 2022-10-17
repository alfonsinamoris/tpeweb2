<?php
/* Smarty version 4.2.1, created on 2022-10-17 16:19:39
  from '/Applications/XAMPP/xamppfiles/htdocs/web2/tpe/templates/form.edit.cat.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634d647b3a2c27_52462931',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53100603388ddb457faedad69260aac72de283aa' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/web2/tpe/templates/form.edit.cat.tpl',
      1 => 1666016372,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_634d647b3a2c27_52462931 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
     <form method='POST' action="editarcat/<?php echo $_smarty_tpl->tpl_vars['tipo']->value->id_tipo;?>
">
         <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['tipo']->value->id_tipo;?>
">
         <input class="form-control" placeholder="editar categoria" name="tipo" value="<?php echo $_smarty_tpl->tpl_vars['tipos']->value->tipos;?>
">
         <button class="btn btn-outline-secondary" type="submit">editar</button>
     </form>
 <?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

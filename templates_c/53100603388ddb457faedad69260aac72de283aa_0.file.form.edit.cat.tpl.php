<?php
/* Smarty version 4.2.1, created on 2022-10-14 15:16:21
  from '/Applications/XAMPP/xamppfiles/htdocs/web2/tpe/templates/form.edit.cat.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6349612503e762_02344922',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53100603388ddb457faedad69260aac72de283aa' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/web2/tpe/templates/form.edit.cat.tpl',
      1 => 1665673954,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6349612503e762_02344922 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <form method='POST' action="editarcat">
        <input class="form-control" placeholder="editar categoria" name="tipo">
        <button class="btn btn-outline-secondary" type="submit">editar</button>
    </form>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

<?php
/* Smarty version 4.2.1, created on 2022-10-08 00:18:14
  from '/Applications/XAMPP/xamppfiles/htdocs/web2/tpe/templates/administrador.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6340a5a6e443d3_79987962',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db056488981be26f4ef0881368278ba2e1d27961' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/web2/tpe/templates/administrador.tpl',
      1 => 1665181092,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6340a5a6e443d3_79987962 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if (!(isset($_SESSION['USER_ID']))) {?>
   <form method="POST" action="validate">
        <div class="mb-3">
            <label for="email" class="form-label">Email </label>
            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password">
        </div>
        <button type="submit" class="btn btn-outline-secondary">INGRESAR</button>
        <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
            <div class= "alert alert-danger mt-3">
                <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

            </div>
        <?php }?>    
    </form>
<?php }?>


<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

<?php
/* Smarty version 4.2.1, created on 2022-10-11 01:55:59
  from '/Applications/XAMPP/xamppfiles/htdocs/web2/tpe/templates/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6344b10f6d2718_70299776',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59b8e08cc9147a1269f55668cb384a2d41d48910' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/web2/tpe/templates/header.tpl',
      1 => 1665181267,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6344b10f6d2718_70299776 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <base href="<?php echo BASE_URL;?>
" /> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Inmobiliaria Alfon</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand">INMOBILIARIA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="propiedades">PROPIEDADES</a>
                    </li>
                    <?php if (!(isset($_SESSION['USER_EMAIL']))) {?>
                    <li class="nav-item">
                        <a class="nav-link active" href="login">login</a>
                    </li>
                    <?php } else { ?>
                        <li class="nav-item">
                        <a class="nav-link active" href="logout">logout(<?php echo $_SESSION['USER_EMAIL'];?>
)</a>
                    </li>
                    <?php }?>

            </div>
        </div>
    </nav>
<?php }
}

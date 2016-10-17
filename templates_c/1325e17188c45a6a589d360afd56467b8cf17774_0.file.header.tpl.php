<?php
/* Smarty version 3.1.30, created on 2016-10-16 07:01:09
  from "C:\xampp\htdocs\web22\templates\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58030995026d47_16992687',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1325e17188c45a6a589d360afd56467b8cf17774' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web22\\templates\\header.tpl',
      1 => 1476594067,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58030995026d47_16992687 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>


<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Prisma Instrumentos</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/master.css" rel="stylesheet">
    <link rel="Shortcut Icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/js/bootstrap-select.min.js"><?php echo '</script'; ?>
>

    <!-- (Optional) Latest compiled and minified JavaScript translation files -->
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/js/i18n/defaults-*.min.js"><?php echo '</script'; ?>
>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
  </head>
  <body>
    <div class="portada">
      <img class="portada"src="images\portada.jpg" alt="portada" />
    </div>
<div class="row">
    <div class="navi" class="col-md-8 col-md-offset-2">
      <nav class="navbar navbar-inverse" class="col-md-8 col-md-offset-2">
    <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header" class="col-md-8 col-md-offset-2">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand">
            Prisma Instrumentos
            <span class="glyphicon glyphicon-music" aria-hidden="true">
            </span>
          </a>
        </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" class="col-md-8 col-md-offset-2">
        <ul class="nav navbar-nav">
          <li class="navbuton"><a href="templates/historia.tpl" id="llamadaHist" class="botones"><span class="glyphicon glyphicon-info-sign"></span>Historia de la empresa <span class="sr-only">(current)</span></a></li>
          <li class="navbuton"><a href="templates/local.tpl" id="llamadaLocal"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Como llegar</a></li>
          <li class="navbuton"><a href="templates/instrumentos.tpl" id="llamadaInstGuitarra" ><span class="glyphicon glyphicon-music"></span>Instrumentos </a></li>
          <li class="navbuton"><a href="#contacto"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>Contacto</a></li>
          <li class="navbuton"><a href="templates/panel.tpl" id="llamadaAdmin"><span class="navbar-toggle collapsed" aria-hidden="true"  ></span>Panel</a></li>
      

          </button>
        </ul>
      </div><!-- /.navbar-collapse -->
      </nav>


    </div>
    </div>
<?php }
}

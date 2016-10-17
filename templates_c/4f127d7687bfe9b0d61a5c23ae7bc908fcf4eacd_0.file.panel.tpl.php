<?php
/* Smarty version 3.1.30, created on 2016-10-16 07:07:02
  from "C:\xampp\htdocs\web22\templates\panel.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58030af6cb26a9_98412460',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f127d7687bfe9b0d61a5c23ae7bc908fcf4eacd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web22\\templates\\panel.tpl',
      1 => 1476594418,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:lista_prod.tpl' => 1,
    'file:templates/lista_cat.tpl' => 1,
  ),
),false)) {
function content_58030af6cb26a9_98412460 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>


<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Lista de productos</h1>



    <container>
      <h1>Agregar Instrumento</h1>
        <form class="" action="index.php?action=agregarProducto" method="POST">
          Categoria
      <select name="categoria" title="categoria">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'cat');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['cat']->value['categoria'];?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value['categoria'];?>
</option>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

      </select>


          <input type="text" name="marca" value="" placeholder="marc">
          <input type="text" name="modelo" value="" placeholder="mod">
          <input type="text" name="precio" value="" placeholder="pre">

          <input type="submit" name="Agregar" value="Agregar">

        </form>
      </div>
    </container>

    <container>
      <h1>Agregar categoria</h1>
        <form class="" action="index.php?action=agregaCat" method="POST">

          <input type="text" name="categoriaNueva" value="" placeholder="nueva categoria">
          <input type="submit" name="Agregar" value="Agregar">
        </form>


      </div>
    </container>
    <container>
      <h1>editar categoria</h1>
        <form class="" action="index.php?action=editarCategoria" method="POST">

            <label for="id">nro cat</label>
            <input type="text" name="id" value="">

            <label for="categoriaEdit">categoria</label>
            <input type="text" name="categoriaEdit" value="">

            <input type="submit" name="editar" value="editar">
          </form>


      </div>
    </container>
    <container>
      <h1>editar producto</h1>
        <form class="" action="index.php?action=editarProducto" method="POST">
          <label for="">nro prod</label>
          <input type="text" name="modCategoria" value="">

          <select name="modCategoria" title="categoria">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'cat');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
?>
              <option value="<?php echo $_smarty_tpl->tpl_vars['cat']->value['categoria'];?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value['categoria'];?>
</option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


          </select>

          <label for="">marca</label>
          <input type="text" name="modMarca" value="">

          <label for="">modelo</label>
          <input type="text" name="modModelo" value="">

          <label for="">precio</label>
          <input type="text" name="modPrecio" value="">

          <input type="submit" name="editar" value="editar">
          </form>


      </div>
    </container>
    <h1>LISTADO</h1>
    <h2>PROD</h2>

      <?php $_smarty_tpl->_subTemplateRender("file:lista_prod.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <h2>CAT</h2>
    <div class="">
      <?php $_smarty_tpl->_subTemplateRender("file:templates/lista_cat.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    </div>
  
  </body>

</html>
<?php }
}

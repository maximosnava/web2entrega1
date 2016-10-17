<?php
/* Smarty version 3.1.30, created on 2016-10-16 06:33:02
  from "C:\xampp\htdocs\web22\templates\lista_cat.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_580302fe947bb8_57435359',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30ffe176024559658d27dfe3330d90cc09505ed6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web22\\templates\\lista_cat.tpl',
      1 => 1476567036,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_580302fe947bb8_57435359 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="">
  <tfoot>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'cat');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
?>

        <tr><?php echo $_smarty_tpl->tpl_vars['cat']->value['categoria'];?>
</tr>
        <tr><?php echo $_smarty_tpl->tpl_vars['cat']->value['id_categoria'];?>
</tr>
        <tr><a href="index.php?action=eliminarCategoria&id=<?php echo $_smarty_tpl->tpl_vars['cat']->value['id_categoria'];?>
">eliminar</a></tr>

  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  </tfoot>

</div>
<?php }
}

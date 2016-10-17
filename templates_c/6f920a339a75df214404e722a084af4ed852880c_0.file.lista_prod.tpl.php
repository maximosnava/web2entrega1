<?php
/* Smarty version 3.1.30, created on 2016-10-16 06:33:02
  from "C:\xampp\htdocs\web22\templates\lista_prod.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_580302fe8dc282_91839508',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f920a339a75df214404e722a084af4ed852880c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web22\\templates\\lista_prod.tpl',
      1 => 1476567036,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_580302fe8dc282_91839508 (Smarty_Internal_Template $_smarty_tpl) {
?>

    <table>
        <thead>
          <th>Categoria</th>
          <th>Marca</th>
          <th>Modelo</th>
          <th>Precio</th>
          <th>Eliminar Producto</th>
        </thead>
    <tfoot>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
?>
      <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['producto']->value['id_producto'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['producto']->value['categoria'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['producto']->value['marca'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['producto']->value['modelo'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['producto']->value['precio'];?>
</td>
        <td><a href="index.php?action=eliminarProducto&id=<?php echo $_smarty_tpl->tpl_vars['producto']->value['id_producto'];?>
">eliminar</a></td>
      </tr>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </tfoot>
    </table>
<?php }
}

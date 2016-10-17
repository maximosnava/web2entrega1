
    <table>
        <thead>
          <th>Categoria</th>
          <th>Marca</th>
          <th>Modelo</th>
          <th>Precio</th>
          <th>Eliminar Producto</th>
        </thead>
    <tfoot>
      {foreach from=$productos item=$producto}
      <tr>
        <td>{$producto.id_producto}</td>
        <td>{$producto.categoria}</td>
        <td>{$producto.marca}</td>
        <td>{$producto.modelo}</td>
        <td>{$producto.precio}</td>
        <td><a href="index.php?action=eliminarProducto&id={$producto.id_producto}">eliminar</a></td>
      </tr>
      {/foreach}
    </tfoot>
    </table>

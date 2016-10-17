<div class="">
  <tfoot>
    {foreach from=$categorias item=$cat}

        <tr>{$cat.categoria}</tr>
        <tr>{$cat.id_categoria}</tr>
        <tr><a href="index.php?action=eliminarCategoria&id={$cat.id_categoria}">eliminar</a></tr>

  {/foreach}
  </tfoot>

</div>

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
        {foreach $categorias item=$cat}
          <option value="{$cat.categoria}">{$cat.categoria}</option>
        {/foreach}
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
            {foreach $categorias item=$cat}
              <option value="{$cat.categoria}">{$cat.categoria}</option>
            {/foreach}

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

      {include file='lista_prod.tpl'}

    <h2>CAT</h2>
    <div class="">
      {include file='templates/lista_cat.tpl'}

    </div>
  
  </body>

</html>

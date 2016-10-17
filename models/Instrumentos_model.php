<?php
class instrumentos_model
{
  private $db;
  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;dbname=instrumento;charset=utf8', 'root', '');
  }
////////////////////////PRODUCTOS//////////////////////////////////////
  function agregarProducto($instrumento){
     $sentencia = $this->db->prepare("INSERT INTO productos(categoria,marca,modelo,precio)"."VALUES(:categoria, :marca, :modelo, :precio)");
     $sentencia->execute( array(":categoria"=>$instrumento['categoria'] ,":marca"=>$instrumento['marca'],":modelo"=>$instrumento['modelo'],":precio"=>$instrumento['precio']));
   }
  function getProductos(){
      $sentencia= $this->db->prepare( "select * from  productos");
      $sentencia->execute();
      $productos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
      return $productos;
  }
  function eliminarProducto($id){
    $sentencia = $this->db->prepare("delete from productos where id_producto=?");
    $sentencia->execute((array($id['id'])));
    $s=$id['id'];
    echo ($s);
  }
  function editarProducto($info){
        $sentencia = $this->db->prepare("update categorias (categoria,marca,modelo,precio) where id_producto=?"."VALUES(:categoria, :marca, :modelo, :precio)");
        $sentencia->execute((array($info['categoria'],$info['marca'],$info['modelo'],$info['precio'])));
  }
////////////////////////CATEGORIAS//////////////////////////////////////
  function agregaCat($categoria){
    $sentencia = $this->db->prepare("INSERT INTO categorias(categoria)"."VALUES(:categoria)");
    $sentencia->execute( array(":categoria"=>$categoria['categoria']));
  }
  function getCategorias(){
      $sentencia= $this->db->prepare( "select * from  categorias");
      $sentencia->execute();
      $categorias=$sentencia->fetchAll(PDO::FETCH_ASSOC);
      return $categorias;
  }
  function eliminarcategoria($id){
    $sentencia = $this->db->prepare("delete from categorias where id_categoria=?");
    $sentencia->execute((array($id['id'])));
    $s=$id['id'];
    echo ($s);
  }
  function editarCategoria($info){
        $sentencia = $this->db->prepare("update categorias set categoria=? where id_categoria=?");
        $sentencia->execute((array($info['categoria'],$info['id'])));
  }
}

?>

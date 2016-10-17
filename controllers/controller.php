<?php
require ("views/inst_view.php");
require ("models/instrumentos_model.php");
require ("models/contactoModel.php");


class controller
{
  private $vista;
  private $model;
  private $contactoModel;
  function __construct()
  {
    $this->vista= new inst_view();
    $this->model= new instrumentos_model();
    $this->contactoModel= new contactoModel();
  }
  function iniciar(){

    $this->vista->iniciar();

}
  function iniciar_ADM(){
    $productos= $this->model->getProductos();
    $categorias= $this->model->getCategorias();
    $this->vista->iniciar_ADM($productos,$categorias);

}
///////////////////////////////PRODUCTOS//////////////////////////////////////
  function agregarProducto(){
    if ((!empty($_POST['categoria']))&&(!empty($_POST['marca']))&&(!empty($_POST['modelo']))&&(!empty($_POST['precio']))) {
      $categoria= $_POST['categoria'];
      $marca= $_POST['marca'];
      $modelo= $_POST['modelo'];
      $precio= $_POST['precio'];
      $instrumento= array('categoria'=>$categoria,'marca'=>$marca ,'modelo'=>$modelo,'precio'=>$precio);
      $this->model->agregarProducto($instrumento);
      $this->iniciar_ADM();}
      else{
      echo"error";
            }
  }

    function mostrarProductos(){
      $productos= $this->model->getProductos();

      $this->vista->mostrarProductos($productos);

    }

    function eliminarProducto(){
        //$ID=$_REQUEST['id'];
        if(!empty($_REQUEST['id'])){
          $id = array('id' => $_REQUEST['id']);
          $this->model->eliminarProducto($id);
          $this->iniciar_ADM();
        }

    }
    function editarProducto(){
        if((!empty($_REQUEST['modCategoria']))&&(!empty($_POST['modMarca']))&&(!empty($_POST['modModelo']))&&(!empty($_POST['modPrecio']))){
          $edit = array('id' => $_REQUEST['id'],'categoria' => $_REQUEST['modCategoria'],'marca' => $_REQUEST['modMarca'],'modelo' => $_REQUEST['modModelo'],'precio' => $_REQUEST['modPrecio']);
          $this->model->editarProducto($edit);
          $this->iniciar_ADM();

        }else{
          echo "error";
        }

    }
////////////////////////CATEGORIAS//////////////////////////////////////
    function agregaCat(){
      if (!empty($_POST['categoriaNueva'])) {
        $categoria= $_POST['categoriaNueva'];
        $instrumento= array('categoria'=>$categoria);
        $this->model->agregaCat($instrumento);
        
      }else {
        echo "error";
      }


    }
    function mostrarCategorias(){
      $categorias= $this->model->getCategorias();
      $this->vista-> mostrarCat($categorias);

    }

    function eliminarCategoria(){
        if(!empty($_REQUEST['id'])){
          $id = array('id' => $_REQUEST['id']);
          $this->model->eliminarCategoria($id);
          $this->iniciar_ADM();
        }

    }

    function editarCategoria(){
        if((!empty($_REQUEST['categoriaEdit']))&&(!empty($_REQUEST['id']))){
          $edit = array('id' => $_REQUEST['id'],'categoria' => $_REQUEST['categoriaEdit']);
          $this->model->editarCategoria($edit);
          $this->iniciar_ADM();
        }else{
          echo "error";
        }

    }
/////////////////////////////////CONTACTO////////////////////////////////
  function enviarContacto(){
  if((!empty($_POST['nombre']))&&(!empty($_POST['email']))&&(!empty($_POST['mensaje']))){
    $consulta = array('nombre' =>$_POST['nombre'] ,'email' =>$_POST['email'],'mensaje' =>$_POST['mensaje']);
    $this->contactoModel->enviarContacto($consulta);
    }
   else {
echo "error en el envio del formulario";   }

}

}






 ?>

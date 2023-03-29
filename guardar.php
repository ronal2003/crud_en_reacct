<?php 

if(isset($_GET['guardar'])){
    guardarArchivo();
}

function guardarArchivo(){
    include 'bd.php';

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];

    print_r($_POST);
    
    $persona = $conn->prepare("INSERT INTO persona(id,nombre,apellido) 
    VALUES('id','nombre','apellido')");   
    $persona->bind_param(":id",$id);
    $persona->bind_param(":nombre",$nombre);
    $persona->bind_param(":apellido",$apellido);
    $persona->execute();
   
  
}
?>
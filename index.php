<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
 include 'bd.php';

 $id = (isset($_POST['id'])?$_POST['id']: "");
 $nombre = (isset($_POST['nombre'])?$_POST['nombre']: "");
 $apellido = (isset($_POST['apellido'])?$_POST['apellido']: "");

 
 
 $persona = $conn->prepare("INSERT INTO persona(id,nombre,apellido) VALUES('$id','$nombre', '$apellido')");   
 //$persona->bind_param(":id",$id);
//  $persona->bind_param(":nombre",$nombre);
//  $persona->bind_param(":apellido",$apellido);
 $persona->execute();


?>
<!-- <form action="guardar.php" method="POST"> -->
<input type="number" name="id" id="id" placeholder="ingrese el id">
<input type="text" name="nombre" id="nombre" placeholder="ingrese el nombre">
<input type="text" name="apellido" id="apellido" placeholder="ingrese el apellido">

<button type="submit" id="guardar" name="guardar" >guardar</button>

<!-- </form> -->


</body>
</html>
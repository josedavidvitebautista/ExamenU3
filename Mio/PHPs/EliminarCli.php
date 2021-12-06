<?php
require 'Conexion.php';

$Dato = '';

if(isset($_POST["FormUno"])){
    $Dato = $_POST["FormUno"];
}
$Borrar = "DELETE FROM clientes WHERE Nombre = '$Dato'";
$queryDel = mysqli_query($Conectar, $Borrar);
if($queryDel){
    header ('Location: ../HTMLs/Desk.php');
}else{
    echo "Error";
}

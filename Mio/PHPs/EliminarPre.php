<?php
require 'Conexion.php';

$Dato = '';

if(isset($_POST["FormDos"])){
    $Dato = $_POST["FormDos"];
}
$Borrar = "DELETE FROM prestamos WHERE Cliente = '$Dato'";
$queryDel = mysqli_query($Conectar, $Borrar);
if($queryDel){
    header ('Location: ../HTMLs/Desk.php');
}else{
    echo "Error!";
}

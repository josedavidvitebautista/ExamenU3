<?php
require 'Conexion.php';

$Dato = '';

if(isset($_POST["FormTres"])){
    $Dato = $_POST["FormTres"];
}
$Borrar = "DELETE FROM pagos WHERE Cliente = $Dato";
$queryDel = mysqli_query($Conectar, $Borrar);
if($queryDel){
    header ('Location: ../HTMLs/Desk.php');
}else{
    echo "Error";
}
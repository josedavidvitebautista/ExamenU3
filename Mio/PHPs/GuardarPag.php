<?php
require 'Conexion.php';

$TresNombre = '';
$TresMonto = '';
$TresHoy = "". date("d") . "/" . date("m") . "/" . date("Y");;

if(isset($_POST["TresNom"])){
    $TresNombre = $_POST["TresNom"];
}
if(isset($_POST["TresMon"])){
    $TresMonto = $_POST["TresMon"];
}

$Guardar = "INSERT INTO pagos VALUES ('$TresNombre', '$TresHoy', '$TresMonto')";
$query = mysqli_query($Conectar, $Guardar);

if($query){
    header ('Location: ../HTMLs/Desk.php');
}else{
    echo "Error";
}

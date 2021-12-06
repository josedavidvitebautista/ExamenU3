<?php
require 'Conexion.php';

$UnoNombre = '';
$UnoNumeroCliente = '';
$UnoEdad = '';
$UnoNumero = '';

if(isset($_POST["UnoNom"])){
    $UnoNombre = $_POST["UnoNom"];
}
if(isset($_POST["UnoNdC"])){
    $UnoNumeroCliente = $_POST["UnoNdC"];
}
if(isset($_POST["UnoEda"])){
    $UnoEdad = $_POST["UnoEda"];
}
if(isset($_POST["UnoNum"])){
    $UnoNumero = $_POST["UnoNum"];
}

$Agregar = "INSERT INTO clientes VALUES ('$UnoNombre', '$UnoNumeroCliente', '$UnoEdad', '$UnoNumero')";
$query = mysqli_query($Conectar, $Agregar);

if($query){
    header ('Location: ../HTMLs/Desk.php');
}else{
    echo "Error";
}

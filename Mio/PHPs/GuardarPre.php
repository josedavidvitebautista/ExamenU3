<?php
require 'Conexion.php';

$DosNombre = '';
$DosMonto = '';
$DosPlazo = '';
$DosPagos = '';
$Hoy = "". date("d") . "/" . date("m") . "/" . date("Y");;

if(isset($_POST["DosNom"])){
    $DosNombre = $_POST["DosNom"];
}
if(isset($_POST["DosMon"])){
    $DosMonto = $_POST["DosMon"];
}
if(isset($_POST["DosPla"])){
    $DosPlazo = $_POST["DosPla"];
}
if(isset($_POST["DosPag"])){
    $DosPagos = $_POST["DosPag"];
}
$Ope = intval($DosMonto) * 15/100;
$Res = intval($DosMonto) + $Ope;

$Insertar = "INSERT INTO prestamos VALUES ('$DosNombre', '$DosMonto', '$Hoy', '15%', '$DosPlazo', 'Activo', '$DosPagos', '$Res')";
$query = mysqli_query($Conectar, $Insertar);

if($query){
    header ('Location: ../HTMLs/Desk.php');
}

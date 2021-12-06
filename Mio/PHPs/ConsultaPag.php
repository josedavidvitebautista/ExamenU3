<?php
require 'Conexion.php';

$Consultar = "SELECT * FROM pagos";
$queryPag = mysqli_query($Conectar, $Consultar);
$array = mysqli_fetch_array($queryPag);
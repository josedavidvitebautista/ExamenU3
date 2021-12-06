<?php
require 'Conexion.php';

$Consultar = "SELECT * FROM prestamos";
$queryPre = mysqli_query($Conectar, $Consultar);
$array = mysqli_fetch_array($queryPre);
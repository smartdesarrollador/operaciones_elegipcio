<?php

session_start();
require 'model/Tienda.php';
$objtienda = new Tienda();

$fecha = $_POST['fecha_cupon_san_miguel'];
//$idTienda = $_POST['idTienda'];

$tienda = $objtienda->updateFechaSanMiguel($fecha);
//$codigo_cupon = $tienda['cupon'];

header("Location: tienda.php");

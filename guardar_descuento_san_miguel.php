<?php

session_start();
require 'model/Tienda.php';
$objtienda = new Tienda();

$descuento = $_POST['descuento_san_miguel'];
//$idTienda = $_POST['idTienda'];

$tienda = $objtienda->updateDescuentoSanMiguel($descuento);
//$codigo_cupon = $tienda['cupon'];

header("Location: tienda.php");

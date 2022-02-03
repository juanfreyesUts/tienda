<?php

$producto=$_POST['producto'];
$unidades=$_POST['unidades'];
$talla=$_POST['talla'];
$valor=$_POST['valor'];

// echo "<h3>Carrito de compras</h3> <br>";
echo "<br>";
echo "<h3>Factura</h3>";
echo "Producto: ".$producto."<br>";
echo "Unidades: ".$unidades."<br>";
echo "Talla: ".$talla."<br>";
echo "Valor: $".$valor."<br>";

echo "Total a pagar: $".$valor*$unidades."<br>";

?>
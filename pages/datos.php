

<!DOCTYPE html>
<html>
<head>
	<title>Tienda Online</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="CSS/style1.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
	<center>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark" class="menu">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html">
         <img src="images/logo.jpg" style="width: 4rem;" style="height: 3rem;">   
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.html">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="pages/camisas.html">Camisas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="pages/calzado.html">Calzado</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="pages/pantalones.html">pantalones</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="pages/vestidos.html">Vestidos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="pages/about.html" target="_blank">Conozcanos</a>
                </li>
              </ul>
              <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
              </form>
          </div>
        </div>
    </nav>
</center>

<center>
<br>
    <div class="container">
    <div class="row">
    <div class="col">
  <div>

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

  </div>
</div>
<div class="col">
  <form action="guardar.php" class="tienda" id="tienda" name="tienda" method="POST">
        <div>
          <div style="width: 18rem;">
          <div>
          <p><h3>Registrar compra</h3></p>
          Nombre <input type="text" name="Nombre" placeholder="Nombre" required><br>
          Correo <input type="text" name="Correo" placeholder="Correo" required><br>
          Direccion <input type="text" name="Direccion" placeholder="Direccion" required><br>
          Telefono <input type="int" name="Telefono" placeholder="Telefono" required><br>
          <br><input style="width: 12rem" type="submit" name="Registrar" value="Registrar compra" class="btn btn-primary">
        </div>
      </div>
    </div>
  </form>
</div>
</div>
</div>




</center>

<br>
<br>

<section style="margin-top: 150px">
  <!-- Footer -->
  <footer class="text-center text-white" style="background-color: #0a4275;">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: CTA -->
      <section class="">
        <p class="d-flex justify-content-center align-items-center">
          <span class="me-3">Vuelve pronto, esperamos que te haya gustado la pagina </span>
        </p>
      </section>
      <!-- Section: CTA -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2021 Copyright:
      <a class="text-white">konshudo.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
</section>
<script src="tienda.js"></script>
</body>
</html>



<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="CSS/style1.css">
</head>
<body>
	<center>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark" class="menu">
        <div class="container-fluid">
          <a class="navbar-brand" href="/tienda/index.php">
         <img src="/tienda/images/logo.jpg" style="width: 4rem;" style="height: 3rem;">   
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/tienda/index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/tienda/pages/camisas.php">Camisas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/tienda/pages/calzado.php">Calzado</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/tienda/pages/pantalones.php">pantalones</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/tienda/pages/vestidos.php">Vestidos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/tienda/pages/about.php">Conozcanos</a>
                </li>
              </ul>
              <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
              </form>
          </div>
        </div>
    </nav>

		<br>

                        <!------ Titulo de la tienda ------>

		<h1>Pantalones</h1>

		<br>

		<div class="container">
  <div class="row">
    <div class="col">

<form action="datos.php" method="POST">

	<div class="card" style="width: 18rem;">
  		<img src="/tienda/images/sudadera.jpg" class="card-img-top" alt="sudadera">
  		<div class="card-body">

                        <!----- sudaderas ----->

    		<input type="hidden" value="Sudadera" name="producto"><h5>sudadera</h5>
        <input type="hidden" value="98.999" name="valor"><p>$98.999</p>
    		
        <h5>Talla</h5><select id="talla" name="talla">
    			<option value="S">S</option>
    			<option value="M">M</option>
    			<option value="L">L</option>
    		</select><br>
    		<br>
    		<select id="unidades" name="unidades" style="width: 3rem;">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
        </select>
        <input type="submit" name="Enviar" value="Comprar" class="btn btn-primary">
  		</div>
	</div>
</form>

    </div>
    <div class="col">

<form action="datos.php" method="POST">
      <div class="card" style="width: 18rem;">
        <img src="/tienda/images/pan.jpg" class="card-img-top" alt="jeans">
        <div class="card-body">

                        <!----- Jeans para hombre ----->

          <input type="hidden" value="Jeans" name="producto"><h5>Jeans</h5>
          <input type="hidden" value="79.999" name="valor"><p>$79.999</p>
          <h5>Talla</h5><select id="talla" name="talla">
          <option value="S">S</option>
          <option value="M">M</option>
          <option value="L">L</option>
        </select><br>
        <br>
          <select id="unidades" name="unidades" style="width: 3rem;">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
        </select>
        <input type="submit" name="Enviar" value="Comprar" class="btn btn-primary">
        </div>
    </div>
</form>



                  <!--- espacio para un solo puesto mas --->


    </div>
  </div>
</div>
	</center>

<br>
                        <!----- footer ----->

<section class="">
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

	

</body>
</html>